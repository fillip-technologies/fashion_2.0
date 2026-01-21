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

    <form autocomplete="off">

        <section class="w-11/12 mx-auto px-2  md:px-10 py-16 text-primary">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-4 mb-16">
                <h1 class="text-[1.25rem] tracking-wide uppercase font-medium">
                    CREATE YOUR ACCOUNT
                </h1>
                <span class="text-[0.9375rem] hidden md:block">|</span>
                <p class="text-[0.9375rem] font-normal">Perch at the eyrie</p>
            </div>



            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 relative pt-2 md:pt-20">

                <div class="hidden lg:block absolute left-1/2 top-0 h-full w-px bg-dash-dot-v"></div>

                <div class="space-y-12 md:space-y-16">

                    <div class="px-4 md:px-8">
                        <h2 class="text-[0.9375rem] uppercase tracking-wide mb-10">
                            AUTHENTICATION CREDENTIALS
                        </h2>


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
                            <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                * Required information
                            </p>
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
                            <p class="absolute right-0 -top-4 underline text-[0.625rem] cursor-pointer"
                                onclick="toggleSecretPassword(this)">Show Password
                            </p>

                            <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                Please follow the criteria to create the password for your security :
                                <br />
                                | At least 8 characters | At least 1 upper case | At least 1 lower case |
                                At least 1 digit | At least 1 special character |
                            </p>
                        </div>

                        <script>
                            function toggleSecretPassword(el) {
                                const wrapper = el.closest(".relative");
                                const input = wrapper.querySelector("input");

                                input.type = input.type === "password" ? "text" : "password";
                                el.innerText =
                                    input.type === "password" ? "Show Password" : "Hide Password";
                            }
                        </script>






                    </div>

                    <div class="border-t border-black my-10 md:my-16"></div>

                    <div class="px-4 md:px-8">
                        <h2 class="text-[0.9375rem] uppercase tracking-wide mb-10">
                            PERSONAL DETAILS
                        </h2>


                        <div class="relative mt-12 title-wrapper">
                            <input type="text" id="title" name="title" autocomplete="off" required
                                oninput="handleFilled(this)" onclick="toggleDropdown()"
                                class="peer w-full bg-transparent border-b border-border py-1 pl-4
                                text-[0.9375rem] font-normal focus:outline-none focus:border-border
                                data-[filled=true]:font-medium" />
                            <label for="title"
                                class="absolute left-0 top-2 text-[0.9375rem] text-primary
                                transition-all duration-200
                                peer-focus:-top-6 peer-focus:text-[0.6875rem]
                                peer-data-[filled=true]:-top-6
                                peer-data-[filled=true]:text-[0.6875rem]">
                                * Title
                            </label>
                            <i id="sizeChevron"
                                class="fa-solid fa-chevron-down absolute right-2 top-3
                                text-[0.75rem] transition-transform duration-300"></i>
                            <div id="titleDropdown"
                                class="absolute mt-2  text-[0.9375rem]
                                text-primary bg-background shadow-2xl w-full z-[100] hidden">
                                <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white"
                                    onclick="selectTitle('Ms.')">Ms.</p>
                                <p class="size-option cursor-pointer  px-6 py-3 hover:bg-black hover:text-white"
                                    onclick="selectTitle('Mrs.')">Mrs.</p>
                                <p class="size-option cursor-pointer  px-6 py-3 hover:bg-black hover:text-white"
                                    onclick="selectTitle('Mr.')">Mr.</p>
                            </div>
                            <p class="text-[0.75rem] text-[#97A0A1] mt-1 font-[200]">
                                * Required information
                            </p>
                        </div>



                        <div class="relative mt-12">
                            <input type="firstname" id="firstname" name="firstname" autocomplete="new-firstname"
                                required oninput="handleFilled(this)" onblur="handleFilled(this)"
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

                            <label for="firstname"
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
                                * First Name
                            </label>
                            <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                * Required information
                            </p>
                        </div>


                        <div class="relative mt-12">
                            <input type="secondname" id="secondname" name="secondname" autocomplete="new-secondname"
                                required oninput="handleFilled(this)" onblur="handleFilled(this)"
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

                            <label for="secondname"
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
                                * Second Name
                            </label>
                            <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                * Required information
                            </p>
                        </div>

                        <div class="relative mt-20 phone-wrapper">
                            <label class="absolute -top-10 left-0 text-[0.75rem] text-primary">
                                * Phone no.
                            </label>
                            <div class="flex items-end gap-6  pb-2 ">
                                <div class="flex items-center gap-2 border-b border-border cursor-pointer pl-3"
                                    onclick="toggleCountryDropdown()">
                                    <span class="text-[0.9375rem]">In</span>
                                    <i id="phoneChevron"
                                        class="fa-solid fa-chevron-down text-[0.75rem]
                                        transition-transform duration-300"></i>
                                    <span id="selectedCode" class="text-[0.9375rem]">(+91)</span>
                                </div>


                                <input type="text" placeholder="Phone number"
                                    class="flex-1 pl-5 bg-transparent text-primary border-b border-border outline-none text-[0.9375rem]" />
                            </div>

                            <div id="countryDropdown"
                                class="absolute left-0 right-0 mt-1 bg-white shadow-xl z-[200] hidden">
                                <div
                                    class="absolute
                                    text-[0.9375rem] text-primary font-medium
                                    bg-background shadow-2xl
                                    w-full z-[100]">

                                    <div onclick="selectCountry('+91')"
                                        class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-3 hover:bg-black hover:text-white">
                                        <span class="px-6">India</span>
                                        <span>(+91)</span>
                                    </div>

                                    <div onclick="selectCountry('+39')"
                                        class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-3 hover:bg-black hover:text-white">
                                        <span class="px-6">Italy</span>
                                        <span>(+39)</span>
                                    </div>

                                    <div onclick="selectCountry('+33')"
                                        class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-3 hover:bg-black hover:text-white">
                                        <span class="px-6">France</span>
                                        <span>(+33)</span>
                                    </div>

                                    <div onclick="selectCountry('+81')"
                                        class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-3 hover:bg-black hover:text-white">
                                        <span class="px-6">Japan</span>
                                        <span>(+81)</span>
                                    </div>

                                </div>
                            </div>
                            <p class="text-[0.75rem] text-[#97A0A1] mt-0 font-[200]">
                                * Required information
                            </p>
                        </div>

                        <div class="relative mt-16">
                            <div class="text-[0.9375rem] font-semibold">Date of birth</div>

                        </div>



                        <div class="relative grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-10">

                            <div class="relative mt-12 month-wrapper">
                                <input type="text" id="month" name="month" autocomplete="off" required
                                    oninput="handleFilled(this)" onclick="toggleMonthDropdown()"
                                    class="peer w-full bg-transparent border-b border-border py-1 pl-4
                                text-[0.9375rem] font-normal focus:outline-none focus:border-border
                                data-[filled=true]:font-medium" />
                                <label for="month"
                                    class="absolute left-0 top-2 text-[0.9375rem] text-primary
                                transition-all duration-200
                                peer-focus:-top-6 peer-focus:text-[0.6875rem]
                                peer-data-[filled=true]:-top-6
                                peer-data-[filled=true]:text-[0.6875rem]">
                                    * Month
                                </label>
                                <i id="sizeChevron"
                                    class="fa-solid fa-chevron-down absolute right-2 top-3
                                text-[0.75rem] transition-transform duration-300"></i>
                                <div id="monthDropdown"
                                    class="absolute mt-2 text-[0.9375rem] font-medium
                                text-primary bg-background shadow-2xl w-full z-[100] hidden">
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white" onclick="selectMonth('January')">January</p>
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white" onclick="selectMonth('February')">February
                                    </p>
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white" onclick="selectMonth('March')">March</p>

                                </div>
                                <p class="text-[0.75rem] text-[#97A0A1] mt-1 font-[200]">
                                    * Required information
                                </p>
                            </div>
                            <div class="relative mt-12">
                                <input type="day" id="day" name="day" autocomplete="new-day" required
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

                                <label for="day"
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
                                    * Day
                                </label>
                            </div>
                            <div class="relative mt-12">
                                <input type="year" id="year" name="year" autocomplete="new-year" required
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

                                <label for="year"
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
                                    * Year
                                </label>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="space-y-16 flex flex-col items-center pl-4 md:pl-24">

                    <div class="w-full max-w-5xl flex flex-col items-center">


                        <div class="flex justify-between w-full">
                            <p class="text-[0.75rem] text-black/60 mb-6 text-center">
                                Add your shipping address and billing address later
                            </p>

                            <input type="checkbox" class="w-4 h-4" />
                        </div>


                        <div class="flex flex-col md:flex-row items-start justify-between w-full mt-10 md:mt-20">
                            <h3
                                class="text-[0.9375rem] uppercase mb-8 text-center md:text-left font-semibold underline">
                                * YOUR SHIPPING ADDRESS
                            </h3>
                            <h3 class="text-[0.9375rem] uppercase mb-8 text-center md:text-left font-semibold">
                                * YOUR BILLING ADDRESS
                            </h3>
                        </div>



                        <div class="grid grid-cols-1 md:grid-cols-1 w-full">

                            <div class="px-0">

                                <div class="relative mt-12">
                                    <input type="location" id="location" name="location"
                                        autocomplete="new-location" required oninput="handleFilled(this)"
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

                                    <label for="location"
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
                                        * Location
                                    </label>
                                    <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                        * Required information
                                    </p>
                                </div>


                                <div class="relative mt-12">
                                    <input type="address" id="address" name="address" autocomplete="new-address"
                                        required oninput="handleFilled(this)" onblur="handleFilled(this)"
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
                                        * Address
                                    </label>
                                    <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                        * Required information
                                    </p>
                                </div>


                                <div class="relative mt-12">
                                    <input type="addresstwo" id="addresstwo" name="addresstwo"
                                        autocomplete="new-addresstwo" required oninput="handleFilled(this)"
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
                                        * Address 2
                                    </label>
                                    <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                        * Required information
                                    </p>
                                </div>

                                <div class="relative mt-12">
                                    <input type="state" id="state" name="state" autocomplete="new-state"
                                        required oninput="handleFilled(this)" onblur="handleFilled(this)"
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
                                        * State
                                    </label>
                                    <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                        * Required information
                                    </p>
                                </div>

                                <div class="relative mt-12">
                                    <input type="city" id="city" name="city" autocomplete="new-city"
                                        required oninput="handleFilled(this)" onblur="handleFilled(this)"
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
                                        * City
                                    </label>
                                    <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                        * Required information
                                    </p>
                                </div>


                                <div class="relative mt-12">
                                    <input type="postalcode" id="postalcode" name="postalcode"
                                        autocomplete="new-postalcode" required oninput="handleFilled(this)"
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
                                        * Postal Code
                                    </label>
                                    <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                        * Required information
                                    </p>
                                </div>

                                <div class="relative mt-12">
                                    <input type="company" id="company" name="company" autocomplete="new-company"
                                        required oninput="handleFilled(this)" onblur="handleFilled(this)"
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
                                        * Company
                                    </label>
                                    <p class="text-[0.75rem] text-[#97A0A1] mt-1" style="font-weight: 200">
                                        * Required information
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="flex justify-between w-full mt-10 md:mt-20">
                            <p class="text-[0.75rem] text-black/60 mb-6 text-center">
                                Is your shipping and billing address the same?
                            </p>

                            <input type="checkbox" class="w-4 h-4" />
                        </div>


                    </div>
                </div>
            </div>

        </section>

        <section class="w-11/12 mx-auto px-2 md:px-10 pb-10 text-primary">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 relative">
                <div class="border-t border-black"></div>
                <div class="hidden md:block border-t border-black"></div>
            </div>
        </section>

        <div class="w-full bg-background pt-5 pb-10 md:pt-20 md:pb-20 text-primary">
            <div class="max-w-7xl mx-auto px-6">


                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">


                    <div class="space-y-8">

                        <h3 class="text-sm font-medium text-black">
                            Terms and Conditions
                        </h3>

                        <div class="space-y-4 text-[0.75rem] text-black max-w-md" style="font-weight: 200">

                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="checkbox" class="mt-0.5 accent-black" />
                                <span>
                                    I would like to know and stay informed about news related to Fashion and Accessories
                                </span>
                            </label>

                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="checkbox" class="mt-0.5 accent-black" />
                                <>
                                    I agree that my purchase preferences are shared with Yarnstone Wren to improve the
                                    relevance of the offers and recommendations I receive
                                    (More)
                                    </span>
                            </label>

                        </div>
                    </div>


                    <div class="flex flex-col items-center gap-6">

                        <button onclick="window.location.href='/accountconfirmed'"
                            class="w-64 h-12 bg-secondary text-white text-[1.25rem] rounded-md hover:bg-primary transition">
                            Create Account
                        </button>


                        <p class="text-[10px] leading-relaxed text-black max-w-md text-left" style="font-weight: 200">
                            By clicking on “Create account” you confirm that you have read the Privacy Policy and
                            consent to
                            the processing of your personal data by Yarnstone Wren for the management of your
                            relationship
                            with customers under the conditions established in our dedicated Privacy Policy. Yarnstone
                            Wren
                            may contact you for communication purposes, including direct marketing, which can be
                            customized
                            based on the personal data we know about you and your preferences. To provide you with the
                            same
                            personalized service worldwide, your personal data may be communicated to the competent
                            entities
                            of Yarnstone Wren in India and abroad.
                        </p>

                    </div>

                </div>
            </div>
        </div>

    </form>
