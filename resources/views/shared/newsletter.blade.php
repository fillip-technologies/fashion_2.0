<nav id="newsletter"
    class="fixed top-0 right-0 w-full  text-black z-[1200]
           transform translate-x-full transition-transform duration-500
           ease-[cubic-bezier(0.86,0,0.07,1)]
           h-screen flex flex-col cookie-reset overflow-y-auto custom-scroll">

    <div class="grid grid-cols-1 md:grid-cols-2">

        <div class="h-screen bg-black/80 hidden md:block"></div>
        <div class="bg-background min-h-screen">
            <div class="py-8 px-6 md:px-14 flex items-center justify-between">
                <p class="text-[1.25rem]">Join our newsletter</p>
                <button onclick="toggleMasterDrawer('newsletter')"
                    class="text-3xl font-light text-black/60 hover:text-black">
                    &times;
                </button>
            </div>

            <div class="relative">
                <div class="w-full h-px bg-dash-dot"></div>
            </div>
            <div class="flex-1 px-6 md:px-20 w-11/12 mx-auto py-14 text-[0.875rem]">

                <p class="mb-10 font-light">
                    Stay up to date with all the new pieces we bring
                </p>

                <p class="mb-5 font-light">
                    Please enter your e-mail below :
                </p>

                <input type="email" placeholder="yourname@domain"
                    class="w-full max-w-lg border border-primary px-4 py-3 rounded bg-background
             text-[0.875rem] placeholder-primary
             focus:outline-none focus:border-primary transition" />

                <div class="mt-8 flex items-center justify-center">
                    <button
                        class="bg-secondary rounded text-white text-[0.875rem]
               px-10 py-3 tracking-wide
               hover:bg-primary transition">
                        Confirm email
                    </button>
                </div>

                <p class="mt-10 text-[0.75rem] leading-relaxed max-w-lg" style="font-weight: 200">
                    *By providing us with ur mail you agree with our
                    <span class="underline cursor-pointer">terms and conditions</span>
                    towards our communication and data collection.
                </p>
            </div>
        </div>

    </div>
</nav>
