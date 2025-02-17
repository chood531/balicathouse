@extends('_layouts.main')

@section('body')

<section class="relative mt-20">
    <div class="absolute z-0 w-full rounded-b-3xl lg:rounded-b-[80px] bg-purple_400 h-[560px] sm:h-[700px] lg:h-[840px] overflow-hidden"></div>

    <div class="relative z-10 pt-12 sm:pt-20 lg:pt-[120px] max-w-[846px] px-4 sm:px-6 text-center text-white mx-auto mb-14 lg:mb-20">
        <div class="mb-4 sm:mb-6 lg:mb-8 display-2xl">
            <div>About Kubu Cat Bali</div>
        </div>
        <div class="font-satoshi text-lg-reguler mb-6 sm:mb-10">We’re dedicated to rescuing and caring for abandoned cats in Bali. Support our mission to provide food, medical care, and a safe home for each one.</div>
        <div class="flex items-center justify-center gap-4">
            <a href="#" class="hidden block px-6 py-3 lg:py-4 text-white border border-white rounded-full display-3xs">Learn More</a>
        </div>
    </div>

    <div class="relative z-10 w-full aspect-[1.61/1] lg:aspect-auto lg:h-[660px] max-w-[1110px] mx-auto sm:px-6">
        <div class="relative overflow-hidden bg-purple_300 w-full h-full rounded-none sm:rounded-t-[120px] md:rounded-t-[200px] lg:rounded-t-[240px] sm:rounded-b-xl md:rounded-b-2xl lg:rounded-b-3xl">
            <!-- Image -->
            <img class="pointer-events-none w-[38%] z-10 top-[29.2%] left-[0%] object-contain absolute" src="/assets/images/king.png" alt="King cat image">
            <img class="pointer-events-none w-[54.42%] z-0 top-[-1.5%] left-[10%] sm:left-[4.6%] object-contain absolute" src="/assets/images/munggu.png" alt="Munggu cat image">
            <img class="pointer-events-none w-[59.2%] z-10 top-[-0.7%] left-[37%] sm:left-[35.6%] object-contain absolute" src="/assets/images/rambo.png" alt="Rambo cat image">
            <img class="pointer-events-none w-[46.25%] z-20 top-[12%] lg:top-[4.7%] -right-[10%] sm:right-[-6.2%] object-contain absolute -scale-x-[1]" src="/assets/images/patrick.png" alt="Patrick cat image">
            <img class="pointer-events-none w-[5%] z-20 top-[22%] left-[8.2%] object-contain absolute" src="/assets/images/star-graphic.svg" alt="Star graphic image">
            <img class="pointer-events-none w-[8.9%] z-20 top-[11%] right-[12.5%] -rotate-45 object-contain absolute" src="/assets/images/paw-graphic.svg" alt="Paw graphic image">

            <!-- Name -->
            <div class="absolute left-[1%] sm:left-[4%] lg:left-[5.367%] bottom-[28%] lg:bottom-[23.5%] px-[1.5%] py-[0.75%] bg-white/15 rounded-full text-white font-medium text-xs md:text-sm">King</div>
            <div class="absolute left-[29%] sm:left-[27%] bottom-[77%] sm:bottom-[75%] lg:bottom-[72%] px-[1.5%] py-[0.75%] bg-white/15 rounded-full text-white font-medium text-xs md:text-sm rotate-[11deg]">Munggu</div>
            <div class="absolute right-[30%] sm:right-[34.65%] top-[12%] sm:top-[16%] lg:top-[20%] px-[1.5%] py-[0.75%] bg-white/15 rounded-full text-white font-medium text-xs md:text-sm -rotate-[13deg]">Rambo</div>
            <div class="absolute right-[6%] sm:right-[13%] top-[36%] sm:top-[39.5%] lg:top-[37.5%] px-[1.5%] py-[0.75%] bg-white/15 rounded-full text-white font-medium text-xs md:text-sm rotate-[2.41deg]">Patrick</div>
        </div>
    </div>
</section>

