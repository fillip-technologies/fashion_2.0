<nav id="newsletter"
    class="fixed top-0 right-0 w-full  text-black z-[1200]
           translate-x-full
           h-screen flex flex-col cookie-reset overflow-hidden">

    <div class="relative h-screen w-full">

        <div class="newsletter-backdrop hidden md:block absolute inset-0 bg-black/80 overflow-hidden overscroll-none"
            onclick="toggleMasterDrawer('newsletter')"></div>
        <div class="newsletter-panel absolute top-0 right-0 bg-background h-screen w-full md:w-1/2 overflow-y-auto custom-scroll overscroll-none">
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

<style>
    #newsletter {
        translate: none !important;
        pointer-events: none;
        visibility: hidden;
        transition: visibility 0s linear 500ms;
    }

    #newsletter.translate-x-0 {
        pointer-events: auto;
        visibility: visible;
        transition-delay: 0s;
    }

    #newsletter .newsletter-backdrop {
        opacity: 0;
        transition: opacity 220ms ease;
    }

    #newsletter .newsletter-panel {
        transform: translateX(100%);
        transition: transform 500ms cubic-bezier(0.86, 0, 0.07, 1);
        will-change: transform;
        pointer-events: auto;
        box-shadow: -24px 0 60px rgba(0, 0, 0, 0.18);
    }

    #newsletter.translate-x-0 .newsletter-backdrop {
        opacity: 1;
    }

    #newsletter.translate-x-0 .newsletter-panel {
        transform: translateX(0);
    }
</style>
