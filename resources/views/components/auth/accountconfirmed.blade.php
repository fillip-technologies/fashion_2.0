<div class="w-full h-screen overflow-hidden relative">

    <header class="relative border-b bg-[rgba(151,160,161,0.5)] backdrop-blur-[44px] z-20">
        <div class="mx-auto px-4 sm:px-14 h-24 flex items-center text-white">

            <a href="/" class="flex items-center space-x-2 text-[0.8125rem] cursor-pointer">
                {{-- <i class="fa-solid fa-arrow-left fa-sm"></i> --}}
                <img src="{{ asset('assets/SVG/Return white icon.svg') }}" alt="Arrow Left" class="w-[7px] h-[6px]" />
                <span class="hidden md:block" style="font-weight: 100">Back to browsing!</span>
            </a>
            <div class="mx-auto">
                <div class="w-16 h-16 sm:w-24 sm:h-24 bg-purple-600 flex items-center justify-center">
                    <span class="text-white text-xs sm:text-sm font-semibold">LOGO 1</span>
                </div>
            </div>

            <div class="flex items-center text-[0.8125rem] cursor-pointer">
                <span class="mr-1 sm:mr-2 hidden md:block" style="font-weight: 300">Go to your profile</span>
                {{-- <i class="fa-solid fa-chevron-right fa-sm"></i>
                <i class="fa-solid fa-chevron-right fa-sm"></i> --}}
                <img src="{{ asset('assets/SVG/Back white icon.svg') }}" alt="Arrow Left"
                    class="w-[7px] h-[6px] rotate-180" />
                <img src="{{ asset('assets/SVG/Back white icon.svg') }}" alt="Arrow Left"
                    class="w-[7px] h-[6px] rotate-180 -ml-0.5" />
            </div>

        </div>
    </header>


    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <source src="{{ asset('assets/videos/accountcreation.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
    </video>

    <div class="absolute top-0 left-0 w-full h-full bg-black/30 z-5"></div>

    <div class="absolute inset-0 flex flex-col items-center justify-center text-center z-10 text-white px-4">
        <h1 class="text-[1.5625rem] mb-2" style="font-weight: 200">Welcome to Brand name </h1>
        <p class="text-[1.5625rem]" style="font-weight: 200">Ms. Name Surname</p>
    </div>

</div>
