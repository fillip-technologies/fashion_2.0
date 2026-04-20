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

                <a href="/accountoverview" class="relative text-white flex-shrink-0">
                    Account in perspective
                    <span class="absolute left-0 -bottom-6 w-full h-1 bg-tertiary rounded"></span>
                </a>

                <a href="/profile" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Profile
                </a>

                <a href="/wishlist" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Wishlist
                </a>

                <a href="/orders" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Orders
                </a>

                <a href="/addressbook" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    My Addressbook
                </a>

            </nav>
        </div>
    </div>

</section>



<div class="relative w-full h-[480px]">
    <img src="assets/images/whiteflower.png" alt="background" class="absolute inset-0 w-full h-full object-cover" />
    {{-- <div class="absolute inset-0 bg-black/40"></div> --}}
</div>

{{-- <section class="flex justify-center border-x-[1rem] border-secondary pt-10">
    <div class="w-4/12 mx-auto pt-16 relative">
        <div
            class="flex flex-col space-y-2 items-center justify-center absolute top-7 left-1/2 transform -translate-x-1/2">
            <p class="text-[1.25rem]" style="font-weight: 500">Ms. Name Surname</p>
            <p class="text-[1.25rem]" style="font-weight: 500">Welcome</p>
        </div>
        <img src="assets/SVG/Profile page.svg" class="w-full h-full" />
    </div>
</section> --}}

<section class="flex justify-center border-x-[1rem] border-secondary pt-6 md:pt-10 pb-5 md:pb-0">
    <div class="w-full sm:w-4/12 mx-auto pt-10 sm:pt-16 relative px-4 sm:px-0">

        <div
            class="flex flex-col space-y-1 sm:space-y-2 items-center justify-center
             absolute top-4 sm:top-7 left-1/2 transform -translate-x-1/2">

            <p class="text-[1rem] sm:text-[1.25rem] font-medium">
                Ms. Name Surname
            </p>
            <p class="text-[1rem] sm:text-[1.25rem] font-medium">
                Welcome
            </p>
        </div>

        <img src="assets/SVG/Profile page.svg" class="w-full h-auto" />

    </div>
</section>



