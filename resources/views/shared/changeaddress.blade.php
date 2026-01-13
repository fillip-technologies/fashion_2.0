<nav id="changeaddress"
    class="fixed top-0 right-0 w-full md:w-1/2 h-screen z-[1200]
           bg-white
           transform translate-x-full transition-transform duration-500
           ease-[cubic-bezier(0.86,0,0.07,1)]">

    <div class="h-full overflow-y-auto overscroll-contain pt-0.5 thin-scrollbar">
        <div class="relative min-h-full">

            <div class="">
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
                        Addressss
                    </span>
                </p>

                <div class="flex items-center justify-end space-x-4">
                    <button class="text-[0.75rem] md:text-[0.875rem]
                       underline text-black/50">
                        Choose Address
                    </button>

                    <button onclick="toggleMasterDrawer('changeaddress')"
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
                        <div class="w-10/12 mx-auto py-16">

                            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-32 gap-y-20 text-[0.75rem]" style="font-weight: 300">

                                <!-- Address 1 -->
                                <div class="flex items-start justify-center gap-4">
                                    <input type="radio" class="mt-1 w-3 h-3" />

                                    <div class="space-y-3">
                                        <p class="text-[0.875rem]" style="font-weight: 500">Address 1 :</p>

                                        <div class="space-y-3">
                                            <p>Name Surname</p>

                                            <div class="mt-4">
                                                <p>Address line 1</p>
                                                <p>Address line 2</p>
                                            </div>

                                            <div class="mt-4">
                                                <p>Postal code</p>
                                                <p>City</p>
                                                <p>State, Location</p>
                                            </div>

                                            <p class="mt-4">(Company name)</p>

                                            <p class="mt-4">Phone no.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Address 2 -->
                                <div class="flex items-start justify-center gap-4">
                                    <input type="radio" class="mt-1 w-3 h-3" />

                                    <div class="space-y-3">
                                        <p class="text-[0.875rem]" style="font-weight: 500">Address 2 :</p>

                                        <div class="space-y-3">
                                            <p>Name Surname</p>

                                            <div class="mt-4">
                                                <p>Address line 1</p>
                                                <p>Address line 2</p>
                                            </div>

                                            <div class="mt-4">
                                                <p>Postal code</p>
                                                <p>City</p>
                                                <p>State, Location</p>
                                            </div>

                                            <p class="mt-4">(Company name)</p>

                                            <p class="mt-4">Phone no.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Address 3 -->
                                <div class="flex items-start justify-center gap-4">
                                    <input type="radio" class="mt-1 w-3 h-3" />

                                    <div class="space-y-3">
                                        <p class="text-[0.875rem]" style="font-weight: 500">Address 3 :</p>

                                        <div class="space-y-3">
                                            <p>Name Surname</p>

                                            <div class="mt-4">
                                                <p>Address line 1</p>
                                                <p>Address line 2</p>
                                            </div>

                                            <div class="mt-4">
                                                <p>Postal code</p>
                                                <p>City</p>
                                                <p>State, Location</p>
                                            </div>

                                            <p class="mt-4">(Company name)</p>

                                            <p class="mt-4">Phone no.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Address 4 -->
                                <div class="flex items-start justify-center gap-4">
                                    <input type="radio" class="mt-1 w-3 h-3" />

                                    <div class="space-y-3">
                                        <p class="text-[0.875rem]" style="font-weight: 500">Address 4 :</p>

                                        <div class="space-y-3">
                                            <p>Name Surname</p>

                                            <div class="mt-4">
                                                <p>Address line 1</p>
                                                <p>Address line 2</p>
                                            </div>

                                            <div class="mt-4">
                                                <p>Postal code</p>
                                                <p>City</p>
                                                <p>State, Location</p>
                                            </div>

                                            <p class="mt-4">(Company name)</p>

                                            <p class="mt-4">Phone no.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="mt-0 pb-1">
                            <div class="h-px bg-dash-dot"></div>
                        </div>

                        <div
                            class=" px-3 md:px-8 flex items-center justify-center gap-3 mt-5 text-[0.625rem] text-black/60">
                            <input type="checkbox" class="w-3 h-3" />
                            <p>Do you want to use this address also as your billing address?</p>
                        </div>

                        <div class="flex justify-center my-5">
                            <button class="px-16 py-3 bg-secondary hover:bg-primary rounded text-white text-[1rem]"
                                style="font-weight: 500">
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
</nav>


<style>
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
