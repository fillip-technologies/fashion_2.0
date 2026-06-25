{{-- @if(session('success'))
<script>
    toastr.success("{{ session('success') }}");
</script>
@endif

@if(session('error'))
<script>
    toastr.error("{{ session('error') }}");
</script>
@endif --}}


<section class="bg-background min-h-screen  pt-14 text-black">


    <div class="px-6 md:px-14 pb-20">

        <a href="/" class="mb-9 flex items-center space-x-5">
            <img src="{{ asset('assets/SVG/Back black icon.svg') }}" alt="Back" class="w-[7px] h-[12px]" />
            <span class="text-[1rem]" style="font-weight: 400">Contact Us</span>
        </a>

        <div class="max-w-3xl mx-auto space-y-10 text-[1rem] text-justify" style="font-weight: 200">
            <p class="italic px-6 md:px-0">
                The Yarnstone Wren team are here to help with any of your queries and questions. You will find multiple
                ways to contact us including our Headquarters and global office addresses as well as contacts for
                specific business area such as textiles, interiors and luxury goods.
            </p>
        </div>

    </div>


    <div class="w-full h-px bg-dash-dot"></div>


    <form autocomplete="off" action="{{ route('contact') }}" method="POST">
        @csrf

        <section class="w-full mx-auto  md:px-10 py-16 text-primary bg-white">

            <div class="grid grid-cols-1 relative w-11/12 mx-auto">


                <div class="space-y-12 md:space-y-16">


                    <div class="px-4 md:px-8">
                        <div class="flex flex-col justify-center max-w-2xl mb-5">
                            <h2 class="text-[0.875rem]" style="font-weight: 300">
                                Please fill in this form to send us a message. Our Client Service advisors will respond
                                to
                                your query as soon as possible. </h2>
                            <p class="text-secondary text-[0.625rem] mt-4"> *Required Infromation</p>
                        </div>



                        <div class="grid grid-cols-1 md:grid-cols-2 gap-36">
                            <div class="relative mt-12 title-wrappernew">
                                <input type="text" id="titlenew" name="title" autocomplete="off"
                                    oninput="handleFilledNew(this)" onclick="toggleDropdownNew()"
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
                                <i id="sizeChevronnew"
                                    class="fa-solid fa-chevron-down absolute right-2 top-3
                                text-[0.75rem] transition-transform duration-300"></i>
                                <div id="titleDropdownnew"
                                    class="absolute mt-2 text-[0.9375rem]
                                text-primary bg-background shadow-2xl w-full z-[100] hidden">
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white"
                                        onclick="selectTitleNew('Ms.')">Ms.</p>
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white"
                                        onclick="selectTitleNew('Mrs.')">Mrs.</p>
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white"
                                        onclick="selectTitleNew('Mr.')">Mr.</p>
                                </div>

                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-36">
                            <div class="relative mt-12">
                                <input type="firstname" id="firstname" name="firstname" autocomplete="new-firstname"
                                     oninput="handleFilledNew(this)" onblur="handleFilledNew(this)"
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

                            <div class="relative mt-12">
                                <input type="text" id="secondname" name="lastname" autocomplete="new-secondname"
                                     oninput="handleFilledNew(this)" onblur="handleFilledNew(this)"
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
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-36 items-center mt-5">

                            <div class="relative mt-12">
                                <input type="email" id="email" name="email" autocomplete="new-email"
                                    oninput="handleFilledNew(this)" onblur="handleFilledNew(this)"
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

                            <div class="relative mt-16 phone-wrappernew gap-36">
                                <label class="absolute -top-10 left-0 text-[0.75rem] text-primary">
                                    * Phone no.
                                </label>
                                <div class="flex items-end gap-6  pb-2 ">
                                    <div class="flex items-center gap-2 border-b border-border cursor-pointer pl-3"
                                        onclick="toggleCountryDropdownNew()">
                                        <span class="text-[0.9375rem]">In</span>
                                        <i id="phoneChevronnew"
                                            class="fa-solid fa-chevron-down text-[0.75rem]
                                        transition-transform duration-300"></i>
                                        <span id="selectedCodenew" class="text-[0.9375rem]">(+91)</span>
                                    </div>


                                    <input type="number" placeholder="Phone number" name="phone"
                                        class="flex-1 pl-5 bg-transparent text-primary border-b border-border outline-none text-[0.9375rem]" />
                                </div>

                                <div id="countryDropdownnew"
                                    class="absolute left-0 right-0 mt-1 bg-white shadow-xl z-[200] hidden">
                                    <div
                                        class="absolute
                                    text-[0.9375rem] text-primary font-medium
                                    bg-background shadow-2xl
                                    w-full z-[100]">

                                        <div onclick="selectCountryNew('+91')"
                                            class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-3 hover:bg-black hover:text-white">
                                            <span class="px-6">India</span>
                                            <span>(+91)</span>
                                        </div>

                                        <div onclick="selectCountryNew('+39')"
                                            class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-3 hover:bg-black hover:text-white">
                                            <span class="px-6">Italy</span>
                                            <span>(+39)</span>
                                        </div>

                                        <div onclick="selectCountryNew('+33')"
                                            class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-3 hover:bg-black hover:text-white">
                                            <span class="px-6">France</span>
                                            <span>(+33)</span>
                                        </div>

                                        <div onclick="selectCountryNew('+81')"
                                            class="grid grid-cols-2 cursor-pointer mx-auto  px-10 py-3 hover:bg-black hover:text-white">
                                            <span class="px-6">Japan</span>
                                            <span>(+81)</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="grid grid-cols-1">
                            <div class="relative mt-12 subject-wrappernew">
                                <input type="text" id="subjectnew" name="query_type" autocomplete="off"
                                    oninput="handleFilledNew(this)" onclick="toggleSubject()"
                                    class="peer w-full bg-transparent border-b border-border py-1 pl-4
                                text-[0.9375rem] font-normal focus:outline-none focus:border-border
                                data-[filled=true]:font-medium" />
                                <label for="title"
                                    class="absolute left-0 top-2 text-[0.9375rem] text-primary
                                transition-all duration-200
                                peer-focus:-top-6 peer-focus:text-[0.6875rem]
                                peer-data-[filled=true]:-top-6
                                peer-data-[filled=true]:text-[0.6875rem]">
                                    * Please select a topic
                                </label>
                                <i id="subjectChevronnew"
                                    class="fa-solid fa-chevron-down absolute right-2 top-3
                                text-[0.75rem] transition-transform duration-300"></i>
                                <div id="subjectDropdownnew"
                                    class="absolute mt-2 text-[0.9375rem]
                                text-primary bg-background shadow-2xl w-full z-[100] hidden">
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white"
                                        onclick="selectSubject('Product Infromation')">
                                        Product
                                        Infromation</p>
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white"
                                        onclick="selectSubject('OnlinePurchase')">
                                        OnlinePurchase</p>
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white"
                                        onclick="selectSubject('Press')">Press</p>
                                    <p class="size-option cursor-pointer px-6 py-3 hover:bg-black hover:text-white"
                                        onclick="selectSubject('Other')">Other</p>
                                </div>

                            </div>
                        </div>

                        <div class="grid grid-cols-1 mt-16">
                            <label class="text-[0.9375rem]" style="font-weight: 400">*Your message</label>
                            <div class="relative mt-4">
                                <textarea id="message" name="message" rows="6" maxlength="1000"  oninput="handleFilledNew(this)"
                                    onblur="handleFilledNew(this)"
                                    class="peer w-full
                                    resize-none
                                    rounded
                                    border border-border
                                    bg-transparent
                                    px-4 pt-6 pb-3
                                    text-[0.9375rem]
                                    font-normal
                                    focus:outline-none
                                    focus:border-border
                                    data-[filled=true]:font-medium"></textarea>


                                <p class="mt-2 flex items-center gap-1 text-[0.625rem] text-muted-foreground">
                                    <span>ⓘ</span>
                                    A maximum of 1000 characters
                                </p>
                            </div>

                        </div>


                    </div>

                </div>

                <div class="px-4 md:px-8 mt-8 ">

                    <button  type="submit" class="bg-secondary hover:bg-primary text-white px-10 py-3 rounded text-[1rem]">
                        Send
                    </button>

                </div>

                <div class="flex flex-col justify-center mb-5 px-4 md:px-8 mt-10">
                    <h2 class="text-[0.625rem]" style="font-weight: 300">
                        By sending your message, you agree to accept the General Terms and Conditions of Use and that
                        your data will be processed in compliance with the Privacy Policy of Hermès.</h2>
                </div>


            </div>

        </section>





    </form>



