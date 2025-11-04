#!/bin/bash

# Standalone Static Site Deployment Script for S3 + CloudFront
# Usage: ./forge-deploy.sh [config-file]
# Example: ./forge-deploy.sh deploy-config.json
# If no config is specified, uses deploy-config.json in the same directory
#
# Create a deploy-config.json file with the following structure:
# {
#   "bucket_name": "your-bucket-name",
#   "cloudfront_distribution_id": "E1234567890ABC",
#   "aws_profile": "default",           // optional, omit to use IAM role
#   "aws_region": "us-east-1",          // optional, defaults to us-east-1
#   "dist_folder": "dist",              // optional, defaults to "dist"
#   "redirects": [                      // optional
#     {
#       "from": "/old-path",
#       "to": "/new-path",
#       "code": 301
#     }
#   ]
# }

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Get config file from argument or use default
CONFIG_FILE=${1:-deploy-config.json}

echo -e "${GREEN}=== Static Site Deployment to S3 + CloudFront ===${NC}\n"

# Check if config file exists
if [ ! -f "$CONFIG_FILE" ]; then
    echo -e "${RED}ERROR: $CONFIG_FILE not found${NC}"
    echo ""
    echo "Please create $CONFIG_FILE with your deployment configuration"
    echo ""
    echo "Example deploy-config.json:"
    cat <<'EOF'
{
  "bucket_name": "your-bucket-name",
  "cloudfront_distribution_id": "E1234567890ABC",
  "aws_profile": "default",
  "aws_region": "us-east-1",
  "dist_folder": "dist",
  "redirects": [
    {
      "from": "/old-path",
      "to": "/new-path",
      "code": 301
    }
  ]
}
EOF
    exit 1
fi

# Check if jq is installed for JSON parsing
if ! command -v jq &> /dev/null; then
    echo -e "${RED}ERROR: jq is not installed${NC}"
    echo "Install it with: brew install jq (macOS) or apt-get install jq (Linux)"
    exit 1
fi

# Load configuration from JSON
S3_BUCKET=$(jq -r '.bucket_name' "$CONFIG_FILE")
CLOUDFRONT_DISTRIBUTION_ID=$(jq -r '.cloudfront_distribution_id' "$CONFIG_FILE")
AWS_PROFILE=$(jq -r '.aws_profile // ""' "$CONFIG_FILE")
AWS_REGION=$(jq -r '.aws_region // "us-east-1"' "$CONFIG_FILE")
DIST_FOLDER=$(jq -r '.dist_folder // "dist"' "$CONFIG_FILE")

# If AWS_PROFILE is empty or null, try to use IAM role (no --profile flag needed)
if [ -z "$AWS_PROFILE" ] || [ "$AWS_PROFILE" == "null" ]; then
    PROFILE_FLAG=""
    PROFILE_DISPLAY="IAM Role (EC2 Instance)"
    AWS_PROFILE=""
else
    PROFILE_FLAG="--profile $AWS_PROFILE"
    PROFILE_DISPLAY="$AWS_PROFILE"
fi

# Validate required variables
if [ -z "$S3_BUCKET" ] || [ "$S3_BUCKET" == "null" ]; then
    echo -e "${RED}ERROR: bucket_name not set in $CONFIG_FILE${NC}"
    exit 1
fi

if [ -z "$CLOUDFRONT_DISTRIBUTION_ID" ] || [ "$CLOUDFRONT_DISTRIBUTION_ID" == "null" ]; then
    echo -e "${RED}ERROR: cloudfront_distribution_id not set in $CONFIG_FILE${NC}"
    exit 1
fi

echo -e "${BLUE}Configuration:${NC}"
echo "  Config File: $CONFIG_FILE"
echo "  S3 Bucket: $S3_BUCKET"
echo "  CloudFront Distribution: $CLOUDFRONT_DISTRIBUTION_ID"
echo "  Auth: $PROFILE_DISPLAY"
echo "  AWS Region: $AWS_REGION"
echo "  Dist Folder: $DIST_FOLDER"
echo ""

# Check if AWS CLI is installed
if ! command -v aws &> /dev/null; then
    echo -e "${RED}ERROR: AWS CLI is not installed${NC}"
    echo "Install it from: https://aws.amazon.com/cli/"
    exit 1
fi

# Check AWS credentials
if ! aws sts get-caller-identity $PROFILE_FLAG &> /dev/null; then
    echo -e "${RED}ERROR: AWS credentials not available${NC}"
    if [ -z "$PROFILE_FLAG" ]; then
        echo "No IAM role found on this EC2 instance."
        echo "Either:"
        echo "  1. Attach an IAM role to this EC2 instance, or"
        echo "  2. Configure AWS credentials: aws configure"
        echo "  3. Set aws_profile in $CONFIG_FILE"
    else
        echo "Profile '$AWS_PROFILE' not configured."
        echo "Run: aws configure $PROFILE_FLAG"
    fi
    exit 1
fi

