<div class="w-full h-screen overflow-hidden relative font-sans">

    <!-- HEADER -->
    <header class="relative border-b bg-background z-20">
        <div class="mx-auto px-4 sm:px-14 h-24 flex items-center text-white">

            <div class="flex-1"></div>

            <div class="flex items-center justify-center">
                <div class="w-20 h-20 bg-purple-600 flex items-center justify-center">
                    <span class="text-white text-xs font-semibold">LOGO 1</span>
                </div>
            </div>

            <a href="/" class="flex-1 flex items-center justify-end space-x-1.5 text-[0.75rem] opacity-80">
                {{-- <i class="fa-solid fa-arrow-left"></i> --}}
                <img src="{{ asset('assets/SVG/Return black icon.svg') }}" alt="Arrow Left" class="w-[7px] h-[6px]" />
                <span class="hidden md:block text-black">Back to browsing!</span>
            </a>
        </div>
    </header>

    <!-- VIDEO BACKGROUND -->
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <source src="{{ asset('assets/videos/accountcreation.mp4') }}" type="video/mp4" />
    </video>

    <!-- DARK OVERLAY -->
    <div class="absolute inset-0 bg-black/40 z-[1]"></div>

    <!-- CENTER CARD -->
    <div class="absolute inset-x-0 top-24 bottom-0 flex items-center justify-center z-10 px-4">

        <div class="bg-white w-full max-w-sm  text-center shadow-2xl border border-black/10 relative">

            <div class="absolute left-0 top-0 bottom-0 h-full w-px bg-dash-dot-v"></div>
            <div class="absolute right-0 top-0 bottom-0 h-full w-px bg-dash-dot-v"></div>


            <div class="h-px w-full bg-dash-dot"></div>


            <div class="px-10 py-7">

                {{-- <img src="assets/images/newbird.png" class="absolute left-1/2 -top-7 -ml-8 " /> --}}

                <img src="assets/SVG/Bird white (Order confirmation).svg" class="absolute left-1/2 -top-7 -ml-8 w-[56px] h-[35px]" />


                <!-- TITLE -->
                <h2 class="text-[1.0625rem] mb-2" style="font-weight: 500">
                    Your order has been placed.
                </h2>

                <!-- ORDER NUMBER -->
                <p class="text-[0.6875rem] mb-3" style="font-weight: 300">
                    Order no. – <span class="font-medium">FKN234767</span>
                </p>

                <!-- LINK -->
                <a href="#" class="block text-[0.75rem] underline mb-3" style="font-weight: 300">
                    View your order details
                </a>

                <!-- TIME -->
                <p class="text-[0.75rem] mb-3" style="font-weight: 300">
                    Time of order <span style="font-weight: 500">15:35 PM (IST)</span>
                </p>

                <!-- NOTE -->
                <p class="text-[0.6875rem] leading-relaxed mb-6" style="font-weight: 300">
                    Your order will ship within 36hrs from the time of confirmation.
                    (This applies when the order is placed on working days –
                    excluding Saturdays and Sundays.)
                </p>

                <!-- PRODUCT IMAGE -->
                <div class="flex justify-center">
                    <div class="">
                        <img src="{{ asset('assets/images/red-girl.png') }}" alt="Product"
                            class="w-40 h-auto object-cover">
                    </div>
                </div>
            </div>

            <div class="h-px w-full bg-dash-dot"></div>
        </div>
    </div>

</div>
