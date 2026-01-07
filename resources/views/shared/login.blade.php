<nav id="drawerlogin"
    class="fixed top-0 right-0 w-full md:w-1/2 bg-background text-black z-[1200]
           transform translate-x-full transition-transform duration-500
           ease-[cubic-bezier(0.86,0,0.07,1)]
           h-screen flex flex-col cookie-reset overflow-y-auto custom-scroll">


    <div class="py-8 px-6 md:px-14 flex items-center justify-between">
        <p class="text-[1.25rem]">Size Guide</p>
        <button onclick="toggleMasterDrawer('drawerlogin')" class="text-3xl font-light text-black/60 hover:text-black">
            &times;
        </button>
    </div>

    <div class="relative">
        <div class="w-full h-px bg-dash-dot"></div>
    </div>

    <div class="py-8 px-6 md:px-14 max-w-3xl mx-auto flex items-center justify-center gap-20 text-[0.875rem]">
        <p id="tabNumeric" class="underline underline-offset-4 cursor-pointer">
            Login
        </p>
        <p id="tabDetailed" class="text-black/70 cursor-pointer">
            Detailed Measurement
        </p>
    </div>



</nav>
