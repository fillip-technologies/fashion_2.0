<section class="scroll-glass bg-black sticky top-14 md:top-[6.9375rem] z-20 transition-all duration-300">

    <div class="w-full">
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

                <a href="{{ route('user.account') }}" class="relative text-white flex-shrink-0">
                    Account in perspective
                    <span class="absolute left-0 -bottom-6 w-full h-1 bg-tertiary rounded"></span>
                </a>

                <a href="{{ route('user.profile') }}" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Profile
                </a>

                <a href="{{ route('user.wishlist') }}" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Wishlist
                </a>

                <a href="{{ route('user.orders') }}" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Orders
                </a>

                <a href="{{ route('user.addressbook') }}" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Addressbook
                </a>

            </nav>
        </div>
    </div>

</section>

<div class="w-full relative ">
    <img src="assets/images/Leaf.png" alt="background" class="w-full h-full" />

    <img src="assets/SVG/Profile page.svg"
        class="w-4/12 hidden md:block h-auto absolute top-1/2 mt-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2" />
</div>


<div class="bg-white border-x-[1rem] border-secondary text-black">

    <section class="w-full pt-5 md:pt-44 pb-48 bg-white hidden md:block">

        <div class="flex justify-center items-center gap-6 text-[0.9375rem] mb-10">
            <div class="font-semibold">My Order History</div>
        </div>


        <div class="max-w-7xl mx-auto flex flex-col gap-8 text-[1rem] mb-32">
            <img src="{{ asset('assets/SVG/Back black icon.svg') }}" alt="Back"
                class="w-[0.4375rem] h-[0.75rem] cursor-pointer" onclick="window.history.back()" />
            <div class="italic">Total orders (03)</div>
        </div>

        <div class="max-w-7xl mx-auto px-6">

            <div
                class="grid grid-cols-[160px_160px_160px_120px_1fr_120px_120px]
             items-center text-[1.125rem] text-black border-b-2 border-border">
                <div class="border-r-2 border-border text-white py-1.5">Dummy</div>
                <div class="text-center border-r-2 border-border py-1.5">Order number</div>
                <div class="text-center border-r-2 border-border py-1.5">Order date</div>
                <div class="text-center border-r-2 border-border py-1.5">QTY.</div>
                <div class="text-center border-r-2 border-border py-1.5">Product name</div>
                <div class="text-center border-r-2 border-border py-1.5">Code</div>
                <div class="text-center border-r-2 border-border py-1.5">Total</div>
            </div>

            <div class="pb-5">
                <div class="grid grid-cols-[160px_160px_160px_120px_1fr_120px_120px]
             items-center pt-12 text-[0.875rem] text-black"
                    style="font-weight: 300">

                    <div class="relative flex justify-center px-7 py-5 bg-background">
                        <span class="absolute left-0 top-1/2 h-10 w-0.5 -translate-y-1/2 bg-border"></span>
                        <span class="absolute right-0 top-1/2 h-10 w-px -translate-y-1/2 bg-border"></span>

                        <img src="assets/images/order.jpg" alt="Product" class="object-contain" />
                    </div>

                    <div class="text-center border-r-2 border-border py-2">IN1234567</div>
                    <div class="text-center border-r-2 border-border py-2">11/04/2026</div>
                    <div class="text-center border-r-2 border-border py-2">1</div>
                    <div class="text-center border-r-2 border-border py-2">Ivy League Racer</div>
                    <div class="text-center border-r-2 border-border py-2">YJ34W12</div>
                    <div class="text-center border-r-2 border-border py-2">₹71,000</div>
                </div>

                <div class="flex justify-end space-x-5 text-[0.75rem] -mt-8" style="font-weight: 200">
                    <a href="/viewdetails" class="underline">Download invoice</a>
                    <a href="/viewdetails" class="underline">View details</a>
                </div>
            </div>

            <div class="pb-5">
                <div class="grid grid-cols-[160px_160px_160px_120px_1fr_120px_120px]
             items-center pt-12 text-[0.875rem] text-black"
                    style="font-weight: 300">

                    <div class="relative flex justify-center px-7 py-5 bg-background">
                        <span class="absolute left-0 top-1/2 h-10 w-0.5 -translate-y-1/2 bg-border"></span>
                        <span class="absolute right-0 top-1/2 h-10 w-px -translate-y-1/2 bg-border"></span>

                        <div
                            class="absolute left-0 top-0 w-6 h-6 bg-secondary text-white text-[0.75rem] flex justify-center items-center">
                            <p>+2</p>
                        </div>

                        <img src="assets/images/order.jpg" alt="Product" class="object-contain" />
                    </div>

                    <div class="text-center border-r-2 border-border py-2">IN1234567</div>
                    <div class="text-center border-r-2 border-border py-2">11/04/2026</div>
                    <div class="text-center border-r-2 border-border py-2">1</div>
                    <div class="text-center border-r-2 border-border py-2">Ivy League Racer</div>
                    <div class="text-center border-r-2 border-border py-2">YJ34W12</div>
                    <div class="text-center border-r-2 border-border py-2">₹71,000</div>
                </div>

                <div class="flex justify-end space-x-5 text-[0.75rem] -mt-8" style="font-weight: 200">
                    <a href="/viewdetails" class="underline">Download invoice</a>
                    <a href="/viewdetails" class="underline">View details</a>
                </div>
            </div>

            <div class="pb-5">
                <div class="grid grid-cols-[160px_160px_160px_120px_1fr_120px_120px]
             items-center pt-12 text-[0.875rem] text-black"
                    style="font-weight: 300">

                    <div class="relative flex justify-center px-7 py-5 bg-background">
                        <span class="absolute left-0 top-1/2 h-10 w-0.5 -translate-y-1/2 bg-border"></span>
                        <span class="absolute right-0 top-1/2 h-10 w-px -translate-y-1/2 bg-border"></span>

                        <img src="assets/images/order.jpg" alt="Product" class="object-contain" />
                    </div>

                    <div class="text-center border-r-2 border-border py-2">IN1234567</div>
                    <div class="text-center border-r-2 border-border py-2">11/04/2026</div>
                    <div class="text-center border-r-2 border-border py-2">1</div>
                    <div class="text-center border-r-2 border-border py-2">Ivy League Racer</div>
                    <div class="text-center border-r-2 border-border py-2">YJ34W12</div>
                    <div class="text-center border-r-2 border-border py-2">₹71,000</div>
                </div>

                <div class="flex justify-end space-x-5 text-[0.75rem] -mt-8" style="font-weight: 200">
                    <a href="/viewdetails" class="underline">Download invoice</a>
                    <a href="/viewdetails" class="underline">View details</a>
                </div>
            </div>

        </div>

    </section>

    <!-- MOBILE ONLY -->
    <section class="md:hidden w-full px-4 pt-10 pb-24 bg-white">


        <div class="flex justify-center items-center gap-6 text-[0.9375rem] mb-10">
            <div class="font-semibold">My Order History</div>
        </div>

        <div class="max-w-7xl mx-auto flex flex-col gap-4 md:gap-8 text-[1rem] mb-10 md:mb-32">
            <img src="{{ asset('assets/SVG/Back black icon.svg') }}" alt="Back"
                class="w-[0.4375rem] h-[0.75rem] cursor-pointer" onclick="window.history.back()" />
            <div class="italic">Total orders (03)</div>
        </div>

        <!-- Order Card -->
        <div class="rounded-2xl border border-border p-4 space-y-4 mb-4">

            <!-- Top -->
            <div class="flex gap-4">
                <img src="assets/images/order.jpg" alt="Product"
                    class="w-20 h-24 object-contain bg-gray-50 rounded-lg" />

                <div class="flex-1">
                    <p class="text-sm font-medium">Ivy League Racer</p>
                    <p class="text-xs text-gray-500 mt-1">Code: YJ34W12</p>
                    <p class="text-xs text-gray-500">Order No: IN1234567</p>
                </div>
            </div>

            <!-- Divider -->
            <div class="h-px bg-border"></div>

            <!-- Meta Info -->
            <div class="grid grid-cols-3 text-center text-xs">
                <div>
                    <p class="text-gray-500">Date</p>
                    <p class="font-medium">11/04/2026</p>
                </div>
                <div>
                    <p class="text-gray-500">Qty</p>
                    <p class="font-medium">1</p>
                </div>
                <div>
                    <p class="text-gray-500">Total</p>
                    <p class="font-semibold">₹71,000</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex justify-between pt-2 text-xs">
                <a href="/viewdetails" class="underline">Download invoice</a>
                <a href="/viewdetails" class="underline">View details</a>
            </div>

        </div>

        <div class="rounded-2xl border border-border p-4 space-y-4 mb-4">

            <!-- Top -->
            <div class="flex gap-4">
                <img src="assets/images/order.jpg" alt="Product"
                    class="w-20 h-24 object-contain bg-gray-50 rounded-lg" />

                <div class="flex-1">
                    <p class="text-sm font-medium">Ivy League Racer</p>
                    <p class="text-xs text-gray-500 mt-1">Code: YJ34W12</p>
                    <p class="text-xs text-gray-500">Order No: IN1234567</p>
                </div>
                <div class="bg-secondary py-1 px-2 self-start text-[0.625rem] text-white">+2</div>
            </div>

            <!-- Divider -->
            <div class="h-px bg-border"></div>

            <!-- Meta Info -->
            <div class="grid grid-cols-3 text-center text-xs">
                <div>
                    <p class="text-gray-500">Date</p>
                    <p class="font-medium">11/04/2026</p>
                </div>
                <div>
                    <p class="text-gray-500">Qty</p>
                    <p class="font-medium">1</p>
                </div>
                <div>
                    <p class="text-gray-500">Total</p>
                    <p class="font-semibold">₹71,000</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex justify-between pt-2 text-xs">
                <a href="/viewdetails" class="underline">Download invoice</a>
                <a href="/viewdetails" class="underline">View details</a>
            </div>

        </div>

        <div class="rounded-2xl border border-border p-4 space-y-4 mb-4">

            <!-- Top -->
            <div class="flex gap-4">
                <img src="assets/images/order.jpg" alt="Product"
                    class="w-20 h-24 object-contain bg-gray-50 rounded-lg" />

                <div class="flex-1">
                    <p class="text-sm font-medium">Ivy League Racer</p>
                    <p class="text-xs text-gray-500 mt-1">Code: YJ34W12</p>
                    <p class="text-xs text-gray-500">Order No: IN1234567</p>
                </div>
            </div>

            <!-- Divider -->
            <div class="h-px bg-border"></div>

            <!-- Meta Info -->
            <div class="grid grid-cols-3 text-center text-xs">
                <div>
                    <p class="text-gray-500">Date</p>
                    <p class="font-medium">11/04/2026</p>
                </div>
                <div>
                    <p class="text-gray-500">Qty</p>
                    <p class="font-medium">1</p>
                </div>
                <div>
                    <p class="text-gray-500">Total</p>
                    <p class="font-semibold">₹71,000</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex justify-between pt-2 text-xs">
                <a href="/viewdetails" class="underline">Download invoice</a>
                <a href="/viewdetails" class="underline">View details</a>
            </div>

        </div>

    </section>

    <div class="flex items-center justify-center pb-32">
        <p class="text-[0.875rem] text-secondary">Page 1/1</p>
    </div>

</div>
