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

<form action="{{ route('user.info.update',UserLogin()->id) }}" method="POST">
    @csrf
<div class="bg-white border-x-[1rem] border-secondary text-black">

    <div class="h-10 md:h-40 bg-white"> </div>

    <div class="max-w-xl mx-auto px-6">
        <div class="text-[0.9375rem] flex items-center justify-center" style="font-weight: 600">PERSONAL DETAILS</div>

        <div class="text-[0.625rem] text-[#97A0A1] mt-7" style="font-weight: 300">*Required information</div>

        <div class="relative mt-16 title-wrapper-profile">
            <input type="text" id="title-profile" name="title" autocomplete="off"
                value="{{ UserLogin()->title ?? '' }}" data-filled="{{ !empty(UserLogin()->title) ? 'true' : 'false' }}"
                oninput="handleFilledProfile(this)" onclick="toggleDropdownProfile()"
                class="peer w-full bg-transparent border-b border-border py-1 pl-4 text-[0.9375rem] font-normal focus:outline-none focus:border-border data-[filled=true]:font-medium" />

            <label for="title-profile"
                class="absolute left-0 top-2 text-[0.9375rem] text-primary transition-all duration-200 peer-focus:-top-6 peer-focus:text-[0.6875rem] peer-data-[filled=true]:-top-6 peer-data-[filled=true]:text-[0.6875rem]">
                * Title
            </label>
        </div>

        <div class="relative mt-16">
            <input type="firstname" value="{{ UserLogin()->firstname ?? '' }}"
                data-filled="{{ !empty(UserLogin()->firstname) ? 'true' : 'false' }}" id="firstname" name="firstname"
                autocomplete="new-firstname" required oninput="handleFilled(this)" onblur="handleFilled(this)"
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

        </div>

        <div class="relative mt-16">
            <input type="secondname" value="{{ UserLogin()->lastname ?? '' }}"
                data-filled="{{ !empty(UserLogin()->lastname) ? 'true' : 'false' }}" id="lastname" name="lastname"
                autocomplete="new-secondname" required oninput="handleFilled(this)" onblur="handleFilled(this)"
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
                * Last Name
            </label>

        </div>

        <div class="relative mt-20 phone-wrapper-profile">
            <label class="absolute -top-10 left-0 text-[0.75rem] text-primary">
                * Phone no.
            </label>
            <div class="relative mt-20">
                <label class="absolute -top-10 left-0 text-[0.75rem] text-primary">
                    * Phone no.
                </label>

                <div class="flex items-end gap-6 pb-2">
                    <div class="flex items-center gap-2 border-b border-border cursor-pointer pl-3">
                        <span>In</span>
                        <span id="selectedCodeProfile">(+91)</span>
                    </div>

                    <input type="text" name="phone" value="{{ UserLogin()->phone ?? '' }}"
                        placeholder="Phone number"
                        class="flex-1 pl-5 bg-transparent text-primary border-b border-border outline-none text-[0.9375rem]" />
                </div>
            </div>

            <div id="countryDropdownProfile" class="absolute left-0 right-0 mt-1 bg-white shadow-xl z-[200] hidden">
                <div
                    class="absolute
                                    text-[0.9375rem] text-primary font-medium
                                    bg-background shadow-lg
                                    w-full z-[100]">

                    <div onclick="selectCountryProfile('+91')"
                        class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-2 hover:bg-black hover:text-white">
                        <span class="px-6">India</span>
                        <span>(+91)</span>
                    </div>

                    <div onclick="selectCountryProfile('+39')"
                        class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-2 hover:bg-black hover:text-white">
                        <span class="px-6">Italy</span>
                        <span>(+39)</span>
                    </div>

                    <div onclick="selectCountryProfile('+33')"
                        class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-2 hover:bg-black hover:text-white">
                        <span class="px-6">France</span>
                        <span>(+33)</span>
                    </div>

                    <div onclick="selectCountryProfile('+81')"
                        class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-2 hover:bg-black hover:text-white">
                        <span class="px-6">Japan</span>
                        <span>(+81)</span>
                    </div>

                </div>
            </div>

        </div>

        <div class="relative mt-16">
            <div class="text-[0.9375rem]" style="font-weight: 500">Date of birth</div>
        </div>

        <div class="relative grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-10">

            <div class="relative mt-12 month-wrapper-profile">
                <input type="text" id="month-profile" name="month" value="{{ UserLogin()->month ?? '' }}"
                    data-filled="{{ !empty(UserLogin()->month) ? 'true' : 'false' }}" autocomplete="off" required
                    oninput="handleFilled(this)" onclick="toggleMonthDropdownProfile()"
                    class="peer w-full bg-transparent border-b border-border py-1 pl-4
               text-[0.9375rem] font-normal focus:outline-none focus:border-border
               data-[filled=true]:font-medium" />

                <label for="month-profile"
                    class="absolute left-0 top-2 text-[0.9375rem] text-primary
               transition-all duration-200
               peer-focus:-top-6 peer-focus:text-[0.6875rem]
               peer-data-[filled=true]:-top-6
               peer-data-[filled=true]:text-[0.6875rem]">
                    * Month
                </label>

                <i id="sizeChevronProfile"
                    class="fa-solid fa-chevron-down absolute right-2 top-3
               text-[0.75rem] transition-transform duration-300"></i>

                <div id="monthDropdownProfile"
                    class="absolute mt-2 text-[0.9375rem] font-medium
               text-primary bg-background shadow-lg w-full z-[100] hidden">
                    <p class="size-option cursor-pointer px-6 py-2 hover:bg-black hover:text-white"
                        onclick="selectMonthProfile('January')">January</p>

                    <p class="size-option cursor-pointer px-6 py-2 hover:bg-black hover:text-white"
                        onclick="selectMonthProfile('February')">February</p>

                    <p class="size-option cursor-pointer px-6 py-2 hover:bg-black hover:text-white"
                        onclick="selectMonthProfile('March')">March</p>
                </div>
            </div>
            <div class="relative mt-12">
                <input type="text" id="day-profile" name="day"
                    value="{{ UserLogin() ? UserLogin()->day : '' }}"
                    data-filled="{{ UserLogin()->day ? 'true' : 'false' }}" oninput="handleFilled(this)"
                    class="peer w-full bg-transparent border-b border-border py-1 pl-4 text-[0.9375rem] focus:outline-none" />

                <label for="day-profile"
                    class="absolute left-0 top-2 text-[0.9375rem] text-primary transition-all duration-200 peer-focus:-top-6 peer-focus:text-[0.6875rem] peer-data-[filled=true]:-top-6 peer-data-[filled=true]:text-[0.6875rem]">
                    * Day
                </label>
            </div>

            <div class="relative mt-12">
                <input type="text" id="year" name="year" value="{{ UserLogin()->year ?? '' }}"
                    data-filled="{{ !empty(UserLogin()->year) ? 'true' : 'false' }}" autocomplete="off" required
                    oninput="handleFilled(this)" onblur="handleFilled(this)"
                    class="peer w-full bg-transparent border-b border-border py-1 pl-4 text-[0.9375rem] font-normal focus:outline-none focus:border-border data-[filled=true]:font-medium" />

                <label for="year"
                    class="absolute left-0 top-2 text-[0.9375rem] text-primary transition-all duration-200
        peer-focus:-top-6
        peer-focus:text-[0.6875rem]
        peer-data-[filled=true]:-top-6
        peer-data-[filled=true]:text-[0.6875rem]">
                    * Year
                </label>
            </div>

        </div>

        <div class="text-[0.625rem] text-[#97A0A1] mt-7" style="font-weight: 300">*Please fill out valid date of birth
        </div>

        <div class="space-y-4 text-[0.75rem] text-black mt-10" style="font-weight: 200">

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

        <div class="flex items-center justify-center mt-20">
            <button onclick="window.location.href='/accountconfirmed'"
                class="w-60 h-12 bg-secondary text-white text-[1rem] rounded-md hover:bg-primary transition">
                Save
            </button>
        </div>




        <div class="h-28 bg-white"> </div>

    </div>

</div>
</form>



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
        const input = document.getElementById("title-profile");
        const dropdown = document.getElementById("titleDropdownProfile");
        const chevron = document.getElementById("sizeChevronProfile");
        const wrapper = document.querySelector(".title-wrapper-profile");

        window.toggleDropdownProfile = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectTitleProfile = function(value) {
            input.value = value;
            input.setAttribute("data-filled", "true");

            dropdown.classList.add("hidden");
            chevron.classList.remove("rotate-180");
        };

        window.handleFilledProfile = function(el) {
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
        const dropdown = document.getElementById("countryDropdownProfile");
        const chevron = document.getElementById("phoneChevronProfile");
        const code = document.getElementById("selectedCodeProfile");
        const wrapper = document.querySelector(".phone-wrapper-profile");

        window.toggleCountryDropdownProfile = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectCountryProfile = function(value) {
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
        const input = document.getElementById("month-profile");
        const dropdown = document.getElementById("monthDropdownProfile");
        const chevron = document.querySelector(".month-wrapper-profile i");
        const wrapper = document.querySelector(".month-wrapper-profile");

        window.toggleMonthDropdownProfile = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectMonthProfile = function(value) {
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
