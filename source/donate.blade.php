@extends('_layouts.main')

@section('body')

<section class="mt-20 bg-purple_400 md:h-[600px] lg:h-[800px] py-16 md:py-[100px] lg:py-[120px] overflow-hidden rounded-b-3xl lg:rounded-b-[80px]">
    <div class="flex flex-col md:flex-row items-center gap-8 sm:gap-12 lg:gap-[72px] xl:gap-[92px] relative max-w-[1440px] h-full mx-auto px-6 md:px-12 lg:px-16 xl:px-20 text-white">
        <img class="z-0 absolute w-[854px] -right-[200px] md:-right-[360px] lg:-right-[240px] xl:-right-[134px] -bottom-[200px] md:-bottom-[360px] lg:-bottom-[286px]" src="/assets/images/graphic.svg" alt="Graphic element">

        <div class="z-10 relative flex flex-col items-start">
            <div class="display-2xl mb-6 lg:mb-8">Your Donation Will Save More Animal Lives</div>
            <div class="font-satoshi text-lg-reguler mb-8 lg:mb-10">Animal suffering won’t stop for a day, and neither will we. Our dedicated teams work tirelessly to ensure no animal is left behind.</div>
            <a href="#" class="hidden block px-6 py-3 lg:py-4 bg-yellow_500 text-purple_500 rounded-full display-3xs">Donate Now</a>
        </div>

        <img class="z-10 relative w-full h-[200px] sm:h-[360px] md:size-[240px] lg:size-[360px] xl:size-[560px] rounded-3xl md:rounded-[40px] flex-shrink-0 object-cover object-center" src="/assets/images/donation-img.jpg" alt="Cat Image">
    </div>
</section>

<section class="py-20 md:py-[100px] lg:py-[140px] max-w-[1440px] mx-auto md:flex items-start justify-between gap-20 lg:gap-[120px] px-6 md:px-12 lg:px-16 xl:px-20">
    <div class="text-grey_900 mb-14 md:mb-0">
        <div class="mb-14 lg:mb-[100px]">
            <div class="mb-6 lg:mb-8 display-md">Challenge</div>
            <div class="mb-12 lg:mb-[60px] font-satoshi text-grey_700 text-lg-reguler">Small charitable organizations are finding it difficult to raise money for day-to-day operations to achieve their mission. Recognizing that long-term sustainability would require a way to supplement the donations given each year by people like you, Hart’s founders developed an innovative model to help fund the important work being done in Bali to rescue, care for, and find adopting homes for pets.</div>
        </div>
        <div class="space-y-6 lg:space-y-8">
            <div class="display-md">Our Work</div>
            <div class="font-satoshi text-grey_700 text-lg-reguler">All animals deserve our kindness, whether they live in homes, farms, labs, or in the wild. We speak up for them, protect them, rescue and care for them – with you by our side.</div>
            <div class="space-y-5 font-satoshi">
                <div class="flex items-center gap-4">
                    <img class="size-6" src="/assets/images/icon/animal-print-simple.svg" alt="Animal print icon">
                    <div class="text-lg-medium">Rescue dumped and stray cats, even kitten</div>
                </div>
                <div class="flex items-center gap-4">
                    <img class="size-6" src="/assets/images/icon/animal-print-simple.svg" alt="Animal print icon">
                    <div class="text-lg-medium">Full-service veterinary practice</div>
                </div>
                <div class="flex items-center gap-4">
                    <img class="size-6" src="/assets/images/icon/animal-print-simple.svg" alt="Animal print icon">
                    <div class="text-lg-medium">Adopting center</div>
                </div>
            </div>
            <div class="text-lg-reguler font-satoshi text-grey_700">
                Our want is to ensure a long-term legacy for the animals in need of rescue and seeking their forever homes through our adoption center. Our ability to thrive in the years ahead still depends heavily on your generosity. <span class="font-bold">Please consider making a donation today.</span>
            </div>
        </div>
    </div>
    <div class="w-full md:w-[360px] lg:w-[420px] xl:w-[520px] flex-shrink-0 font-satoshi bg-white border border-grey_100 text-grey_900 rounded-2xl shadow-[0_4px_8px_0_rgba(0,0,0,0.04),0_14px_14px_0_rgba(0,0,0,0.03),0_32px_19px_0_rgba(0,0,0,0.02),0_56px_23px_0_rgba(0,0,0,0.01),0_88px_25px_0_rgba(0,0,0,0)]">
        @include('_partials/donate')
    </div>
