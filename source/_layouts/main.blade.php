<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicon/site.webmanifest">        
    </head>
    <body>
        <header class="z-40 h-20 fixed left-0 top-0 w-full bg-purple_400 border-b border-white/10">
            <div class="max-w-[1440px] mx-auto px-4 sm:px-6 md:px-12 lg:px-20 h-full flex items-center justify-between">
                <a href="/">
                    <img class="h-9 lg:h-11 object-contain" src="/assets/images/logo.svg" alt="Kubu Cat Bali logo">
                </a>

                <div class="hidden md:flex items-center gap-10 text-white text-md-reguler">
                    <a href="/about-us" class="[&.active]:text-yellow_500">About Us</a>
                    <a href="/donate" class="[&.active]:text-yellow_500">Donation</a>
                    <!--<a href="/contact-us" class="hidden [&.active]:text-yellow_500">Contact Us</a>-->
                </div>

                <div class="flex items-center gap-6">
                    <a href="/donate" class="block px-5 md:px-6 py-2 lg:py-3 bg-yellow_500 text-purple_500 rounded-full display-3xs">Donate</a>
                    <button id="menu-button" class="md:hidden outline-none size-8 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden fixed top-0 z-50 w-screen h-screen bg-purple_400 hidden">
            <div class="px-4 w-full h-20 flex items-center justify-between border-b border-black/20 bg-purple_400">
                <a href="/">
                    <img class="h-9 object-contain" src="/assets/images/logo.svg" alt="Kubu Cat Bali logo">
                </a>
                <div class="flex items-center gap-6">
                    <a href="/donate" class="block px-5 md:px-6 py-2 lg:py-3 bg-yellow_500 text-purple_500 rounded-full display-3xs">Donate</a>
                    <button id="close-button" class="md:hidden outline-none size-8 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-4 py-6 *:py-6 *:border-b *:border-white/10">
                <a href="/about-us" class="!pt-0 block rounded-lg text-white">About Us</a>
                <a href="/donate" class="block rounded-lg text-white">Donation</a>
                <!--<a href="/contact-us" class="block rounded-lg text-white">Contact Us</a>-->
            </div>
            <div class="px-4 mt-6 text-white font-satoshi">
                <div class="flex items-center gap-6 mb-6 hidden">
                    <a href="#"><img class="size-6" src="/assets/images/icon/ig.svg" alt="Instagram icon"></a>
                    <a href="#"><img class="size-6" src="/assets/images/icon/fb.svg" alt="Facebook icon"></a>
                    <a href="#"><img class="size-6" src="/assets/images/icon/x.svg" alt="X icon"></a>
                </div>
                <div class="text-sm-reguler">&copy; {{ date('Y') }} Kubu Cat Bali, All rights reserved.</div>
            </div>
        </div>
        @yield('body')

        <footer class="bg-purple_500 pt-20 md:pt-[100px] pb-12 md:pb-[60px] px-6 md:px-12 lg:px-16 xl:px-20 relative overflow-hidden">
            <svg class="z-0 w-[1024px] xl:w-[1440px] absolute scale-150 md:scale-100 -bottom-[480px] md:-bottom-[360px] xl:-bottom-[667px] left-[50%] -translate-x-1/2 text-[#3D2D9C]" viewBox="0 0 1377 996" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M582.293 165.016C579.008 157.713 575.33 150.574 571.277 143.631C495.52 13.7543 313.62 -1.50422 164.983 109.553C16.3285 220.626 -42.7572 415.931 33 545.808C69.9879 609.227 132.293 645.315 203.67 652.716C192.442 728.273 203.245 802.654 239.449 864.717C331.175 1021.97 551.222 1040.61 730.914 906.343C834.833 828.695 902.516 716.919 923.372 606.042C1009.03 634.843 1117.28 615.37 1212 544.583C1360.64 433.526 1419.73 238.204 1343.98 108.327C1268.23 -21.5494 1086.33 -36.7915 937.69 74.2654C907.338 96.9408 880.713 123.145 858.206 151.571C856.327 134.907 851.341 119.028 843.038 104.782C806.198 41.6084 717.675 34.2242 645.318 88.2823C617.385 109.144 595.957 136.116 582.277 165L582.293 165.016Z" fill="currentColor"/>
            </svg>

            <div class="relative z-10 text-center text-white flex flex-col items-center">
                <div class="text-center display-2xl mb-10">
                    <div>Giving homeless cats<span class="sm:hidden"> a safe place to heal and grow</span></div>
                    <div class="hidden sm:block">a safe place to heal and grow</div>
                </div>
                <a href="/donate" class="mb-20 md:mb-[100px] inline-block px-6 py-3 lg:py-4 bg-yellow_500 text-purple_500 rounded-full display-3xs">Donate Now</a>
                <a href="/" class="inline-block mx-auto mb-10">
                    <img class="w-20 object-contain grayscale brightness-0 invert" src="/assets/images/logo.svg" alt="Logo white">
                </a>
                <div class="w-full flex flex-col gap-10 lg:flex-row items-center justify-between lg:justify-between font-satoshi">
                    <div class="order-3 lg:order-1 text-sm-reguler">&copy; {{ date('Y') }} Kubu Cat Bali, All rights reserved.</div>
                    <div class="order-1 lg:order-2 flex items-center gap-6 text-sm-medium">
                        <a href="/about-us">About Us</a>
                        <a href="/donate">Donation</a>
                       <!--<a href="/contact-us">Contact Us</a>-->
                    </div>
                    <div class="order-2 lg:order-3 w-[256.5px] flex items-center justify-center lg:justify-end gap-6 hidden">
                        <a href="#"><img class="size-6" src="/assets/images/icon/ig.svg" alt="Instagram icon"></a>
                        <a href="#"><img class="size-6" src="/assets/images/icon/fb.svg" alt="Facebook icon"></a>
                        <a href="#"><img class="size-6" src="/assets/images/icon/x.svg" alt="X icon"></a>
                    </div>
                </div>
            </div>
        </footer>

        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @yield('additional-scripts')
    </body>
</html>
