<section class="bg-black sticky top-14 md:top-[6.9375rem] z-20">
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


                <a href="/accountoverview" class="opacity-70 hover:opacity-100 flex-shrink-0">
                    Account in perspective
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

                <a href="/addressbook" class="relative text-white flex-shrink-0">
                    My Addressbook
                    <span class="absolute left-0 -bottom-6 w-full h-1 bg-tertiary rounded"></span>
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

    <div class="h-10 md:h-40 bg-white"> </div>

    <div class="relative flex items-center justify-center">
        <button onclick="history.back()"
            class="absolute left-2 md:left-16 flex items-center justify-center w-8 h-8 text-black hover:opacity-70 transition"
            aria-label="Go back">
            <img src="{{ asset('assets/SVG/Back black icon.svg') }}" alt="Back"
                class="w-[0.4375rem] h-[0.75rem] cursor-pointer" onclick="window.history.back()" />
        </button>
        <div class="text-[0.9375rem] font-semibold">
            MY BILLING ADDRESS
        </div>
    </div>

    <div class="max-w-lg mx-auto px-6 pt-5">
        {{-- <div class="text-[0.9375rem] flex items-center justify-center" style="font-weight: 600">MY SHIPPING ADDRESS
        </div> --}}

        <div class="text-[0.625rem] text-[#97A0A1] mt-7" style="font-weight: 300">*Required information</div>

        <div class="relative mt-16 location-wrapper-billing">
            <input type="text" id="location-billing" name="location" autocomplete="off" required
                oninput="handleFilledLocationBillingProfile(this)" onclick="toggleDropdownLocationBilling()"
                class="peer w-full bg-transparent border-b border-border py-1 pl-4
                                text-[0.9375rem] font-normal focus:outline-none focus:border-border
                                data-[filled=true]:font-medium" />
            <label for="location-billing"
                class="absolute left-0 top-2 text-[0.9375rem] text-primary
                                transition-all duration-200
                                peer-focus:-top-6 peer-focus:text-[0.6875rem]
                                peer-data-[filled=true]:-top-6
                                peer-data-[filled=true]:text-[0.6875rem]">
                Location
            </label>
            <i id="sizeChevronlocationbilling"
                class="fa-solid fa-chevron-down absolute right-2 top-3
                                text-[0.75rem] transition-transform duration-300"></i>
            <div id="locationDropdownBillingProfile"
                class="absolute mt-2  text-[0.9375rem]
                                text-primary bg-background shadow-lg w-full z-[100] hidden">
                <p class="size-option cursor-pointer px-6 py-2 hover:bg-black hover:text-white"
                    onclick="selectLocationBillingProfile('India')">India</p>
                <p class="size-option cursor-pointer  px-6 py-2 hover:bg-black hover:text-white"
                    onclick="selectLocationBillingProfile('Italy')">Italy</p>
                <p class="size-option cursor-pointer  px-6 py-2 hover:bg-black hover:text-white"
                    onclick="selectLocationBillingProfile('France')">France</p>
                <p class="size-option cursor-pointer  px-6 py-2 hover:bg-black hover:text-white"
                    onclick="selectLocationBillingProfile('Japan')">Japan</p>
                <p class="size-option cursor-pointer  px-6 py-2 hover:bg-black hover:text-white"
                    onclick="selectLocationBillingProfile('Thailand')">Thailand</p>
                <p class="size-option cursor-pointer  px-6 py-2 hover:bg-black hover:text-white"
                    onclick="selectLocationBillingProfile('Indonesia')">Indonesia</p>
                <p class="size-option cursor-pointer  px-6 py-2 hover:bg-black hover:text-white"
                    onclick="selectLocationBillingProfile('Saudi Arabia')">Saudi Arabia</p>
                <p class="size-option cursor-pointer  px-6 py-2 hover:bg-black hover:text-white"
                    onclick="selectLocationBillingProfile('China')">China</p>
            </div>

        </div>

        <div class="relative mt-16">
            <input type="address" id="address" name="address" autocomplete="new-address" required
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

            <label for="address"
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
                Address
            </label>

        </div>

        <div class="relative mt-16">
            <input type="addresstwo" id="addresstwo" name="addresstwo" autocomplete="new-addresstwo" required
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

            <label for="addresstwo"
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
                Address Line 2
            </label>

        </div>

        <div class="relative mt-16">
            <input type="state" id="state" name="state" autocomplete="new-state" required
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

            <label for="state"
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
                State
            </label>

        </div>

        <div class="relative mt-16">
            <input type="city" id="city" name="city" autocomplete="new-city" required
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

            <label for="city"
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
                City
            </label>

        </div>

        <div class="relative mt-16">
            <input type="postalcode" id="postalcode" name="postalcode" autocomplete="new-postalcode" required
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

            <label for="postalcode"
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
                Postal Code
            </label>

        </div>

        <div class="relative mt-16">
            <input type="company" id="company" name="company" autocomplete="new-company" required
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

            <label for="company"
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
                Company
            </label>

        </div>

        <div class="space-y-4 text-[0.75rem] text-black mt-20" style="font-weight: 200">

            <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" class="mt-0.5 accent-black rounded" />
                <span class="text-justify">
                    Having read the information notice, I authorise Yarnstone Wren to the processing of my personal data
                    for Marketing purposes as described in paragraph 3.1.d) of the <span
                        class="underline underline-offset-2">Privacy
                        Policy.</span>
                </span>
            </label>

            <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" class="mt-0.5 accent-black rounded" />
                <span class="text-justify">
                    Having read the information notice, I authorise Yarnstone Wren to process my personal data for the
                    purpose of Customer analysis to provide experiences in line with your preferences as described in
                    paragraph 3.2.a) of the <span class="underline underline-offset-2">Privacy Policy.</span>
                </span>
            </label>

        </div>

        <div class="flex items-center justify-center gap-5 mt-20">
            <button onclick="window.location.href='/accountconfirmed'"
                class="w-60 h-12 bg-secondary text-white text-[1rem] rounded hover:bg-primary transition">
                Save
            </button>

            <button onclick="window.location.href='/accountconfirmed'"
                class="w-60 h-12 bg-secondary text-white text-[1rem] rounded hover:bg-primary transition">
                Delete address
            </button>
        </div>

        <div class="h-28 bg-white"> </div>

    </div>

</div>

<script>
    function handleFilled(input) {
        if (input.value.trim() !== "") {
            input.dataset.filled = "true";
        } else {
            input.dataset.filled = "false";
        }
    }
</script>

<script>
    (function() {
        const input = document.getElementById("location-billing");
        const dropdown = document.getElementById("locationDropdownBillingProfile");
        const chevron = document.getElementById("sizeChevronlocationbilling");
        const wrapper = document.querySelector(".locaiton-wrapper-billing");

        window.toggleDropdownLocationBilling = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectLocationBillingProfile = function(value) {
            input.value = value;
            input.setAttribute("data-filled", "true");

            dropdown.classList.add("hidden");
            chevron.classList.remove("rotate-180");
        };

        window.handleFilledLocationBillingProfile = function(el) {
            if (el.value.trim() !== "") {
                el.setAttribute("data-filled", "true");
            } else {
                el.removeAttribute("data-filled");
            }
        };

        document.addEventListener("click", (e) => {
            if (!wrapper.contains(e.target)) {
                dropdown.classList.add("hidden");
                chevron.classList.remove("rotate-180");
            }
        });
    })();
</script>
