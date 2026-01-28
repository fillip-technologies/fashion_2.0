<section class="bg-black">
    <div class="w-full bg-gradient-to-b from-black/90 to-black/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <nav
                class="flex items-center justify-start sm:justify-center
             gap-6 sm:gap-20
             text-[0.8125rem] sm:text-[0.875rem]
             text-white
             overflow-x-auto sm:overflow-visible
             whitespace-nowrap
             pb-6 pt-6 sm:pt-8
             scrollbar-hide">

                <a href="#" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    Account in perspective
                </a>

                <a href="#" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Profile
                </a>

                <a href="#" class="relative text-white flex-shrink-0">
                    My Wishlist
                    <span class="absolute left-0 -bottom-6 w-full h-1 bg-tertiary rounded"></span>
                </a>

                <a href="#" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Orders
                </a>

                <a href="#" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Addressbook
                </a>

            </nav>
        </div>
    </div>

    <div class="w-full relative ">
        <img src="assets/images/Leaf.png" alt="background" class="w-full h-full" />

        <img src="assets/SVG/Profile page.svg"
            class="w-4/12 hidden md:block h-auto absolute top-1/2 mt-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2" />
    </div>


</section>



<div class="bg-white border-x-[1rem] border-secondary text-black">
    <div class="h-14 md:h-40 bg-white"> </div>
    <div class="max-w-md mx-auto flex flex-col items-center justify-center text-center gap-2 md:gap-4">
        <p class="text-[1.25rem]" style="font-weight: 500">Your Wishlist appears to be empty!</p>
        <p class="text-[1.125rem]" style="font-weight: 300">Keep a memoir of your favoured keepsakes from us. </p>
    </div>

    <div class="flex justify-between items-center px-4 md:px-10 pb-16 pt-24 md:pt-36 ">
        <p class="text-[0.75rem] md:text-[0.9375rem]" style="font-weight: 600">RECENTLY VIEWED</p>
        <p class="text-[0.75rem] md:text-[0.9375rem]" style="font-weight: 400">YOU MIGHT LIKE</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 pb-28 px-6 md:px-8">

        <x-category.product-card image="{{ asset('assets/images/jeans.jpg') }}"
            hoverImage="{{ asset('assets/images/jeans.jpg') }}" title="THE IVY LEAGUE" subtitle="Cashmere & Cotton"
            price="71600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />

        <x-category.product-card image="{{ asset('assets/images/sweater.jpg') }}"
            hoverImage="{{ asset('assets/images/sweater.jpg') }}" title="THE IVY LEAGUE" subtitle="Cashmere & Cotton"
            price="71600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />

    </div>
</div>