</div>

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

<script>
    (function() {
        const input = document.getElementById("title");
        const dropdown = document.getElementById("titleDropdown");
        const chevron = document.getElementById("sizeChevron");
        const wrapper = document.querySelector(".title-wrapper");

        window.toggleDropdown = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectTitle = function(value) {
            input.value = value;
            input.setAttribute("data-filled", "true");

            dropdown.classList.add("hidden");
            chevron.classList.remove("rotate-180");
        };

        window.handleFilled = function(el) {
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


<script>
    (function() {
        const dropdown = document.getElementById("countryDropdown");
        const chevron = document.getElementById("phoneChevron");
        const code = document.getElementById("selectedCode");
        const wrapper = document.querySelector(".phone-wrapper");

        window.toggleCountryDropdown = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectCountry = function(value) {
            code.textContent = `(${value})`;
            dropdown.classList.add("hidden");
            chevron.classList.remove("rotate-180");
        };

        document.addEventListener("click", (e) => {
            if (!wrapper.contains(e.target)) {
                dropdown.classList.add("hidden");
                chevron.classList.remove("rotate-180");
            }
        });
    })();
</script>


<script>
    (function() {
        const input = document.getElementById("month");
        const dropdown = document.getElementById("monthDropdown");
        const chevron = document.querySelector(".month-wrapper i");
        const wrapper = document.querySelector(".month-wrapper");

        window.toggleMonthDropdown = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectMonth = function(value) {
            input.value = value;
            input.setAttribute("data-filled", "true");

            dropdown.classList.add("hidden");
            chevron.classList.remove("rotate-180");
        };

        document.addEventListener("click", (e) => {
            if (!wrapper.contains(e.target)) {
                dropdown.classList.add("hidden");
                chevron.classList.remove("rotate-180");
            }
        });
    })();
</script>
