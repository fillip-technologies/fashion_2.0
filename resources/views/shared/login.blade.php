<nav id="drawerlogin"
    class="fixed top-0 right-0 w-full h-screen z-[1200]
         overflow-hidden
         translate-x-full">

    <div class="flex h-screen">
        <div class="drawerlogin-backdrop hidden md:block flex-1 h-screen bg-black/80 overflow-hidden overscroll-none"
            onclick="toggleMasterDrawer('drawerlogin')"></div>

        <div class="drawerlogin-panel relative h-screen w-full md:w-2/3 shrink-0 overflow-hidden overscroll-none bg-black/80">
            <div class="drawerlogin-motion relative h-full">
                <div class="absolute inset-0 z-10 bg-no-repeat bg-left bg-cover w-1/2 left-14 hidden md:block"
                    style="background-image:url('/assets/images/vertical-flower.png')">
                </div>

                <div
                    class="absolute top-0 right-0 h-full
                            w-full  md:w-[calc(100%-6.875rem)]
                            bg-primary text-background z-20
                            overflow-hidden overscroll-none">

                <div class="py-8 px-10 flex items-center justify-between">
                    <p class=" tracking-wide text-[0.875rem]">
                        your <span class="text-[1rem] font-medium uppercase">ACCOUNT</span>
                    </p>
                    <button onclick="toggleMasterDrawer('drawerlogin')"
                        class="text-3xl font-light text-white  hover:text-background">
                        &times;
                    </button>
                </div>

                {{-- Login --}}
                <div id="login">
                    <div class="px-6 md:px-24 pt-10 max-w-3xl mx-auto">

                        <p class="text-[0.875rem] leading-relaxed text-background">
                            Already have an account with us?<br />
                            Please add your login credentials below
                        </p>

                        <p class="text-[0.75rem] text-right mt-3 text-white/70" style="font-weight: 200">
                            *Required
                        </p>

                        <div class="mt-5">
                            <label class="text-[0.75rem] block mb-1">*E-mail</label>
                            <input class="w-full h-9 rounded bg-white text-black px-3 outline-none" />
                        </div>

                        <div class="mt-5">
                            <label class="text-[0.75rem] block mb-1">*Password</label>
                            <input class="w-full h-9 rounded bg-white text-black px-3 outline-none" />
                        </div>

                        <button
                            class="w-full mt-6 h-9 rounded
                            border border-white/70
                            text-[0.75rem] tracking-widest
                            text-white
                            transition-all duration-300 ease-out
                            hover:bg-gradient-to-r
                            hover:from-primary
                            hover:via-[#4a4a4a]
                            hover:to-primary
                            hover:border-none">
                            LOG IN
                        </button>

                        <p class="text-[0.625rem] mt-2 opacity-70">
                            *Please enter a valid email and password.
                        </p>

                        <div class="text-right mt-2">
                            <a href="javascript:void(0)" onclick="showSection('otp')"
                                class="text-[0.75rem] underline opacity-80 hover:opacity-100">
                                Forgot password?
                            </a>

                        </div>

                    </div>

                    <div class="px-0">
                        <div class="w-full h-px bg-dash-dot-white my-10"></div>
                    </div>

                    <div class="px-6 md:px-24 max-w-3xl mx-auto">

                        <p class="text-[0.875rem] mb-6">
                            New to Yarnstone Wren? Create an account to stay in touch with us
                        </p>

                        <button onclick="window.location.href='/createaccount'"
                            class="w-full mt-2 h-9 rounded
                                border border-white/70
                                text-[0.75rem] tracking-widest
                                text-white
                                transition-all duration-300 ease-out
                                hover:bg-gradient-to-r
                                hover:from-primary
                                hover:via-[#4a4a4a]
                                hover:to-primary
                                hover:border-none">
                            CREATE ACCOUNT
                        </button>

                    </div>
                </div>

                {{-- Otp --}}
                <div id="otp" class="hidden min-h-[calc(100vh-120px)] flex items-center justify-center">
                    <div class="px-6 md:px-24 md:max-w-3xl mx-auto w-full">

                        <p class="text-[0.875rem] leading-relaxed text-background">
                            Forgot your Password?<br />
                            Please enter the OTP sent to you in your email ***********34@gmail.com
                        </p>

                        <p class="text-[0.75rem] text-right mt-3 text-white/70" style="font-weight: 200">
                            *Required
                        </p>

                        <div class="mt-5">
                            <label class="text-[0.75rem] block mb-1">*Enter OTP</label>
                            <input class="w-full h-9 rounded bg-white text-black px-3 outline-none" />
                        </div>

                        <p class="text-[0.625rem] mt-2 opacity-70">
                            *Please enter a valid OTP.
                        </p>

                        <div class="mt-5 flex space-x-5">
                            <p class="text-[0.625rem] mt-2 opacity-30">
                                *Resend OTP.
                            </p>
                            <p class="text-[0.625rem] mt-2 opacity-70">
                                60s
                            </p>

                        </div>

                        <button onclick="showSection('confirmpassword')"
                            class="w-full mt-12 h-9 rounded
                 border border-white/70
                 text-[0.75rem] tracking-widest
                 text-white
                 transition-all duration-300 ease-out
                 hover:bg-gradient-to-r
                 hover:from-primary
                 hover:via-[#4a4a4a]
                 hover:to-primary
                 hover:border-none">
                            CONFIRM OTP
                        </button>

                    </div>
                </div>

                {{-- Confirm Password --}}
                <div id="confirmpassword"
                    class="hidden min-h-[calc(100vh-120px)] flex items-center justify-center">
                    <div class="px-6 md:px-24 md:max-w-3xl mx-auto w-full">

                        <p class="text-[0.875rem] leading-relaxed text-background mb-2">
                            Change Password?
                        </p>

                        <p class="text-[0.75rem] leading-relaxed text-white/70" style="font-weight: 200">
                            Please follow the criteria to create the password for your security :

                            <br />
                            | At least 8 characters | At least 1 upper case | At least 1 lower case | At least 1 digit |
                            At
                            least 1 special character |
                        </p>

                        <p class="text-[0.75rem] text-right mt-3 text-white/70" style="font-weight: 200">
                            *Required
                        </p>

                        <div class="mt-5">
                            <div class="flex items-center justify-between">
                                <label class="text-[0.75rem] block mb-1">*New Password</label>
                                <label onclick="togglePassword(this)"
                                    class="text-[0.625rem] cursor-pointer underline text-white/70">
                                    Show Password
                                </label>

                            </div>
                            <input type="password"
                                class="w-full h-9 rounded bg-white text-black px-3 outline-none password" />
                        </div>

                        <div class="mt-5">
                            <div class="flex items-center justify-between">
                                <label class="text-[0.75rem] block mb-1">*Confirm New Password</label>
                                <label onclick="togglePassword(this)"
                                    class="text-[0.625rem] cursor-pointer underline text-white/70">
                                    Show Password
                                </label>

                            </div> <input type="password"
                                class="w-full h-9 rounded bg-white text-black px-3 outline-none password" />
                        </div>

                        <button onclick="toggleMasterDrawer('drawerlogin')"
                            class="w-full mt-20 h-9 rounded
                 border border-white/70
                 text-[0.75rem] tracking-widest
                 text-white
                 transition-all duration-300 ease-out
                 hover:bg-gradient-to-r
                 hover:from-primary
                 hover:via-[#4a4a4a]
                 hover:to-primary
                 hover:border-none">
                            CONFIRM PASSWORD
                        </button>

                    </div>
                </div>


                </div>

                <div
                    class="absolute top-1/2 
           -translate-y-1/2
           z-30 pointer-events-none hidden md:block">
                    <img src="/assets/images/flower.png" class="w-full h-52" alt="Logo" />
                </div>
            </div>
        </div>
    </div>

</nav>



<script>
    function togglePassword(el) {
        const input = el.closest("div").nextElementSibling;
        input.type = input.type === "password" ? "text" : "password";
        el.innerText = input.type === "password" ? "Show Password" : "Hide Password";
    }
</script>


<script>
    function showSection(sectionId) {
        const sections = ["login", "otp", "confirmpassword"];

        sections.forEach(id => {
            const el = document.getElementById(id);
            if (!el) return;

            if (id === sectionId) {
                el.classList.remove("hidden");
            } else {
                el.classList.add("hidden");
            }
        });
    }
</script>

<script>
    (function() {
        const drawer = document.getElementById("drawerlogin");
        if (!drawer) return;

        const syncBodyScrollLock = () => {
            const isOpen = drawer.classList.contains("translate-x-0");
            document.body.classList.toggle("drawerlogin-lock", isOpen);
        };

        syncBodyScrollLock();

        const observer = new MutationObserver(syncBodyScrollLock);
        observer.observe(drawer, {
            attributes: true,
            attributeFilter: ["class"]
        });
    })();
</script>


<style>
    body.drawerlogin-lock {
        overflow: hidden;
    }

    #drawerlogin {
        translate: none !important;
        pointer-events: none;
        visibility: hidden;
        transition: visibility 0s linear 500ms;
    }

    #drawerlogin.translate-x-0 {
        pointer-events: auto;
        visibility: visible;
        transition-delay: 0s;
    }

    #drawerlogin .drawerlogin-backdrop {
        opacity: 0;
        transition: opacity 220ms ease;
    }

    #drawerlogin .drawerlogin-panel {
        opacity: 0;
        transition: opacity 220ms ease;
        pointer-events: auto;
    }

    #drawerlogin.translate-x-0 .drawerlogin-backdrop {
        opacity: 1;
    }

    #drawerlogin .drawerlogin-motion {
        height: 100%;
        transform: translateX(100%);
        transition: transform 500ms cubic-bezier(0.86, 0, 0.07, 1);
        will-change: transform;
    }

    #drawerlogin.translate-x-0 .drawerlogin-panel {
        opacity: 1;
    }

    #drawerlogin.translate-x-0 .drawerlogin-motion {
        transform: translateX(0);
    }

    .custom-scroll::-webkit-scrollbar {
        width: 4px;
    }

    .custom-scroll::-webkit-scrollbar-track {
        background: transparent;
    }

    .custom-scroll::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 10px;
    }

    .custom-scroll {
        scrollbar-width: thin;
        scrollbar-color: rgba(0, 0, 0, 0.4) transparent;
    }
</style>
