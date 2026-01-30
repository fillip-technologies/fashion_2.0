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

                <a href="#" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Wishlist
                </a>

                <a href="#" class="relative text-white flex-shrink-0">
                    My Orders
                    <span class="absolute left-0 -bottom-6 w-full h-1 bg-tertiary rounded"></span>
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

<div class="max-w-7xl mx-auto flex items-center justify-start gap-5 md:gap-10 pt-14 md:pt-40 pb-2 md:pb-6 px-8 text-[1.125rem]">
    <img src="{{ asset('assets/SVG/Back black icon.svg') }}" alt="Back" class="w-[0.4375rem] h-[0.75rem]" />
    <p style="font-weight: 400"><span class="mr-0.5 md:mr-2" style="font-weight: 600">ORDER No. -</span> IN1234567 </p>
</div>

<div class="w-full md:flex justify-center pt-7 bg-white hidden">
    <div class="w-[95%] max-w-6xl border border-border rounded px-20 py-16">

        <div class="flex items-start gap-48">


            <div class="w-60 h-64 bg-[#f7f7f5] flex items-center justify-center rounded">
                <img src="assets/images/order.jpg" alt="Product" class="w-52 object-contain" />
            </div>

            <div class="flex-1 pt-4">

                <div class="grid grid-cols-[220px_1fr] gap-y-7 text-[1.125rem] text-black" style="font-weight: 400">

                    <div>Order date</div>
                    <div class="text-[0.875rem] -ml-10" style="font-weight: 300">11/04/2026</div>

                    <div>QTY.</div>
                    <div class="text-[0.875rem] -ml-10" style="font-weight: 300">1</div>

                    <div>Product name</div>
                    <div class="text-[0.875rem] -ml-10" style="font-weight: 300">Ivy League Racer (Black)</div>

                    <div>Code</div>
                    <div class="text-[0.875rem] -ml-10" style="font-weight: 300">YJ34W12</div>

                    <div>Total</div>
                    <div class="text-[0.875rem] -ml-10" style="font-weight: 300">₹71,000</div>

                </div>

                <div class="mt-0 flex justify-end">
                    <a href="#" class="text-[0.75rem] underline underline-offset-1" style="font-weight: 200">
                        Download invoice
                    </a>
                </div>

            </div>

        </div>

    </div>
</div>

<!-- MOBILE ONLY -->
<div class="w-full bg-white px-4 pt-8 pb-20 md:hidden">

    <div class="border border-border rounded-xl p-4 space-y-5">

        <!-- Product -->
        <div class="flex gap-4">
            <div class="w-24 h-28 bg-[#f7f7f5] rounded flex items-center justify-center">
                <img src="assets/images/order.jpg" alt="Product" class="w-20 object-contain" />
            </div>

            <div class="flex-1">
                <p class="text-sm font-medium">Ivy League Racer (Black)</p>
                <p class="text-xs text-gray-500 mt-1">Code: YJ34W12</p>
            </div>
        </div>

        <!-- Divider -->
        <div class="h-px bg-border"></div>

        <!-- Details -->
        <div class="space-y-3 text-sm">
            <div class="flex justify-between">
                <span class="text-gray-500">Order date</span>
                <span>11/04/2026</span>
            </div>

            <div class="flex justify-between">
                <span class="text-gray-500">QTY.</span>
                <span>1</span>
            </div>

            <div class="flex justify-between">
                <span class="text-gray-500">Total</span>
                <span class="font-medium">₹71,000</span>
            </div>
        </div>

        <!-- Action -->
        <div class="pt-3 flex justify-end">
            <a href="#" class="text-xs underline underline-offset-2 text-gray-600">
                Download invoice
            </a>
        </div>

    </div>

</div>



<div class="w-full flex justify-center bg-white pb-28">
    <div class="w-[95%] max-w-6xl border border-border rounded px-10 md:px-20 pt-16 pb-32">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-16 text-black">
            <div>
                <h3 class="text-[1.125rem] mb-8" style="font-weight: 400">Shipping address</h3>
                <div class="text-[0.75rem]" style="font-weight: 300">
                    <p class="text-[0.875rem]">Name Surname</p>
                    <p>Address line 1</p>
                    <p>Address line 2</p>
                    <p>Postal code</p>
                    <p class="text-[0.875rem]">City</p>
                    <p>State, Location</p>
                    <p>Company name</p>
                    <p>Phone no.</p>
                </div>
            </div>
            <div>
                <h3 class="text-[1.125rem] mb-8" style="font-weight: 400">Billing address</h3>
                <div class="text-[0.75rem]" style="font-weight: 300">
                    <p class="text-[0.875rem]">Name Surname</p>
                    <p>Address line 1</p>
                    <p>Address line 2</p>
                    <p>Postal code</p>
                    <p class="text-[0.875rem]">City</p>
                    <p>State, Location</p>
                    <p>Company name</p>
                    <p>Phone no.</p>
                </div>
            </div>
            <div>
                <h3 class="text-[1.125rem] mb-8" style="font-weight: 400">Payment method</h3>
                <p class="text-[0.875rem]" style="font-weight: 300">Online purchase</p>
            </div>
            <div>
                <h3 class="text-[1.125rem] mb-8" style="font-weight: 400">Additional compliments</h3>
                <ul class="text-[0.875rem] list-disc list-inside" style="font-weight: 300">
                    <li>Gift packaging</li>
                    <li>Shopping bag</li>
                </ul>
            </div>
        </div>
    </div>
</div>