<section class="py-[100px] sm:py-[140px] max-w-[1110px] mx-auto px-6">
    <div class="display-3xs text-purple_400 mb-6 sm:mb-7">Our Mission</div>
    <div class="display-md text-grey_900 mb-6 sm:mb-10 lg:mb-[52px]">To improve the condition of animals in Bali. Rescue and transport, accessible spay/neuter surgeries, building and operating a humane animal center; sheltering and adopting homeless animals.</div>
    <div class="flex flex-col sm:flex-row flex-wrap items-start sm:items-center gap-4 sm:gap-6 font-satoshi">
        <div class="flex-shrink-0 py-3 px-4 rounded-full border-2 border-purple_400 flex items-center gap-2">
            <img class="size-6 sm:size-8" src="/assets/images/icon/animal-house.svg" alt="Secure Shelter icon">
            <div class="text-lg-medium whitespace-nowrap text-purple_400">Secure Shelter</div>
        </div>
        <div class="flex-shrink-0 py-3 px-4 rounded-full border-2 border-purple_400 flex items-center gap-2">
            <img class="size-6 sm:size-8" src="/assets/images/icon/animal-medical.svg" alt="Animal Health Care icon">
            <div class="text-lg-medium whitespace-nowrap text-purple_400">Animal Health Care</div>
        </div>
        <div class="flex-shrink-0 py-3 px-4 rounded-full border-2 border-purple_400 flex items-center gap-2">
            <img class="size-6 sm:size-8" src="/assets/images/icon/animal-print.svg" alt="Animal Adoption icon">
            <div class="text-lg-medium whitespace-nowrap text-purple_400">Animal Adoption</div>
        </div>
    </div>
</section>

<section class="py-[100px] sm:py-[120px] max-w-[1328px] mx-auto px-6 text-center">
    <div class="text-grey_900 display-lg mb-7">Rescued from Suffering</div>
    <div class="font-satoshi text-lg-reguler text-grey_700 mb-[60px]">Life-changing rescues thanks to generous donations.</div>
    <div class="grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 gap-2 sm:gap-4 lg:gap-6">
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/bela.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Bela</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 12 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/aru.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Aru</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Male · 12 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/batmen.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Batmen</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Male · 4 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/cipi.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Cipi</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/cino.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Cino</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/ciki.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Ciki</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/munggu.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Munggu</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 12 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/cookies.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Cookies</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Male · 12 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/cipa.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Cipa</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Male · 4 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/garfield.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Garfield</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/mercu.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Mercu</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative">
            <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/kiren.jpg" alt="Animal image">
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Kiren</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative bg-purple_300">
            <!-- <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/kiren.jpg" alt="Animal image"> -->
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Sugar</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 12 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative bg-purple_300">
            <!-- <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/kiren.jpg" alt="Animal image"> -->
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Butter</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Male · 12 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative bg-purple_300">
            <!-- <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/kiren.jpg" alt="Animal image"> -->
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Baker</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Male · 4 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative bg-purple_300">
            <!-- <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/kiren.jpg" alt="Animal image"> -->
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Cookie</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative bg-purple_300">
            <!-- <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/kiren.jpg" alt="Animal image"> -->
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Doughboy</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative bg-purple_300">
            <!-- <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/kiren.jpg" alt="Animal image"> -->
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Aby</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative bg-purple_300">
            <!-- <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/kiren.jpg" alt="Animal image"> -->
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Lucy</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
        <div class="h-60 w-full rounded-3xl overflow-hidden relative bg-purple_300">
            <!-- <img class="w-full h-full object-cover object-center absolute top-0 left-0" src="/assets/images/suffering/kiren.jpg" alt="Animal image"> -->
            <div class="relative z-10 w-full h-full bg-gradient-to-b from-[#190E5A]/0 from-[65%] to-[#190E5A]/70 py-6 px-5 flex flex-col justify-end text-left">
                <div class="display-2xs text-white">Angrek</div>
                <div class="text-md-medium text-white/70 font-satoshi whitespace-nowrap">Female · 6 months</div>
            </div>
        </div>
    </div>
    <div class="mt-[60px] text-lg-reguler text-grey_700 font-satoshi">
        <div>We've successfully rescued over <span class="font-bold">60+</span> cats and dogs, giving them a<span class="sm:hidden"> second chance at a safe and loving life</span></div>
        <div class="hidden sm:block">second chance at a safe and loving life</div>
    </div>
    <a href="#" class="hidden mx-auto rounded-full inline-block mt-10 px-5 lg:px-6 py-3.5 lg:py-4 text-purple_400 display-3xs border border-purple_400">View All Rescued Animals</a>
</section>