</section>


<script>
    function handleFilledNew(input) {
        if (input.value.trim() !== "") {
            input.dataset.filled = "true";
        } else {
            input.dataset.filled = "false";
        }
    }
</script>


<script>
    (function() {
        const input = document.getElementById("titlenew");
        const dropdown = document.getElementById("titleDropdownnew");
        const chevron = document.getElementById("sizeChevronnew");
        const wrapper = document.querySelector(".title-wrappernew");

        window.toggleDropdownNew = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectTitleNew = function(value) {
            input.value = value;
            input.setAttribute("data-filled", "true");

            dropdown.classList.add("hidden");
            chevron.classList.remove("rotate-180");
        };

        window.handleFilledNew = function(el) {
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
        const dropdown = document.getElementById("countryDropdownnew");
        const chevron = document.getElementById("phoneChevronnew");
        const code = document.getElementById("selectedCodenew");
        const wrapper = document.querySelector(".phone-wrappernew");

        window.toggleCountryDropdownNew = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectCountryNew = function(value) {
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
        const input = document.getElementById("subjectnew");
        const dropdown = document.getElementById("subjectDropdownnew");
        const chevron = document.getElementById("subjectChevronnew");
        const wrapper = document.querySelector(".subject-wrappernew");

        window.toggleSubject = function() {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        };

        window.selectSubject = function(value) {
            input.value = value;
            input.setAttribute("data-filled", "true");

            dropdown.classList.add("hidden");
            chevron.classList.remove("rotate-180");
        };

        window.handleFilledNew = function(el) {
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
