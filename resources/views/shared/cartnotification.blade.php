<nav id="cartnotification"
    class="fixed top-0 right-0 w-full md:w-1/3 bg-background text-black z-[1200]
         transform translate-x-full transition-transform duration-500
         ease-[cubic-bezier(0.86,0,0.07,1)]
        flex flex-col overflow-y-auto bg-background rounded-md shadow-2xl shadow-primary">

    <div class="relative mt-0.5">
        <div class="w-full h-px bg-dash-dot"></div>
    </div>

    <div class="py-6 px-6 md:px-8 flex items-center justify-between">
        <p class="text-[1.25rem] tracking-wide font-semibold">
            MY CART <span class="ml-2">(1)</span>
        </p>
        <button onclick="toggleMasterDrawer('cartnotification')"
            class="text-3xl font-light text-black/60 hover:text-black transition">
            &times;
        </button>
    </div>

    <div class="relative">
        <div class="w-full h-px bg-dash-dot"></div>
    </div>

    <div class="flex-1 flex items-center justify-center py-10 md:py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center mx-auto max-w-7xl gap-2">
            <div class="flex justify-center col-span-4">
                <img src="assets/icons/bigcart.png" alt="Bag" class="" />
            </div>

            <div class="text-center flex flex-col items-center justify-center font-light col-end-8">
                <p class="mb-1 text-[0.875rem]">
                    You have added this item in your cart.
                </p>
                <a href="/bag" class="underline font-normal hover:opacity-70 transition text-[0.75rem]">
                    Go to <span class="font-semibold text-[0.875rem]">My Cart</span>
                </a>
            </div>
        </div>
    </div>
</nav>
