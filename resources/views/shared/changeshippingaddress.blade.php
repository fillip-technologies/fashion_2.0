<nav id="changeshippingaddress"
    class="fixed top-0 right-0 w-full h-screen z-[1200]
           translate-x-full overflow-hidden">

    <div class="relative h-screen w-full">
        <div class="changeshippingaddress-backdrop hidden md:block absolute inset-0 bg-black/80
            overflow-hidden overscroll-none"
            onclick="toggleMasterDrawer('changeshippingaddress')"></div>

        <div
            class="changeshippingaddress-panel absolute top-0 right-0 bg-white h-screen w-full md:w-1/2
            overflow-hidden overscroll-none">
            <div class="h-full overflow-y-auto pt-0.5 thin-scrollbar">
                <div class="relative h-full">

                    <div class="-mt-0.5">
                        <div class="h-px bg-dash-dot"></div>
                    </div>


                    {{-- The main border --}}
                    <div class="absolute left-0 top-0 bottom-0 h-full w-px bg-dash-dot-v"></div>
                    <div class="absolute right-0 top-0 bottom-0 h-full w-px bg-dash-dot-v"></div>

                    <div
                        class="py-6 px-6 md:px-8 flex flex-col md:flex-row
            md:items-center md:justify-between gap-4 md:gap-0">

                        <p class="text-[0.875rem] underline underline-offset-1 decoration-secondary
              leading-snug md:leading-normal"
                            style="font-weight: 400">
                            Add a new Shipping
                            <span class="block md:inline text-[1.25rem]" style="font-weight: 500">
                                Address
                            </span>
                        </p>

                        <div class="flex items-center justify-end space-x-4">
                            <button
                                class="text-[0.75rem] md:text-[0.875rem]
                       underline text-black/50"
                                onclick="toggleMasterDrawer('chooseshippingaddress')">
                                Choose Address
                            </button>

                            <button onclick="toggleMasterDrawer('changeshippingaddress')"
                                class="text-3xl font-light text-black/60 hover:text-black
                   leading-none">
                                &times;
                            </button>
                        </div>
                    </div>


                    <div class="">
                        <div class="h-px bg-dash-dot"></div>
                    </div>

                    <div class="px-8">
                        <div class="relative">
                            <div class="text-[0.75rem]" style="font-weight: 400">
                                <div
                                    class="px-6 md:px-8 grid grid-cols-12 md:gap-x-10 gap-y-7 text-[0.6875rem] relative py-8">
                                    <div class="absolute left-0 top-0 bottom-0 w-px bg-dash-dot-v"></div>
                                    <div class="absolute right-0 top-0 bottom-0 w-px bg-dash-dot-v"></div>

                                    <div class="col-span-12 md:col-span-6 space-y-5">

                                        <label class="block mb-1 text-black" style="font-weight: 300">*First
                                            name</label>
                                        <input class="w-full border-b border-border focus:outline-none"
                                            placeholder="Name" style="font-weight: 400" />
                                    </div>


                                    <div class="col-span-12 md:col-span-6 space-y-5">

                                        <label class="block mb-1 text-black" style="font-weight: 300">*Surname</label>
                                        <input class="w-full border-b border-border focus:outline-none"
                                            placeholder="Surname" style="font-weight: 400" />
                                    </div>

                                    <div class="col-span-12 md:col-span-6 space-y-5">

                                        <label class="block mb-1 text-black" style="font-weight: 300">*Location</label>
                                        <input class="w-full border-b border-border focus:outline-none"
                                            placeholder="Location name" style="font-weight: 400" />
                                    </div>

                                    <div class="col-span-12 md:col-span-6 space-y-5">

                                        <label class="block mb-1 text-black" style="font-weight: 300">*Postal
                                            Code</label>
                                        <input class="w-full border-b border-border focus:outline-none"
                                            placeholder="123456" style="font-weight: 400" />
                                    </div>

                                    <div class="col-span-12 md:col-span-6 space-y-5">

                                        <label class="block mb-1 text-black" style="font-weight: 300">*Address line
                                            1</label>
                                        <input class="w-full border-b border-border focus:outline-none"
                                            placeholder="Address" style="font-weight: 400" />
                                    </div>

                                    <div class="col-span-12 md:col-span-6 space-y-5">

                                        <label class="block mb-1 text-black" style="font-weight: 300">Address line
                                            2</label>
                                        <input class="w-full border-b border-border focus:outline-none"
                                            placeholder="Address" style="font-weight: 400" />
                                    </div>

                                    <div class="col-span-12 md:col-span-6 space-y-5">

                                        <label class="block mb-1 text-black" style="font-weight: 300">*State</label>
                                        <input class="w-full border-b border-border focus:outline-none"
                                            placeholder="State name" style="font-weight: 400" />
                                    </div>

                                    <div class="col-span-12 md:col-span-6 space-y-5">

                                        <label class="block mb-1 text-black" style="font-weight: 300">*City</label>
                                        <input class="w-full border-b border-border focus:outline-none"
                                            placeholder="City name" style="font-weight: 400" />
                                    </div>

                                    <div class="col-span-12 space-y-5 relative phone-wrapper">

                                        <label class="block mb-1 text-black text-[0.75rem]" style="font-weight: 300">
                                            *Phone no.
                                        </label>

                                        <div class="grid grid-cols-12 gap-4 items-end">


                                            <div class="col-span-4 flex items-center justify-between gap-3
                                        border-b border-border pb-1 cursor-pointer"
                                                onclick="toggleCountryDropdown()">

                                                <div class="flex items-center gap-3">
                                                    <span id="selectedCountry" class="text-[0.75rem]"
                                                        style="font-weight: 400">
                                                        In
                                                    </span>

                                                    <span id="selectedCode" class="text-[0.75rem] text-black/60"
                                                        style="font-weight: 400">
                                                        (+91)
                                                    </span>
                                                </div>

                                                <i id="phoneChevron"
                                                    class="fa-solid fa-chevron-down text-[0.625rem]
                                            transition-transform duration-300"></i>
                                            </div>

                                            <input
                                                class="col-span-8 border-b border-border focus:outline-none
                                        text-[0.75rem]"
                                                placeholder="Phone number" style="font-weight: 400" />
                                        </div>


                                        <div id="countryDropdown"
                                            class="absolute left-0 mt-3 w-72
                                bg-background shadow-2xl z-[300] hidden">

                                            <div class="px-6 py-5 space-y-4 text-[0.75rem]" style="font-weight: 400">

                                                <div onclick="selectCountry('In', '+91')"
                                                    class="flex justify-between cursor-pointer hover:opacity-70">
                                                    <span>India</span>
                                                    <span>(+91)</span>
                                                </div>

                                                <div onclick="selectCountry('It', '+39')"
                                                    class="flex justify-between cursor-pointer hover:opacity-70">
                                                    <span>Italy</span>
                                                    <span>(+39)</span>
                                                </div>

                                                <div onclick="selectCountry('Fr', '+33')"
                                                    class="flex justify-between cursor-pointer hover:opacity-70">
                                                    <span>France</span>
                                                    <span>(+33)</span>
                                                </div>

                                                <div onclick="selectCountry('Jp', '+81')"
                                                    class="flex justify-between cursor-pointer hover:opacity-70">
                                                    <span>Japan</span>
                                                    <span>(+81)</span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>



                                    <div class="col-span-12 space-y-5">
                                        <label class="block mb-1 text-black" style="font-weight: 300">Company
                                            name</label>
                                        <input class="w-full border-b border-border focus:outline-none"
                                            placeholder="Company name" style="font-weight: 400" />
                                    </div>

                                </div>

                                <div class="mt-0 pb-1">
                                    <div class="h-px bg-dash-dot"></div>
                                </div>

                                <div
                                    class=" px-3 md:px-8 flex items-center justify-center gap-3 mt-5 text-[0.625rem] text-black/60">
                                    <input type="checkbox" class="w-3 h-3 accent-black" />
                                    <p>Do you want to use this address also as your billing address?</p>
                                </div>

                                <div class="flex justify-center my-5">
                                    <button
                                        class="px-16 py-3 bg-secondary hover:bg-primary rounded text-white text-[1rem]"
                                        style="font-weight: 500"
                                        onclick="toggleMasterDrawer('changeshippingaddress')">
                                        Save
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=" pb-0.5">
                        <div class="h-px bg-dash-dot"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>


