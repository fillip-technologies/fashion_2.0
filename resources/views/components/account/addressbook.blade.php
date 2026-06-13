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


<section class="w-full bg-white pb-10 md:pb-24 pt-14 md:pt-36 border-x-[1rem] border-secondary">

    <div
        class="w-full md:w-11/12 mx-auto px-6 md:px-6 flex flex-col md:flex-row items-start justify-between md:items-center space-y-4 md:space-y-0">
        <h2 class="text-[0.9375rem] uppercase tracking-wide" style="font-weight: 600">
            My Shipping Addresses
        </h2>

        <a href="/shippingaddress"
            class="text-[0.9375rem] text-black uppercase tracking-wide underline underline-offset-2"
            style="font-weight: 600">
            +Add address
        </a>
    </div>


    <div>
        <div class="w-full md:w-11/12 mx-auto px-6 mt-14 md:mt-36">
            <div class="bg-background rounded py-16 px-7 md:px-14">
                <p class="text-[1.125rem] text-black" style="font-weight: 400">
                    You don’t have any shipping addresses saved.
                </p>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto px-6 mt-4">
            <p class="text-[0.875rem] text-black px-0 md:px-14" style="font-weight: 400">
                *Save your addresses for your convenience.
            </p>
        </div>
    </div>

    <section class="w-full py-24">

        <div class="w-full md:max-w-4xl mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 md:gap-40">

                <!-- ADDRESS 1 -->
                <div class="px-5 md:px-0 address-item">

                    <!-- Header -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="relative w-8 h-8 bg-secondary">
                            <!-- top white line -->
                            <span class="absolute top-1.5 left-0 right-1.5 h-px bg-white"></span>

                            <!-- right white line -->
                            <span class="absolute top-1.5 bottom-0 right-1.5 w-px bg-white"></span>
                        </div>

                        <div>
                            <h3 class="text-[1rem]" style="font-weight: 500">Address 1 :</h3>
                            <p class="text-[0.75rem] text-secondary mt-1">
                                *This is your default shipping address
                            </p>
                        </div>
                    </div>

                    <!-- Address Content -->
                    <div class="text-[0.875rem] text-black space-y-2 ml-12" style="font-weight: 300">
                        <div class="text-[1rem]">
                            <p>Name Surname</p>
                        </div>
                        <div>
                            <p>Address line 1</p>
                            <p>Address line 2</p>
                        </div>
                        <div>
                            <p class="mt-4">Postal code</p>
                            <p>City</p>
                            <p>State, Location</p>
                        </div>
                        <div>
                            <p class="mt-4">(Company name)</p>
                        </div>
                        <div>
                            <p class="mt-4">Phone no.</p>
                        </div>
                    </div>

                    <!-- Edit -->
                    <div class="ml-12 mt-6">
                        <a href="/shippingaddress" class="text-[1rem] underline underline-offset-2"
                            style="font-weight: 500">
                            Edit address
                        </a>
                    </div>

                </div>

                <!-- ADDRESS 2 -->
                <div class="px-5 md:px-0 address-item">

                    <!-- Header -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="relative w-8 h-8 bg-secondary">
                            <!-- top white line -->
                            <span class="absolute top-1.5 left-0 right-1.5 h-px bg-white"></span>

                            <!-- right white line -->
                            <span class="absolute top-1.5 bottom-0 right-1.5 w-px bg-white"></span>
                        </div>

                        <div>
                            <h3 class="text-[1rem]" style="font-weight: 500">Address 2 :</h3>

                        </div>
                    </div>

                    <!-- Address Content -->
                    <div class="text-[0.875rem] text-black space-y-2 ml-12 mt-10" style="font-weight: 300">
                        <div class="text-[1rem]">
                            <p>Name Surname</p>
                        </div>
                        <div>
                            <p>Address line 1</p>
                            <p>Address line 2</p>
                        </div>
                        <div>
                            <p class="mt-4">Postal code</p>
                            <p>City</p>
                            <p>State, Location</p>
                        </div>
                        <div>
                            <p class="mt-4">(Company name)</p>
                        </div>
                        <div>
                            <p class="mt-4">Phone no.</p>
                        </div>
                    </div>

                    <!-- Edit -->
                    <div class="ml-12 mt-6">
                        <a href="/shippingaddress" class="text-[1rem] underline underline-offset-2"
                            style="font-weight: 500">
                            Edit address
                        </a>
                    </div>

                </div>

                <!-- ADDRESS 3 -->
                <div class="px-5 md:px-0 address-item">

                    <!-- Header -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="relative w-8 h-8 bg-secondary">
                            <!-- top white line -->
                            <span class="absolute top-1.5 left-0 right-1.5 h-px bg-white"></span>

                            <!-- right white line -->
                            <span class="absolute top-1.5 bottom-0 right-1.5 w-px bg-white"></span>
                        </div>

                        <div>
                            <h3 class="text-[1rem]" style="font-weight: 500">Address 3 :</h3>
                            <p class="text-[0.75rem] text-secondary mt-1">
                                *This is your default shipping address
                            </p>
                        </div>
                    </div>

                    <!-- Address Content -->
                    <div class="text-[0.875rem] text-black space-y-2 ml-12" style="font-weight: 300">
                        <div class="text-[1rem]">
                            <p>Name Surname</p>
                        </div>
                        <div>
                            <p>Address line 1</p>
                            <p>Address line 2</p>
                        </div>
                        <div>
                            <p class="mt-4">Postal code</p>
                            <p>City</p>
                            <p>State, Location</p>
                        </div>
                        <div>
                            <p class="mt-4">(Company name)</p>
                        </div>
                        <div>
                            <p class="mt-4">Phone no.</p>
                        </div>
                    </div>

                    <!-- Edit -->
                    <div class="ml-12 mt-6">
                        <a href="/shippingaddress" class="text-[1rem] underline underline-offset-2"
                            style="font-weight: 500">
                            Edit address
                        </a>
                    </div>

                </div>

                <!-- ADDRESS 4 -->
                <div class="px-5 md:px-0 address-item">

                    <!-- Header -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="relative w-8 h-8 bg-secondary">
                            <!-- top white line -->
                            <span class="absolute top-1.5 left-0 right-1.5 h-px bg-white"></span>

                            <!-- right white line -->
                            <span class="absolute top-1.5 bottom-0 right-1.5 w-px bg-white"></span>
                        </div>

                        <div>
                            <h3 class="text-[1rem]" style="font-weight: 500">Address 4 :</h3>

                        </div>
                    </div>

                    <!-- Address Content -->
                    <div class="text-[0.875rem] text-black space-y-2 ml-12 mt-10" style="font-weight: 300">
                        <div class="text-[1rem]">
                            <p>Name Surname</p>
                        </div>
                        <div>
                            <p>Address line 1</p>
                            <p>Address line 2</p>
                        </div>
                        <div>
                            <p class="mt-4">Postal code</p>
                            <p>City</p>
                            <p>State, Location</p>
                        </div>
                        <div>
                            <p class="mt-4">(Company name)</p>
                        </div>
                        <div>
                            <p class="mt-4">Phone no.</p>
                        </div>
                    </div>

                    <!-- Edit -->
                    <div class="ml-12 mt-6">
                        <a href="/shippingaddress" class="text-[1rem] underline underline-offset-2"
                            style="font-weight: 500">
                            Edit address
                        </a>
                    </div>

                </div>


            </div>

        </div>

    </section>

    <div
        class="w-full md:w-11/12 mx-auto px-6 mt-14 md:mt-28 flex flex-col md:flex-row justify-between items-center text-xs text-black">

        <p class="text-[0.875rem]" style="font-weight: 400">You have <span class="text-secondary">0/4</span>
            addresses
            saved.</p>

        <div class="flex items-center gap-4 text-secondary">
            <span id="prevBtn" class="text-3xl font-medium cursor-pointer">&lsaquo;</span>
            <span id="nextBtn" class="text-3xl font-medium cursor-pointer">&rsaquo;</span>
        </div>


        <div></div>

    </div>