<div class="bg-white border-x-[1rem] border-secondary">

    <section class="w-11/12 mx-auto px-2  md:px-10 pb-16 text-primary">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 relative pt-10 md:py-20">

            <div class="hidden lg:block absolute left-1/2 top-0 h-full w-px bg-dash-dot-v"></div>

            <div class="space-y-16 md:space-y-16">
                <form autocomplete="off">
                    <div class="px-4 md:px-8">
                        <h2 class="text-sm md:text-[0.9375rem] uppercase tracking-wide mb-7" style="font-weight: 600">
                            OUR COMMUNICATION PREFERENCES
                        </h2>

                        <p class="text-[0.875rem] text-black mb-6" style="font-weight: 300">
                            Your preferences for us to be able to contact you for news and updates
                        </p>

                        <div class="flex space-x-4 w-full mt-2">
                            <input type="checkbox" class="w-4 h-4 accent-primary" />
                            <p class="text-[0.75rem] text-black  text-center" style="font-weight: 400">
                                E-mail
                            </p>
                        </div>
                        <div class="flex space-x-4 w-full mt-2">
                            <input type="checkbox" class="w-4 h-4 accent-primary" />
                            <p class="text-[0.75rem] text-black  text-center" style="font-weight: 400">
                                Test Message
                            </p>
                        </div>

                        <p class="text-[0.75rem] mt-6 mb-8" style="font-weight: 200">You will receive marketing
                            communications from us through the channels you have agreed to, in
                            accordance with our <span class="underline underline-offset-2">Privacy Policy</span>. </p>

                        <button onclick="window.location.href='/accountconfirmed'"
                            class="w-36 h-8 bg-secondary text-white text-[0.875rem] rounded hover:bg-primary transition"
                            style="font-weight: 400">
                            save
                        </button>

                    </div>
                </form>
            </div>

            <div class="space-y-16 flex flex-col items-center ">
                <div class="w-full max-w-5xl flex flex-col items-center">
                    <div class="px-3">
                        <h2 class="text-[0.9375rem] uppercase tracking-wide mb-7" style="font-weight: 600">
                            MY ACCESS DETAILS
                        </h2>

                        <p class="text-[0.875rem] text-black mb-6" style="font-weight: 300">
                            You can easily update your email or password whenever you want.
                        </p>

                        <div class="relative mt-12">
                            <input type="email" id="email" name="email" autocomplete="new-email" required
                                oninput="handleFilled(this)" onblur="handleFilled(this)"
                                class="peer w-full
                                bg-transparent
                                border-b border-border
                                py-1
                                pl-4
                                text-[0.9375rem]
                                font-normal
                                focus:outline-none
                                focus:border-border
                                data-[filled=true]:font-medium" />

                            <label for="email"
                                class="absolute left-0 top-2
                                text-[0.9375rem]
                                text-primary
                                transition-all duration-200
                                peer-focus:-top-6
                                peer-focus:text-[0.6875rem]
                                peer-focus:text-primary
                                peer-data-[filled=true]:-top-6
                                peer-data-[filled=true]:text-[0.6875rem]
                                peer-data-[filled=true]:text-primary">
                                * E-mail
                            </label>
                        </div>

                        <div class="relative mt-12">
                            <input type="password" id="password" name="password" autocomplete="new-password" required
                                oninput="handleFilled(this)" onblur="handleFilled(this)"
                                class="peer w-full
                                bg-transparent
                                border-b border-border
                                py-1
                                pl-4
                                text-[0.9375rem]
                                font-normal
                                focus:outline-none
                                focus:border-border
                                data-[filled=true]:font-medium" />

                            <label for="email"
                                class="absolute left-0 top-2
                                text-[0.9375rem]
                                text-primary
                                transition-all duration-200
                                peer-focus:-top-6
                                peer-focus:text-[0.6875rem]
                                peer-focus:text-primary
                                peer-data-[filled=true]:-top-6
                                peer-data-[filled=true]:text-[0.6875rem]
                                peer-data-[filled=true]:text-primary">
                                * Password
                            </label>

                        </div>

                        <button onclick="window.location.href='/accountconfirmed'"
                            class="mt-16 w-72 h-12 bg-secondary text-white text-[0.875rem] rounded-md hover:bg-primary transition">
                            Change login credentials
                        </button>

                    </div>
                </div>
            </div>

            <div class="border-t border-border py-2 mt-16 hidden md:block"></div>
            <div class="border-t border-border py-2 mt-16 hidden md:block"></div>

            <div class="space-y-12 md:space-y-16">
                <form autocomplete="off">
                    <div class="px-4 md:px-8">
                        <h2 class="text-[0.9375rem] uppercase tracking-wide mb-7" style="font-weight: 600">
                            MY SHOPPING PREFERENCES
                        </h2>


                        <div class="max-w-sm grid grid-cols-1 md:grid-cols-3 ">
                            <div class="flex space-x-4 w-full mt-2">
                                <input type="checkbox" class="w-4 h-4 accent-primary" />
                                <p class="text-[0.75rem] text-black  text-center style="font-weight: 400">
                                    Women
                                </p>
                            </div>
                            <div class="flex space-x-4 w-full mt-2">
                                <input type="checkbox" class="w-4 h-4 accent-primary" />
                                <p class="text-[0.75rem] text-black  text-center" style="font-weight: 400">
                                    Collections
                                </p>
                            </div>
                            <div class="flex space-x-4 w-full mt-2">
                                <input type="checkbox" class="w-4 h-4 accent-primary" />
                                <p class="text-[0.75rem] text-black  text-center" style="font-weight: 400">
                                    Apparel
                                </p>
                            </div>
                            <div class="flex space-x-4 w-full mt-2">
                                <input type="checkbox" class="w-4 h-4 accent-primary" />
                                <p class="text-[0.75rem] text-black  text-center" style="font-weight: 400">
                                    Men
                                </p>
                            </div>
                            <div class="flex space-x-4 w-full mt-2">
                                <input type="checkbox" class="w-4 h-4 accent-primary" />
                                <p class="text-[0.75rem] text-black  text-center" style="font-weight: 400">
                                    Accessories
                                </p>
                            </div>
                            <div class="flex space-x-4 w-full mt-2">
                                <input type="checkbox" class="w-4 h-4 accent-primary" />
                                <p class="text-[0.75rem] text-black  text-center" style="font-weight: 400">
                                    Everything
                                </p>
                            </div>
                        </div>

                        <button onclick="window.location.href='/accountconfirmed'"
                            class="w-36 h-8 mt-6 bg-secondary text-white text-[0.875rem] rounded hover:bg-primary transition"
                            style="font-weight: 400">
                            save
                        </button>

                    </div>
                </form>
            </div>

            <div class="space-y-16 px-3 md:pl-24">
                <div class="w-full flex flex-col justify-center">
                    <div class="w-full px-0">
                        <h2 class="text-[0.9375rem] uppercase tracking-wide mb-7" style="font-weight: 600">
                            MY ORDERS
                        </h2>

                        <div id="beforeBox" class="px-10 py-7 rounded border border-border">
                            <p class="text-[0.75rem] text-center cursor-pointer">You don’t have any current orders.</p>
                        </div>

                        <div id="afterBox" class="w-full mx-auto mt-1 hidden">
                            <div
                                class="w-full border border-border rounded p-4 sm:p-6
                                        flex flex-col md:flex-row
                                        gap-4 md:gap-0
                                        justify-between items-start md:items-start">

                                <!-- Left -->
                                <div class="flex items-start gap-3">
                                    <div class="border border-dashed border-black px-2 py-1 text-sm">
                                        2
                                    </div>

                                    <img src="assets/images/products/two.png" alt="product"
                                        class="w-20 h-20 sm:w-28 sm:h-28 object-cover">
                                </div>

                                <!-- Right -->
                                <div
                                    class="flex flex-col
                                    items-start md:items-end
                                    text-left md:text-right
                                    justify-between h-full
                                    w-full md:w-auto">

                                    <p class="text-[0.75rem] sm:text-[0.875rem] text-black underline underline-offset-1"
                                        style="font-weight: 300">
                                        Order no. - <span style="font-weight: 500">FKN234T67</span>
                                    </p>

                                    <a href="#"
                                        class="text-[0.75rem] sm:text-[0.875rem] underline mt-3 md:mt-12">
                                        View order details
                                    </a>
                                </div>

                            </div>

                            <p class="mt-3 sm:mt-4 text-[0.75rem] sm:text-[0.875rem]
                                underline underline-offset-1 cursor-pointer text-black"
                                style="font-weight: 500">
                                +1 Ongoing order
                            </p>

                        </div>


                        <script>
                            const beforeBox = document.getElementById("beforeBox");
                            const afterBox = document.getElementById("afterBox");

                            beforeBox.addEventListener("click", function(e) {
                                e.stopPropagation();
                                beforeBox.classList.add("hidden");
                                afterBox.classList.remove("hidden");
                            });

                            afterBox.addEventListener("click", function(e) {
                                e.stopPropagation();
                            });

                            document.addEventListener("click", function() {
                                afterBox.classList.add("hidden");
                                beforeBox.classList.remove("hidden");
                            });
                        </script>


                        <div class="mt-5 flex justify-center cursor-pointer">
                            <a href="/orders" class="purchase-history text-black">
                                View my purchase history
                            </a>
                        </div>

                        <style>
                            .purchase-history {
                                font-size: 0.875rem;
                                font-weight: 300;
                                cursor: pointer;
                            }

                            .purchase-history:hover {
                                font-weight: 500;
                            }
                        </style>




                    </div>
                </div>
            </div>

        </div>

    </section>

</div>


<img src="assets/images/lotus.png" alt="background" class="w-full h-full" />


<style>
    .underline-input {
        width: 100%;
        background: transparent;
        border-bottom: 1px solid rgba(114, 112, 112, 1);
        padding: 0.5rem 0;
        font-size: 1rem;
        outline: none;
    }
</style>

<script>
    function handleFilled(input) {
        if (input.value.trim() !== "") {
            input.dataset.filled = "true";
        } else {
            input.dataset.filled = "false";
        }
    }
</script>