# Check if dist folder exists
if [ ! -d "$DIST_FOLDER" ]; then
    echo -e "${RED}ERROR: $DIST_FOLDER folder not found${NC}"
    echo "Please build your site first or check the dist_folder setting in $CONFIG_FILE"
    exit 1
fi

echo -e "${GREEN}✓ Pre-flight checks passed${NC}\n"

# Step 1: Sync to S3
echo -e "${YELLOW}Step 1: Syncing files to S3...${NC}"
echo "Uploading from $DIST_FOLDER/ to s3://$S3_BUCKET/"

# Upload all files except HTML, XML, TXT with long cache
aws s3 sync "$DIST_FOLDER/" "s3://$S3_BUCKET/" \
    --delete \
    $PROFILE_FLAG \
    --cache-control "public, max-age=31536000" \
    --exclude "*.html" \
    --exclude "*.xml" \
    --exclude "*.txt"

# Upload HTML files with no cache
aws s3 sync "$DIST_FOLDER/" "s3://$S3_BUCKET/" \
    $PROFILE_FLAG \
    --cache-control "public, max-age=0, must-revalidate" \
    --content-type "text/html" \
    --exclude "*" \
    --include "*.html"

# Upload XML and TXT files with no cache
aws s3 sync "$DIST_FOLDER/" "s3://$S3_BUCKET/" \
    $PROFILE_FLAG \
    --cache-control "public, max-age=0, must-revalidate" \
    --exclude "*" \
    --include "*.xml" \
    --include "*.txt"

echo -e "${GREEN}✓ Files synced to S3${NC}\n"

# Step 2: Update CloudFront redirects (if configured)
echo -e "${YELLOW}Step 2: Configuring redirects...${NC}"

# Check if redirects are defined in config
REDIRECTS=$(jq -r '.redirects // [] | length' "$CONFIG_FILE")