<style>
    #changeshippingaddress {
        translate: none !important;
        pointer-events: none;
        visibility: hidden;
        transition: visibility 0s linear 500ms;
    }

    #changeshippingaddress.translate-x-0 {
        pointer-events: auto;
        visibility: visible;
        transition-delay: 0s;
    }

    #changeshippingaddress .changeshippingaddress-backdrop {
        /* opacity: 0; */
        /* transition: opacity 220ms ease; */
    }

    #changeshippingaddress .changeshippingaddress-panel {
        transform: translateX(100%);
        transition: transform 500ms cubic-bezier(0.86, 0, 0.07, 1);
        /* will-change: transform; */
        /* pointer-events: auto; */
        /* box-shadow: -24px 0 60px rgba(0, 0, 0, 0.18); */
    }

    #changeshippingaddress.translate-x-0 .changeshippingaddress-backdrop {
        /* opacity: 1; */
    }

    #changeshippingaddress.translate-x-0 .changeshippingaddress-panel {
        transform: translateX(0);
    }

    .thin-scrollbar {
        scrollbar-width: thin;
        scrollbar-color: #b6bcbc transparent;
    }


    .thin-scrollbar::-webkit-scrollbar {
        width: 4px;

    }

    .thin-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }

    .thin-scrollbar::-webkit-scrollbar-thumb {
        background-color: #b6bcbc;
        border-radius: 999px;
    }
</style>

<script>
    function toggleCountryDropdown() {
        const dropdown = document.getElementById("countryDropdown");
        const chevron = document.getElementById("phoneChevron");

        dropdown.classList.toggle("hidden");
        chevron.classList.toggle("rotate-180");
    }

    function selectCountry(code, dial) {
        document.getElementById("selectedCountry").textContent = code;
        document.getElementById("selectedCode").textContent = `(${dial})`;

        document.getElementById("countryDropdown").classList.add("hidden");
        document.getElementById("phoneChevron").classList.remove("rotate-180");
    }

    // Optional: click outside to close
    document.addEventListener("click", function(e) {
        const wrapper = document.querySelector(".phone-wrapper");
        if (!wrapper.contains(e.target)) {
            document.getElementById("countryDropdown").classList.add("hidden");
            document.getElementById("phoneChevron").classList.remove("rotate-180");
        }
    });
</script>