</section>

<script>
    const addresses = document.querySelectorAll(".address-item");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    let currentIndex = 0;
    const itemsPerPage = 2;

    function updateButtons() {
        // Prev button
        if (currentIndex === 0) {
            prevBtn.style.opacity = "0.3";
            prevBtn.style.pointerEvents = "none";
        } else {
            prevBtn.style.opacity = "1";
            prevBtn.style.pointerEvents = "auto";
        }

        // Next button
        if (currentIndex + itemsPerPage >= addresses.length) {
            nextBtn.style.opacity = "0.3";
            nextBtn.style.pointerEvents = "none";
        } else {
            nextBtn.style.opacity = "1";
            nextBtn.style.pointerEvents = "auto";
        }
    }

    function showAddresses() {
        addresses.forEach((item, index) => {
            item.style.display = "none";
            if (index >= currentIndex && index < currentIndex + itemsPerPage) {
                item.style.display = "block";
            }
        });

        updateButtons();
    }

    nextBtn.addEventListener("click", () => {
        if (currentIndex + itemsPerPage < addresses.length) {
            currentIndex += itemsPerPage;
            showAddresses();
        }
    });

    prevBtn.addEventListener("click", () => {
        if (currentIndex - itemsPerPage >= 0) {
            currentIndex -= itemsPerPage;
            showAddresses();
        }
    });

    // Initial load
    showAddresses();
</script>



<img src="assets/images/half-flower.png" alt="background" class="w-full h-full" />


<section class="w-full bg-white pb-10 md:pb-24 pt-14 md:pt-28 border-x-[1rem] border-secondary">

    <div
        class="w-full md:w-11/12 mx-auto px-6 md:px-6 flex flex-col md:flex-row items-start justify-between md:items-center space-y-4 md:space-y-0">
        <h2 class="text-[0.9375rem] uppercase tracking-wide" style="font-weight: 600">
            My Billing Addresses
        </h2>

        <a href="/billingaddress"
            class="text-[0.9375rem] text-black uppercase tracking-wide underline underline-offset-2"
            style="font-weight: 600">
            +Add address
        </a>
    </div>

    <div>
        <div class="w-full md:w-11/12 mx-auto px-6 mt-14 md:mt-36">
            <div class="bg-background rounded py-16 px-7 md:px-14">
                <p class="text-[1.125rem] text-black" style="font-weight: 400">
                    You don’t have any billing addresses saved.
                </p>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto px-6 mt-4">
            <p class="text-[0.875rem] text-black px-0 md:px-14" style="font-weight: 400">
                *Save your addresses for your convenience.
            </p>
        </div>
    </div>

    <section class="w-full py-24">

        <div class="w-full md:max-w-4xl mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 md:gap-40">

                <!-- ADDRESS 1 -->
                <div class="px-5 md:px-0 billing-address-item">

                    <!-- Header -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="relative w-8 h-8 bg-secondary">
                            <!-- top white line -->
                            <span class="absolute top-1.5 left-0 right-1.5 h-px bg-white"></span>

                            <!-- right white line -->
                            <span class="absolute top-1.5 bottom-0 right-1.5 w-px bg-white"></span>
                        </div>

                        <div>
                            <h3 class="text-[1rem]" style="font-weight: 500">Address 1 :</h3>
                            <p class="text-[0.75rem] text-secondary mt-1">
                                *This is your default shipping address
                            </p>
                        </div>
                    </div>

                    <!-- Address Content -->
                    <div class="text-[0.875rem] text-black space-y-2 ml-12" style="font-weight: 300">
                        <div class="text-[1rem]">
                            <p>Name Surname</p>
                        </div>
                        <div>
                            <p>Address line 1</p>
                            <p>Address line 2</p>
                        </div>
                        <div>
                            <p class="mt-4">Postal code</p>
                            <p>City</p>
                            <p>State, Location</p>
                        </div>
                        <div>
                            <p class="mt-4">(Company name)</p>
                        </div>
                        <div>
                            <p class="mt-4">Phone no.</p>
                        </div>
                    </div>

                    <!-- Edit -->
                    <div class="ml-12 mt-6">
                        <a href="/billingaddress" class="text-[1rem] underline underline-offset-2"
                            style="font-weight: 500">
                            Edit address
                        </a>
                    </div>

                </div>

                <!-- ADDRESS 2 -->
                <div class="px-5 md:px-0 billing-address-item">

                    <!-- Header -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="relative w-8 h-8 bg-secondary">
                            <!-- top white line -->
                            <span class="absolute top-1.5 left-0 right-1.5 h-px bg-white"></span>

                            <!-- right white line -->
                            <span class="absolute top-1.5 bottom-0 right-1.5 w-px bg-white"></span>
                        </div>

                        <div>
                            <h3 class="text-[1rem]" style="font-weight: 500">Address 2 :</h3>

                        </div>
                    </div>

                    <!-- Address Content -->
                    <div class="text-[0.875rem] text-black space-y-2 ml-12 mt-10" style="font-weight: 300">
                        <div class="text-[1rem]">
                            <p>Name Surname</p>
                        </div>
                        <div>
                            <p>Address line 1</p>
                            <p>Address line 2</p>
                        </div>
                        <div>
                            <p class="mt-4">Postal code</p>
                            <p>City</p>
                            <p>State, Location</p>
                        </div>
                        <div>
                            <p class="mt-4">(Company name)</p>
                        </div>
                        <div>
                            <p class="mt-4">Phone no.</p>
                        </div>
                    </div>

                    <!-- Edit -->
                    <div class="ml-12 mt-6">
                        <a href="/billingaddress" class="text-[1rem] underline underline-offset-2"
                            style="font-weight: 500">
                            Edit address
                        </a>
                    </div>

                </div>

                <!-- ADDRESS 3 -->
                <div class="px-5 md:px-0 billing-address-item">

                    <!-- Header -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="relative w-8 h-8 bg-secondary">
                            <!-- top white line -->
                            <span class="absolute top-1.5 left-0 right-1.5 h-px bg-white"></span>

                            <!-- right white line -->
                            <span class="absolute top-1.5 bottom-0 right-1.5 w-px bg-white"></span>
                        </div>

                        <div>
                            <h3 class="text-[1rem]" style="font-weight: 500">Address 3 :</h3>
                            <p class="text-[0.75rem] text-secondary mt-1">
                                *This is your default shipping address
                            </p>
                        </div>
                    </div>

                    <!-- Address Content -->
                    <div class="text-[0.875rem] text-black space-y-2 ml-12" style="font-weight: 300">
                        <div class="text-[1rem]">
                            <p>Name Surname</p>
                        </div>
                        <div>
                            <p>Address line 1</p>
                            <p>Address line 2</p>
                        </div>
                        <div>
                            <p class="mt-4">Postal code</p>
                            <p>City</p>
                            <p>State, Location</p>
                        </div>
                        <div>
                            <p class="mt-4">(Company name)</p>
                        </div>
                        <div>
                            <p class="mt-4">Phone no.</p>
                        </div>
                    </div>

                    <!-- Edit -->
                    <div class="ml-12 mt-6">
                        <a href="/billingaddress" class="text-[1rem] underline underline-offset-2"
                            style="font-weight: 500">
                            Edit address
                        </a>
                    </div>

                </div>

                <!-- ADDRESS 4 -->
                <div class="px-5 md:px-0 billing-address-item">

                    <!-- Header -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="relative w-8 h-8 bg-secondary">
                            <!-- top white line -->
                            <span class="absolute top-1.5 left-0 right-1.5 h-px bg-white"></span>

                            <!-- right white line -->
                            <span class="absolute top-1.5 bottom-0 right-1.5 w-px bg-white"></span>
                        </div>

                        <div>
                            <h3 class="text-[1rem]" style="font-weight: 500">Address 4 :</h3>

                        </div>
                    </div>

                    <!-- Address Content -->
                    <div class="text-[0.875rem] text-black space-y-2 ml-12 mt-10" style="font-weight: 300">
                        <div class="text-[1rem]">
                            <p>Name Surname</p>
                        </div>
                        <div>
                            <p>Address line 1</p>
                            <p>Address line 2</p>
                        </div>
                        <div>
                            <p class="mt-4">Postal code</p>
                            <p>City</p>
                            <p>State, Location</p>
                        </div>
                        <div>
                            <p class="mt-4">(Company name)</p>
                        </div>
                        <div>
                            <p class="mt-4">Phone no.</p>
                        </div>
                    </div>

                    <!-- Edit -->
                    <div class="ml-12 mt-6">
                        <a href="/billingaddress" class="text-[1rem] underline underline-offset-2"
                            style="font-weight: 500">
                            Edit address
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <div
        class="w-full md:w-11/12 mx-auto px-6 mt-14 md:mt-28 flex flex-col md:flex-row justify-between items-center text-xs text-black">

        <p class="text-[0.875rem]" style="font-weight: 400">You have <span class="text-secondary">0/4</span>
            addresses
            saved.</p>

        <div class="flex items-center gap-4 text-secondary">
            <span id="billingPrevBtn" class="text-3xl font-medium cursor-pointer">&lsaquo;</span>
            <span id="billingNextBtn" class="text-3xl font-medium cursor-pointer">&rsaquo;</span>
        </div>

        <div></div>

    </div>

</section>


<script>
    const billingAddresses = document.querySelectorAll(".billing-address-item");
    const billingPrevBtn = document.getElementById("billingPrevBtn");
    const billingNextBtn = document.getElementById("billingNextBtn");

    let billingIndex = 0;
    const billingItemsPerPage = 2;

    function updateBillingButtons() {
        if (billingIndex === 0) {
            billingPrevBtn.style.opacity = "0.3";
            billingPrevBtn.style.pointerEvents = "none";
        } else {
            billingPrevBtn.style.opacity = "1";
            billingPrevBtn.style.pointerEvents = "auto";
        }

        if (billingIndex + billingItemsPerPage >= billingAddresses.length) {
            billingNextBtn.style.opacity = "0.3";
            billingNextBtn.style.pointerEvents = "none";
        } else {
            billingNextBtn.style.opacity = "1";
            billingNextBtn.style.pointerEvents = "auto";
        }
    }

    function showBillingAddresses() {
        billingAddresses.forEach((item, index) => {
            item.style.display = "none";
            if (index >= billingIndex && index < billingIndex + billingItemsPerPage) {
                item.style.display = "block";
            }
        });

        updateBillingButtons();
    }

    billingNextBtn.addEventListener("click", () => {
        if (billingIndex + billingItemsPerPage < billingAddresses.length) {
            billingIndex += billingItemsPerPage;
            showBillingAddresses();
        }
    });

    billingPrevBtn.addEventListener("click", () => {
        if (billingIndex - billingItemsPerPage >= 0) {
            billingIndex -= billingItemsPerPage;
            showBillingAddresses();
        }
    });

    // Initial load
    showBillingAddresses();
</script>
