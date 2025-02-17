@extends('_layouts.main')

@section('body')
<section class="relative mt-20">
    <div class="absolute z-0 w-full rounded-b-3xl lg:rounded-b-[80px] bg-purple_400 h-[560px] sm:h-[700px] lg:h-[840px] overflow-hidden">
        <div class="relative w-full h-full">
            <img class="absolute top-[440px] sm:top-[450px] lg:top-[512px] lg:left-[3px] w-full scale-150 sm:scale-125 lg:scale-100 lg:w-[95%]" src="/assets/images/graphic.svg" alt="Graphic element">
            <img class="absolute w-8 sm:w-12 lg:w-[54px] object-contain left-[6%] sm:left-[10%] lg:left-[77px] top-[320px] sm:top-[320px] lg:top-[522px]" src="/assets/images/star-graphic.svg" alt="Start graphic element">
        </div>
    </div>

    <div class="relative z-10 pt-12 sm:pt-20 lg:pt-[100px] max-w-[846px] px-4 sm:px-6 text-center text-white mx-auto mb-[100px] lg:mb-[120px]">
        <div class="mb-4 sm:mb-6 lg:mb-8 display-2xl">
            <div>Bringing Hope</div>
            <div>to Stray Cats Life</div>
        </div>
        <div class="font-satoshi text-lg-reguler mb-6 sm:mb-10">We’re dedicated to rescuing and caring for abandoned cats in Bali. Support our mission to provide food, medical care, and a safe home for each one.</div>
        <div class="flex items-center justify-center gap-4">
            <a href="/donate" class="block px-6 py-3 lg:py-4 bg-yellow_500 text-purple_500 rounded-full display-3xs">Donate</a>
            <a href="/about-us" class="block px-6 py-3 lg:py-4 text-white border border-white rounded-full display-3xs">Learn More</a>
        </div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-4 items-end gap-4 lg:gap-6 mb-4 lg:mb-9 mx-4 sm:mx-6">
            <img class="order-2 lg:order-1 rounded-[40px] w-full h-[240px] sm:h-[360px] object-cover object-center flex-shrink-0" src="/assets/images/home-1.jpeg" alt="Home image">
            <img class="order-1 lg:order-2 rounded-[40px] col-span-2 w-full h-[240px] sm:h-[420px] object-cover object-center flex-grow" src="/assets/images/home-2.jpeg" alt="Home image">
            <img class="order-3 rounded-[40px] w-full h-[240px] sm:h-[360px] object-cover object-center flex-shrink-0" src="/assets/images/home-3.jpeg" alt="Home image">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 mx-4 sm:mx-6">
            <img class="h-[240px] sm:h-full lg:h-[320px] sm:row-span-2 lg:row-span-1 w-full rounded-[40px] object-cover object-center" src="/assets/images/home-4.jpeg" alt="Home image">
            <img class="h-[240px] sm:h-[320px] w-full rounded-[40px] object-cover object-center" src="/assets/images/home-5.jpeg" alt="Home image">
            <img class="h-[240px] sm:h-[320px] w-full rounded-[40px] object-cover object-center" src="/assets/images/home-6.jpeg" alt="Home image">
        </div>
    </div>
</section>

<section class="py-[100px] sm:py-[140px]">
    <div class="max-w-[846px] px-6 mx-auto flex flex-col items-center text-center">
        <img class="w-20 object-contain mb-7 sm:mb-9" src="/assets/images/logo-alt-1-purple.png" alt="Logo alt purple">
        <div class="display-lg mb-7 text-grey_900">About Kubu Cat Bali</div>
        <div class="text-lg-reguler mb-6 sm:mb-10 font-satoshi text-grey_700">Yayasan Kubu Cat Bali is a small yet dedicated non-profit committed to rescuing, caring for, and finding loving homes for Bali’s cats. With 24/7 care and a passion for animal welfare, we provide shelter, food, medical care, and love to over 40 cats in need. Join us in making a difference by supporting our mission.</div>
        <a href="/about-us" class="block px-6 py-3 lg:py-4 bg-yellow_500 text-purple_500 rounded-full display-3xs">Learn More</a>
    </div>
</section>

<section class="bg-purple_400 overflow-hidden">
    <div class="py-20 md:py-[100px] relative max-w-[1440px] mx-auto">
        <img class="absolute -top-[8%] sm:-top-[164px] md:-top-[117px] -right-10 sm:right-5 w-4/5 sm:w-[65%] scale-x-[-1]" src="/assets/images/graphic.svg" alt="Graphic element">

        <div class="relative z-10 md:flex items-center justify-between gap-20 lg:gap-[120px] px-6 md:px-12 lg:px-16 xl:px-20">
            <div class="text-white mb-14 md:mb-0">
                <div class="mb-6 lg:mb-10 display-lg">
                    <div>Your Donation</div>
                    <div>Make a Difference</div>
                </div>
                <div class="mb-12 lg:mb-[60px] font-satoshi text-lg-medium">We really value your support in ensuring that cats have a good life and are treated with compassion and respect.</div>
                <div class="space-y-9">
                    <div class="flex items-start gap-4">
                        <img class="size-6" src="/assets/images/icon/mail.svg" alt="Email icon">
                        <div class="font-satoshi">
                            <div class="mb-1 text-md-bold">Email us</div>
                            <div class="text-md-reguler">hello@cathousebali.com</div>
                        </div>
                    </div>
                    <div class="hidden flex items-start gap-4">
                        <img class="size-6" src="/assets/images/icon/whatsapp.svg" alt="Whatsapp icon">
                        <div class="font-satoshi">
                            <div class="mb-1 text-md-bold">Chat us on Whatsapp</div>
                            <div class="text-md-reguler">+62 8123-7024-932</div>
                        </div>
                    </div>
                    <div class="hidden flex items-start gap-4">
                        <img class="size-6" src="/assets/images/icon/pin.svg" alt="Pin icon">
                        <div class="font-satoshi">
                            <div class="mb-1 text-md-bold">Visit our shelter</div>
                            <div class="text-md-reguler">Banjar Dama, Jalan Raya Padonan 32B Resident Van Dama no. 1, Tibubeneng, Kuta Utara, Bali</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[360px] lg:w-[420px] xl:w-[520px] flex-shrink-0 font-satoshi bg-white text-grey_900 rounded-2xl shadow-[0_4px_8px_0_rgba(0,0,0,0.04),0_14px_14px_0_rgba(0,0,0,0.03),0_32px_19px_0_rgba(0,0,0,0.02),0_56px_23px_0_rgba(0,0,0,0.01),0_88px_25px_0_rgba(0,0,0,0)]">
                @include('_partials/donate')
            </div>
        </div>
    </div>
</section>
@endsection