if [ "$REDIRECTS" -gt 0 ]; then
    echo "Processing $REDIRECTS redirects from $CONFIG_FILE"

    # Generate CloudFront Function code from redirects
    FUNCTION_CODE=$(cat <<'FUNCTION_START'
function handler(event) {
    var request = event.request;
    var uri = request.uri;

    // Redirect map generated from config
    var redirects = {
FUNCTION_START
)

    # Parse redirects and add to function code
    for i in $(seq 0 $(($REDIRECTS - 1))); do
        FROM=$(jq -r ".redirects[$i].from" "$CONFIG_FILE")
        TO=$(jq -r ".redirects[$i].to" "$CONFIG_FILE")
        CODE=$(jq -r ".redirects[$i].code // 302" "$CONFIG_FILE")

        FUNCTION_CODE+="
        \"$FROM\": {\"to\": \"$TO\", \"code\": $CODE},"
    done

    # Remove trailing comma and complete the function
    FUNCTION_CODE="${FUNCTION_CODE%,}"
    FUNCTION_CODE+=$(cat <<'FUNCTION_END'

    };

    // Check for exact match first
    var redirect = redirects[uri];

    // If no exact match, try with/without trailing slash
    if (!redirect) {
        if (uri.endsWith('/') && uri.length > 1) {
            // Try without trailing slash
            redirect = redirects[uri.slice(0, -1)];
        } else {
            // Try with trailing slash
            redirect = redirects[uri + '/'];
        }
    }

    // If we found a redirect, return it
    if (redirect) {
        return {
            statusCode: redirect.code,
            statusDescription: redirect.code === 301 ? 'Moved Permanently' : 'Found',
            headers: {
                'location': { value: redirect.to }
            }
        };
    }

    return request;
}
FUNCTION_END
)

    # Save function code to temporary file
    echo "$FUNCTION_CODE" > /tmp/cloudfront-redirect-function.js

    # Create or update CloudFront Function
    FUNCTION_NAME="redirect-handler-${CLOUDFRONT_DISTRIBUTION_ID}"

    # Check if function exists
    if aws cloudfront describe-function --name "$FUNCTION_NAME" $PROFILE_FLAG 2>/dev/null; then
        echo "Updating existing CloudFront Function: $FUNCTION_NAME"

        # Get current ETag
        ETAG=$(aws cloudfront describe-function \
            --name "$FUNCTION_NAME" \
            $PROFILE_FLAG \
            --query 'ETag' \
            --output text)

        # Update function code
        NEW_ETAG=$(aws cloudfront update-function \
            --name "$FUNCTION_NAME" \
            --function-config Comment="Redirect handler for $S3_BUCKET",Runtime=cloudfront-js-2.0 \
            --function-code fileb:///tmp/cloudfront-redirect-function.js \
            --if-match "$ETAG" \
            $PROFILE_FLAG \
            --query 'ETag' \
            --output text)

        # Publish the updated function
        PUBLISH_RESULT=$(aws cloudfront publish-function \
            --name "$FUNCTION_NAME" \
            --if-match "$NEW_ETAG" \
            $PROFILE_FLAG \
            --output json)

        PUBLISH_STAGE=$(echo "$PUBLISH_RESULT" | jq -r '.FunctionSummary.FunctionMetadata.Stage')
        PUBLISH_STATUS=$(echo "$PUBLISH_RESULT" | jq -r '.FunctionSummary.Status')

        if [ "$PUBLISH_STAGE" == "LIVE" ]; then
            echo -e "${GREEN}✓ CloudFront Function updated and published to LIVE${NC}"
        else
            echo -e "${RED}ERROR: Function not published to LIVE (Stage: $PUBLISH_STAGE, Status: $PUBLISH_STATUS)${NC}"
            exit 1
        fi
    else
        echo "Creating new CloudFront Function: $FUNCTION_NAME"

        # Create function
        FUNCTION_ARN=$(aws cloudfront create-function \
            --name "$FUNCTION_NAME" \
            --function-config Comment="Redirect handler for $S3_BUCKET",Runtime=cloudfront-js-2.0 \
            --function-code fileb:///tmp/cloudfront-redirect-function.js \
            $PROFILE_FLAG \
            --query 'FunctionSummary.FunctionMetadata.FunctionARN' \
            --output text)

        # Get ETag for publishing
        ETAG=$(aws cloudfront describe-function \
            --name "$FUNCTION_NAME" \
            $PROFILE_FLAG \
            --query 'ETag' \
            --output text)

        # Publish the function
        PUBLISH_RESULT=$(aws cloudfront publish-function \
            --name "$FUNCTION_NAME" \
            --if-match "$ETAG" \
            $PROFILE_FLAG \
            --output json)

        PUBLISH_STAGE=$(echo "$PUBLISH_RESULT" | jq -r '.FunctionSummary.FunctionMetadata.Stage')
        PUBLISH_STATUS=$(echo "$PUBLISH_RESULT" | jq -r '.FunctionSummary.Status')

        if [ "$PUBLISH_STAGE" == "LIVE" ]; then
            echo -e "${GREEN}✓ CloudFront Function created and published to LIVE: $FUNCTION_ARN${NC}"
        else
            echo -e "${RED}ERROR: Function not published to LIVE (Stage: $PUBLISH_STAGE, Status: $PUBLISH_STATUS)${NC}"
            exit 1
        fi

        # Get the distribution config
        DIST_CONFIG=$(aws cloudfront get-distribution-config \
            --id $CLOUDFRONT_DISTRIBUTION_ID \
            $PROFILE_FLAG \
            --output json)

        DIST_ETAG=$(echo "$DIST_CONFIG" | jq -r '.ETag')

        # Add function association to distribution
        UPDATED_CONFIG=$(echo "$DIST_CONFIG" | jq --arg arn "$FUNCTION_ARN" '
            .DistributionConfig.DefaultCacheBehavior.FunctionAssociations = {
                "Quantity": 1,
                "Items": [{
                    "FunctionARN": $arn,
                    "EventType": "viewer-request"
                }]
            }
        ' | jq '.DistributionConfig')

        echo "$UPDATED_CONFIG" > /tmp/distribution-config.json

        # Update distribution
        aws cloudfront update-distribution \
            --id $CLOUDFRONT_DISTRIBUTION_ID \
            --distribution-config file:///tmp/distribution-config.json \
            --if-match "$DIST_ETAG" \
            $PROFILE_FLAG \
            --output text > /dev/null

        echo -e "${GREEN}✓ Function associated with CloudFront distribution${NC}"

        # Clean up temp file
        rm /tmp/distribution-config.json
    fi

    # Clean up function code file
    rm /tmp/cloudfront-redirect-function.js

    echo -e "${GREEN}✓ Redirects configured ($REDIRECTS redirects)${NC}"
else
    echo -e "${YELLOW}⚠ No redirects configured in $CONFIG_FILE, skipping redirect configuration${NC}"
fi

echo ""

# Step 3: Create CloudFront invalidation
echo -e "${YELLOW}Step 3: Creating CloudFront invalidation...${NC}"
echo "Invalidating all cached content"

INVALIDATION_ID=$(aws cloudfront create-invalidation \
    --distribution-id $CLOUDFRONT_DISTRIBUTION_ID \
    --paths "/*" \
    $PROFILE_FLAG \
    --query 'Invalidation.Id' \
    --output text)

echo -e "${GREEN}✓ Invalidation created: $INVALIDATION_ID${NC}"

# Step 4: Wait for invalidation to complete
echo -e "\n${BLUE}Step 4: Waiting for invalidation to complete...${NC}"
echo "This typically takes 1-3 minutes"

aws cloudfront wait invalidation-completed \
    --distribution-id $CLOUDFRONT_DISTRIBUTION_ID \
    --id $INVALIDATION_ID \
    $PROFILE_FLAG

echo -e "${GREEN}✓ Invalidation complete${NC}\n"

# Summary
echo -e "${GREEN}=== Deployment Complete ===${NC}"
echo ""
echo "Your site has been deployed successfully!"
echo ""
echo "S3 Bucket: s3://$S3_BUCKET"
echo "CloudFront Distribution: $CLOUDFRONT_DISTRIBUTION_ID"
echo ""
echo "It may take a few minutes for the changes to propagate globally."
echo ""
