@extends('_layouts.main')

@section('body')


<section class="bg-purple_400 overflow-hidden rounded-b-3xl lg:rounded-b-[80px] mt-20">
    <div class="py-12 sm:py-20 md:py-[100px] lg:py-[120px] relative max-w-[1440px] mx-auto">
        <img class="absolute z-0 w-[539px] -right-[120px] -bottom-[140px] object-contain" src="/assets/images/graphic-2.svg" alt="Graphic element">

        <div class="relative z-10 md:flex items-start justify-between gap-14 lg:gap-20 xl:gap-[120px] px-6 md:px-12 lg:px-16 xl:px-20">
            <div class="md:w-1/2 lg:w-auto text-white mb-14 md:mb-0">
                <div class="display-2xl mb-6 lg:mb-8">Contact us</div>
                <div class="text-lg-medium font-satoshi mb-10 lg:mb-12">We're here to help, whether to answer an animal welfare question or assist if you are one of our valued supporters.</div>
                <div class="space-y-9 max-w-[519px]">
                    <div class="flex items-start gap-4">
                        <img class="size-6" src="/assets/images/icon/mail.svg" alt="Email icon">
                        <div class="font-satoshi">
                            <div class="mb-1 text-md-bold">Email us</div>
                            <div class="text-md-reguler">yayasan.kubu.bali@gmail.com</div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <img class="size-6" src="/assets/images/icon/whatsapp.svg" alt="Whatsapp icon">
                        <div class="font-satoshi">
                            <div class="mb-1 text-md-bold">Chat us on Whatsapp</div>
                            <div class="text-md-reguler">+62 8123-7024-932</div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <img class="size-6" src="/assets/images/icon/pin.svg" alt="Pin icon">
                        <div class="font-satoshi">
                            <div class="mb-1 text-md-bold">Visit our shelter</div>
                            <div class="text-md-reguler">Banjar Dama, Jalan Raya Padonan 32B Resident Van Dama no. 1, Tibubeneng, Kuta Utara, Bali</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative md:w-1/2 lg:w-auto">
                <img class="z-0 absolute -top-[56.8px] -left-[60px] w-[94px] -rotate-45" src="/assets/images/paw-graphic.svg" alt="Paw Graphic element">
                <div class="relative z-10 w-full lg:w-[480px] xl:w-[628px] flex-shrink-0 font-satoshi bg-white text-grey_900 rounded-3xl p-6 sm:p-10 md:p-6 lg:p-10 flex flex-col items-stretch gap-6">
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
    </div>
</section>

<section class="py-20 md:py-[100px] lg:py-[140px] max-w-[1440px] mx-auto px-6 md:px-12 lg:px-16 xl:px-20 text-grey_900">
    <div class="display-lg mb-10 lg:mb-16 text-center">Frequently Asked Questions</div>
    <div class="border-y border-solid border-grey_100 last:border-b-0">
        <button class="accordion group outline-none w-full text-left py-6 sm:py-7 md:py-8 lg:py-9 relative pr-[52px] lg:pr-[68px] border-b border-grey_100">
            <div class="display-xs">How do I make a donation?</div>
            <div class="panel max-h-0 overflow-hidden group-[.active]:max-h-full">
                <div class="pt-3 text-lg-reguler font-satoshi">Donations can be channeled via bank transfer or click here <a href="donation.html" class="font-bold text-purple_500">Donate Now</a>.</div>
            </div>

            <div class="group-[.active]:-rotate-180 absolute top-1/2 -translate-y-1/2 right-0 bg-purple_400 rounded-full size-9 lg:size-11 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 lg:size-7 text-white mt-0.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
        </button>
        <button class="accordion group outline-none w-full text-left py-6 sm:py-7 md:py-8 lg:py-9 relative pr-[52px] lg:pr-[68px] border-b border-grey_100">
            <div class="display-xs">What is Yayasan Kubu Cat Bali?</div>
            <div class="panel max-h-0 overflow-hidden group-[.active]:max-h-full">
                <div class="pt-3 text-lg-reguler font-satoshi">Donations can be channeled via bank transfer or click here <a href="donation.html" class="font-bold text-purple_500">Donate Now</a>.</div>
            </div>

            <div class="group-[.active]:-rotate-180 absolute top-1/2 -translate-y-1/2 right-0 bg-purple_400 rounded-full size-9 lg:size-11 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 lg:size-7 text-white mt-0.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
        </button>
        <button class="accordion group outline-none w-full text-left py-6 sm:py-7 md:py-8 lg:py-9 relative pr-[52px] lg:pr-[68px] border-b border-grey_100">
            <div class="display-xs">Where does Yayasan Kubu Cat Bali organize?</div>
            <div class="panel max-h-0 overflow-hidden group-[.active]:max-h-full">
                <div class="pt-3 text-lg-reguler font-satoshi">Donations can be channeled via bank transfer or click here <a href="donation.html" class="font-bold text-purple_500">Donate Now</a>.</div>
            </div>

            <div class="group-[.active]:-rotate-180 absolute top-1/2 -translate-y-1/2 right-0 bg-purple_400 rounded-full size-9 lg:size-11 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 lg:size-7 text-white mt-0.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
        </button>
        <button class="accordion group outline-none w-full text-left py-6 sm:py-7 md:py-8 lg:py-9 relative pr-[52px] lg:pr-[68px] border-b border-grey_100">
            <div class="display-xs">Who is the organizer of Yayasan Kubu Cat Bali?</div>
            <div class="panel max-h-0 overflow-hidden group-[.active]:max-h-full">
                <div class="pt-3 text-lg-reguler font-satoshi">Donations can be channeled via bank transfer or click here <a href="donation.html" class="font-bold text-purple_500">Donate Now</a>.</div>
            </div>

            <div class="group-[.active]:-rotate-180 absolute top-1/2 -translate-y-1/2 right-0 bg-purple_400 rounded-full size-9 lg:size-11 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 lg:size-7 text-white mt-0.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
        </button>
        <button class="accordion group outline-none w-full text-left py-6 sm:py-7 md:py-8 lg:py-9 relative pr-[52px] lg:pr-[68px] border-b border-grey_100">
            <div class="display-xs">How can I join and contribute?</div>
            <div class="panel max-h-0 overflow-hidden group-[.active]:max-h-full">
                <div class="pt-3 text-lg-reguler font-satoshi">Donations can be channeled via bank transfer or click here <a href="donation.html" class="font-bold text-purple_500">Donate Now</a>.</div>
            </div>

            <div class="group-[.active]:-rotate-180 absolute top-1/2 -translate-y-1/2 right-0 bg-purple_400 rounded-full size-9 lg:size-11 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 lg:size-7 text-white mt-0.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
        </button>
    </div>
</section>

@endsection