<section class="py-[100px] sm:py-[120px] text-center">
    <div class="max-w-[846px] mx-auto px-4 sm:px-6">
        <div class="mb-7 text-grey_900 display-lg">Our Safety Shelter</div>
        <div class="text-grey_700 text-lg-reguler font-satoshi">Caring for a pet means loving them for life and planning for them if we pass away.</div>
    </div>
    <div class="splide mt-[60px]">
        <div class="splide__arrows">
            <button class="!left-[24px] sm:!left-[48px] md:!left-[120px] xl:!left-[190px] !size-8 sm:!size-10 md:!size-14 !bg-white !border !border-solid !opacity-100 !border-purple_300 !text-purple_300 splide__arrow splide__arrow--prev">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="!size-4 sm:!size-6 !fill-none !stroke-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
            <button class="!right-[24px] sm:!right-[48px] md:!right-[120px] xl:!right-[190px] !size-8 sm:!size-10 md:!size-14 !bg-white !border !border-solid !opacity-100 !border-purple_300 !text-purple_300 splide__arrow splide__arrow--next">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="!size-4 sm:!size-6 !fill-none !stroke-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide overflow-hidden opacity-40 [&.is-visible]:opacity-100 transition-all duration-200 px-2 md:px-4 lg:px-5">
                    <img class="w-full h-full rounded-xl sm:rounded-3xl lg:rounded-[40px] aspect-video object-cover object-center" src="/assets/images/shelter/shelter-1.jpg" alt="Shelter image">
                </li>
                <li class="splide__slide overflow-hidden opacity-40 [&.is-visible]:opacity-100 transition-all duration-200 px-2 md:px-4 lg:px-5">
                    <img class="w-full h-full rounded-xl sm:rounded-3xl lg:rounded-[40px] aspect-video object-cover object-center" src="/assets/images/shelter/shelter-2.jpg" alt="Shelter image">
                </li>
                <li class="splide__slide overflow-hidden opacity-40 [&.is-visible]:opacity-100 transition-all duration-200 px-2 md:px-4 lg:px-5">
                    <img class="w-full h-full rounded-xl sm:rounded-3xl lg:rounded-[40px] aspect-video object-cover object-center" src="/assets/images/shelter/shelter-3.jpg" alt="Shelter image">
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="py-[120px] max-w-[1329px] mx-auto px-6 text-center">
    <div class="mb-[60px]">
        <div class="mb-7 text-grey_900 display-lg">Our Amazing Team</div>
        <div class="text-grey_700 text-lg-reguler font-satoshi">We can’t do this much so far here without them and their dedication.</div>
    </div>
    <div class="flex flex-wrap gap-x-6 gap-y-6 sm:gap-y-[60px] items-center justify-center">
        <div class="flex flex-col items-center">
            <div class="bg-purple_300 size-60 xl:size-[411px] aspect-square rounded-3xl overflow-hidden mb-4 sm:mb-8">
                <img class="w-full h-full object-cover object-center" src="/assets/images/team/sari.jpg" alt="Sari image">
            </div>
            <div>
                <div class="mb-2 text-grey_900 display-xs">Desak</div>
                <div class="text-lg-reguler font-satoshi text-grey_700">Animal Care Give</div>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="bg-purple_300 size-60 xl:size-[411px] aspect-square rounded-3xl overflow-hidden mb-4 sm:mb-8">
                <img class="w-full h-full object-cover object-center" src="/assets/images/team/putri.jpg" alt="Putri image">
            </div>
            <div>
                <div class="mb-2 text-grey_900 display-xs">Nanda</div>
                <div class="text-lg-reguler font-satoshi text-grey_700">Manager</div>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="bg-purple_300 size-60 xl:size-[411px] aspect-square rounded-3xl overflow-hidden mb-4 sm:mb-8">
                <img class="w-full h-full object-cover object-center">
            </div>
            <div>
                <div class="mb-2 text-grey_900 display-xs">Yonnie</div>
                <div class="text-lg-reguler font-satoshi text-grey_700">Animal Care Giver</div>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="bg-purple_300 size-60 xl:size-[411px] aspect-square rounded-3xl overflow-hidden mb-4 sm:mb-8">
                <img class="w-full h-full object-cover object-center">
            </div>
            <div>
                <div class="mb-2 text-grey_900 display-xs">Iloh</div>
                <div class="text-lg-reguler font-satoshi text-grey_700">Animal Care Giver</div>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="bg-purple_300 size-60 xl:size-[411px] aspect-square rounded-3xl overflow-hidden mb-4 sm:mb-8">
                <img class="w-full h-full object-cover object-center">
            </div>
            <div>
                <div class="mb-2 text-grey_900 display-xs">Putu</div>
                <div class="text-lg-reguler font-satoshi text-grey_700">Animal Care Giver</div>
            </div>
        </div>
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
                            <div class="text-md-reguler">hello@cathousebali.com</div>
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
                    <div class="flex items-start gap-4 hidden">
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

@section('additional-scripts')
<script>
    var splide = new Splide( '.splide', {
        type   : 'loop',
        fixedWidth : '846px',
        focus  : 'center',
        pagination: false,
        breakpoints: {
            734: {
                fixedWidth : '360px',
            },
            844: {
                fixedWidth: '640px',
            }
        }
    } );

    splide.mount();
</script>
@endsection