</section>

<section class="bg-purple_400 overflow-hidden hidden">
    <div class="py-20 md:py-[100px] relative max-w-[1440px] mx-auto">
        <img class="absolute -top-[130px] -right-[100px] md:-right-[241px] w-[64%] -rotate-90" src="/assets/images/graphic.svg" alt="Graphic element">

        <div class="relative z-10 md:flex items-start justify-between gap-20 xl:gap-[120px] px-6 md:px-12 lg:px-16 xl:px-20">
            <div class="text-white mb-14 md:mb-0">
                <div class="display-lg mb-6 lg:mb-[38px]">Get in Touch with Kubu Cat Bali</div>
                <div class="text-lg-medium font-satoshi mb-8 lg:mb-10">We will reply to your message as soon as possible. If you would like to make and appointment or need to change an upcoming appointment, please contact us at:</div>
                <div class="space-y-5 max-w-[411px]">
                    <div class="flex items-start gap-4">
                        <img class="size-6" src="/assets/images/icon/mail.svg" alt="Email icon">
                        <div class="font-satoshi">
                            <div class="mb-1 text-md-bold">Email us</div>
                            <div class="text-md-reguler">yayasan.kubu.bali@gmail.com</div>
                        </div>
                    </div>
                    <div class="w-full border-t border-white/10"></div>
                    <div class="flex items-start gap-4">
                        <img class="size-6" src="/assets/images/icon/whatsapp.svg" alt="Whatsapp icon">
                        <div class="font-satoshi">
                            <div class="mb-1 text-md-bold">Chat us on Whatsapp</div>
                            <div class="text-md-reguler">+62 8123-7024-932</div>
                        </div>
                    </div>
                    <div class="w-full border-t border-white/10"></div>
                    <div class="flex items-start gap-4">
                        <img class="size-6" src="/assets/images/icon/pin.svg" alt="Pin icon">
                        <div class="font-satoshi">
                            <div class="mb-1 text-md-bold">Visit our shelter</div>
                            <div class="text-md-reguler">Banjar Dama, Jalan Raya Padonan 32B Resident Van Dama no. 1, Tibubeneng, Kuta Utara, Bali</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-[480px] xl:w-[628px] flex-shrink-0 font-satoshi bg-white text-grey_900 rounded-3xl p-6 sm:p-10 md:p-6 lg:p-10 flex flex-col items-stretch gap-6">
                <div>
                    <label for="fullname" class="block text-md-medium text-grey_900 mb-2">Full name</label>
                    <input class="w-full border border-grey_200 py-2.5 px-4 rounded-lg" placeholder="Insert your full name" id="fullname" type="text">
                </div>
                <div>
                    <label for="email" class="block text-md-medium text-grey_900 mb-2">Email</label>
                    <input class="w-full border border-grey_200 py-2.5 px-4 rounded-lg" placeholder="Insert your email" id="email" type="email">
                </div>
                <div>
                    <label for="phone" class="block text-md-medium text-grey_900 mb-2">Phone number</label>
                    <input class="w-full border border-grey_200 py-2.5 px-4 rounded-lg" placeholder="Insert your phone number" id="phone" type="text">
                </div>
                <div>
                    <label for="message" class="block text-md-medium text-grey_900 mb-2">Message</label>
                    <textarea name="message" rows="4" id="message" class="w-full border border-grey_200 py-2.5 px-4 rounded-lg" placeholder="Write message"></textarea>
                </div>
                <div>
                    <button type="submit" class="inline-block py-3 lg:py-4 px-6 rounded-full bg-yellow_500 text-purple_500 display-3xs !font-bold">Send</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection