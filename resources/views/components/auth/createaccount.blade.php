<div class="bg-background">
    <header class="relative border-b border-black/10 bg-secondary">
        <div class="mx-auto px-6 sm:px-14 h-24 flex items-center">

            <div class="mx-auto">
                <div class="w-24 h-24 bg-purple-600 flex items-center justify-center">
                    <span class="text-white text-sm font-semibold">LOGO 1</span>
                </div>
            </div>

        </div>
    </header>
    <img src="{{ asset('assets/images/rectangle-house.png') }}" alt="Search Visual" class="w-full h-full object-contain" />


    <section class="w-11/12 mx-auto px-10 py-16 text-primary">

        <!-- HEADER -->
        <div class="flex items-center gap-4 mb-16">
            <h1 class="text-[1.25rem] tracking-wide uppercase font-medium">
                CREATE YOUR ACCOUNT
            </h1>
            <span class="text-[0.9375rem]">|</span>
            <p class="text-[0.9375rem] font-normal">Perch at the eyrie</p>
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 relative pt-20">

            <!-- VERTICAL DIVIDER -->
            <div class="hidden lg:block absolute left-1/2 top-0 h-full w-px border-l border-dashed border-black/20">
            </div>

            <!-- LEFT COLUMN -->
            <div class="space-y-16">

                <!-- AUTH CREDENTIALS -->
                <div>
                    <h2 class="text-[0.9375rem] uppercase tracking-wide mb-10">
                        AUTHENTICATION CREDENTIALS
                    </h2>

                    <form autocomplete="off">
                        <div class="relative mt-12">
                            <!-- INPUT -->
                            <input type="email" id="email" required oninput="handleFilled(this)"
                                onblur="handleFilled(this)"
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

                            <!-- FLOATING LABEL -->
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

                            <p class="text-[0.625rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                * Required information
                            </p>

                        </div>

                    </form>




                    <!-- PASSWORD -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label class="text-[0.75rem]">
                                * Password
                            </label>
                            <span class="text-[0.625rem] underline cursor-pointer text-black/60">
                                Show Password
                            </span>
                        </div>

                        <input type="password"
                            class="w-full bg-transparent border-b border-black/40
                   text-[1.25rem] leading-none
                   py-2 focus:outline-none
                   focus:border-black" />

                        <p class="text-[0.625rem] text-black/40 mt-2 leading-relaxed">
                            Please follow the criteria to create the password for your security :
                            <br />
                            | At least 8 characters | At least 1 upper case | At least 1 lower case |
                            At least 1 digit | At least 1 special character |
                        </p>
                    </div>
                </div>

                <!-- DIVIDER -->
                <div class="border-t border-black/40"></div>

                <!-- PERSONAL DETAILS -->
                <div>
                    <h2 class="text-[0.75rem] uppercase tracking-wide mb-10">
                        PERSONAL DETAILS
                    </h2>

                    <!-- TITLE -->
                    <div class="mb-8">
                        <label class="text-[0.75rem] block mb-2">* Title</label>
                        <select
                            class="w-full bg-transparent border-b border-black/40
                   py-2 text-[1rem] focus:outline-none">
                            <option>Select information</option>
                            <option>Mr</option>
                            <option>Ms</option>
                            <option>Mrs</option>
                        </select>
                    </div>

                    <!-- FIRST NAME -->
                    <div class="mb-8">
                        <label class="text-[0.75rem] block mb-2">* First name</label>
                        <input
                            class="w-full bg-transparent border-b border-black/40
                   py-2 text-[1rem] focus:outline-none" />
                    </div>

                    <!-- LAST NAME -->
                    <div class="mb-8">
                        <label class="text-[0.75rem] block mb-2">* Last name</label>
                        <input
                            class="w-full bg-transparent border-b border-black/40
                   py-2 text-[1rem] focus:outline-none" />
                    </div>

                    <!-- PHONE -->
                    <div class="mb-10">
                        <label class="text-[0.75rem] block mb-2">* Phone no.</label>
                        <div class="flex gap-6 border-b border-black/40 pb-2">
                            <span class="text-[0.75rem] text-black/60">IN (+91)</span>
                            <input class="flex-1 bg-transparent focus:outline-none" placeholder="Phone number" />
                        </div>
                    </div>

                    <!-- DOB -->
                    <div>
                        <label class="text-[0.75rem] block mb-4">Date of birth</label>
                        <div class="grid grid-cols-3 gap-6">
                            <select class="border-b border-black/40 py-2 focus:outline-none">
                                <option>Month</option>
                            </select>
                            <select class="border-b border-black/40 py-2 focus:outline-none">
                                <option>Day</option>
                            </select>
                            <select class="border-b border-black/40 py-2 focus:outline-none">
                                <option>Year</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN -->
            <div class="space-y-16">

                <p class="text-[0.75rem] text-black/60 mb-6">
                    Add your shipping address and billing address later
                </p>

                <!-- ADDRESSES -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                    <!-- SHIPPING -->
                    <div>
                        <h3 class="text-[0.75rem] uppercase mb-8">
                            * YOUR SHIPPING ADDRESS
                        </h3>

                        <div class="space-y-6">
                            <input class="underline-input" placeholder="* Location" />
                            <input class="underline-input" placeholder="* Address" />
                            <input class="underline-input" placeholder="Address line 2" />
                            <input class="underline-input" placeholder="* State" />
                            <input class="underline-input" placeholder="* City" />
                            <input class="underline-input" placeholder="* Postal code" />
                            <input class="underline-input" placeholder="Company" />
                        </div>
                    </div>

                    <!-- BILLING -->
                    <div>
                        <h3 class="text-[0.75rem] uppercase mb-8">
                            * YOUR BILLING ADDRESS
                        </h3>
                    </div>

                </div>

                <!-- CHECKBOX -->
                <div class="flex items-center justify-between">
                    <p class="text-[0.75rem]">
                        Is your shipping and billing address the same?
                    </p>
                    <input type="checkbox" class="w-4 h-4" />
                </div>

            </div>

        </div>
    </section>

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
