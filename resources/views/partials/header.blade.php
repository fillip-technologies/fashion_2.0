<div class="bg-background sticky top-0 z-50" id="oldheader">
    <header class="w-full border-b border-gray-200 md:h-[12.1875rem]">
        <div class="mx-auto px-4 sm:px-14">

            <div class="hidden sm:flex items-center justify-between pt-7">
                <div class="text-[12px] font-light">
                    Location <span class="underline">(India / EN / ₹)</span>
                </div>
                <div class="text-[12px] font-light">
                    Contact Us
                </div>
            </div>

            <div class="relative flex items-center justify-between h-16 sm:h-40 pb-2 sm:pb-4">
                <div class="flex items-center gap-4 sm:gap-20">
                    <div class="flex items-center gap-2 cursor-pointer openMenu">
                        <img src="{{ asset('assets/icons/hamburger.png') }}" alt="Menu"
                            class="w-7 sm:w-[36px] h-auto" />
                        {{-- <img src="{{ asset('assets/icons/search.png') }}" alt="Search"
                            class="w-[15px] h-[15px] md:hidden ml-2" /> --}}
                        <span class="hidden sm:block text-[13px] font-light">
                            Menu
                        </span>
                    </div>

                    <div class="hidden sm:flex items-center gap-3 cursor-pointer openSearch">
                        <img src="{{ asset('assets/icons/search.png') }}" alt="Search" class="w-[15px] h-[15px]" />

                        <div class="flex flex-col">
                            <span class="text-[13px] text-black leading-none px-2 font-light">
                                Search
                            </span>
                            <span class="h-[0.5px] w-36 bg-black mt-1"></span>
                        </div>
                    </div>

                </div>
                <div class="absolute left-1/2 -translate-x-1/2">
                    <a href="/" class="w-20 h-12 sm:w-32 sm:h-36 bg-purple-600 flex items-center justify-center">
                        <span class="text-white font-semibold text-xs sm:text-base">
                            LOGO 1
                        </span>
                    </a>
                </div>
                <div class="flex items-center gap-3 sm:gap-4">
                    <img src="{{ asset('assets/icons/user.png') }}" alt="User"
                        class="w-5 sm:w-[20px] h-auto cursor-pointer" onclick="toggleMasterDrawer('drawerlogin')" />

                    <img src="{{ asset('assets/icons/cart.png') }}" alt="Cart" class="w-6 sm:w-[25px] h-auto" />
                </div>

            </div>
        </div>
    </header>
</div>

<div class="bg-secondary sticky top-0 z-50 hidden" id="newheader">
    <header class="w-full">
        <div class="mx-auto px-4 sm:px-14">

            <div class="relative flex items-center justify-between h-14 md:h-[6.9375rem]">
                <div class="flex items-center gap-4 sm:gap-20">
                    <div class="flex items-center gap-2 cursor-pointer openMenu">
                        <img src="{{ asset('assets/icons/hamburger.png') }}" alt="Menu"
                            class="w-7 sm:w-[36px] h-auto" />
                        <span class="hidden sm:block text-[13px] font-light">
                            Menu
                        </span>
                    </div>

                    <div class="hidden sm:flex items-center gap-3 cursor-pointer openSearch">
                        <img src="{{ asset('assets/icons/search.png') }}" alt="Search" class="w-[15px] h-[15px]" />
                        <div class="flex flex-col">
                            <span class="text-[13px] text-black leading-none px-2 font-light">
                                Search
                            </span>
                            <span class="h-[0.5px] w-36 bg-black mt-1"></span>
                        </div>
                    </div>
                </div>

                <div class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0">
                    <a href="/"
                        class="w-20 sm:w-[180px] h-full bg-[#4f6fc6]
                              flex items-center justify-center">
                        <span class="text-white font-semibold tracking-wide">
                            LOGO 2
                        </span>
                    </a>
                </div>

                <div class="flex items-center gap-6">
                    <img src="{{ asset('assets/icons/user.png') }}" class="w-[20px] cursor-pointer"
                        onclick="toggleMasterDrawer('drawerlogin')" />

                    <img src="{{ asset('assets/icons/cart.png') }}" class="w-[24px] cursor-pointer" />
                </div>
            </div>
        </div>
    </header>
</div>



<script>
    const oldheader = document.getElementById("oldheader");
    const newheader = document.getElementById("newheader");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            oldheader.classList.add(
                "hidden"
            );
            newheader.classList.remove("hidden");
        } else {
            oldheader.classList.remove(
                "hidden"
            );
            newheader.classList.add("hidden");
        }
    });
</script>


<!-- MENU DESKTOP -->
<div id="menuOverlay" class="fixed left-0 right-0 z-[999] bg-primary/50 backdrop-blur-sm hidden pt-10">
    <div class="flex w-full h-[70vh]">
        <div class="w-[25%] bg-background relative">
            <nav
                class="w-full px-14 py-12 flex flex-col justify-center
                text-[12px] tracking-wide uppercase font-medium text-black space-y-10">

                <div class="space-y-6">
                    <a href="#" class="menu-item block" data-menu="newarrival">New Arrival</a>
                    <a href="#" class="menu-item block opacity-60" data-menu="accessories">Accessories</a>
                    <a href="#" class="menu-item block opacity-60" data-menu="readytowear">Ready-to-Wear</a>
                    <a href="#" class="menu-item block opacity-60" data-menu="discoveryarns">
                        Discover the Yarns
                    </a>
                </div>

                <div class="space-y-6">
                    <a href="#" class="block opacity-60 hover:opacity-100">Art of Gifting</a>
                    <a href="/about" class="block opacity-60 hover:opacity-100">About Brand Name</a>
                </div>

                <div>
                    <a href="#" class="block opacity-60 hover:opacity-100">Contact Us</a>
                </div>
            </nav>
            <div id="menuDivider" class="absolute right-0 top-10 bottom-10 w-2 bg-black/80 transition-all duration-200">
            </div>

        </div>

        <div id="subMenuWrapper" class="w-[25%] bg-background">
            <nav id="subMenu" class="px-14 py-16 text-[12px] tracking-wide uppercase space-y-4"></nav>
        </div>


        <div class="flex-1 bg-primary/30 backdrop-blur-sm flex items-center justify-center relative py-10">
            <img id="menuImage" class="object-contain" />

            <button id="closeMenu" class="absolute top-6 right-10 text-[24px] font-light text-white">
                {{-- <i class="fa-solid fa-minus"></i> --}}
                <img src="{{ asset('assets/icons/minus.png') }}" alt="minus" />
            </button>
        </div>

    </div>
</div>

<!-- MOBILE MENU -->
<div id="mobileMenu" class="fixed inset-0 z-[1000] bg-background hidden md:hidden">
    <div class="px-6 py-6 h-full flex flex-col">

        <div class="flex justify-between items-center mb-8">
            <span class="uppercase text-sm">Menu</span>
            <button id="closeMobileMenu" class="text-2xl">
                {{-- <i class="fa-solid fa-minus"></i> --}}
                <img src="{{ asset('assets/icons/black-minus.png') }}" alt="black-minus" />
            </button>
        </div>

        <div id="mobileLevel1" class="space-y-6">
            <nav
                class="w-full p-6 flex flex-col justify-center
                text-[12px] tracking-wide uppercase font-medium text-black space-y-10">

                <div class="space-y-6">
                    <a href="#" class="menu-item block" data-menu="newarrival">New Arrival</a>
                    <a href="#" class="menu-item block opacity-60" data-menu="accessories">Accessories</a>
                    <a href="#" class="menu-item block opacity-60" data-menu="readytowear">Ready-to-Wear</a>
                    <a href="#" class="menu-item block opacity-60" data-menu="discoveryarns">
                        Discover the Yarns
                    </a>
                </div>

                <div class="space-y-6">
                    <a href="#" class="block opacity-60 hover:opacity-100">Art of Gifting</a>
                    <a href="/about" class="block opacity-60 hover:opacity-100">About Brand Name</a>
                </div>

                <div>
                    <a href="/contact" class="block opacity-60 hover:opacity-100">Contact Us</a>
                </div>
            </nav>
        </div>

        <div id="mobileLevel2" class="hidden space-y-6">
            <button id="mobileBack" class="text-xs uppercase opacity-90"><i class="fa-solid fa-arrow-left"></i>
                Back</button>
            <div id="mobileSubMenu" class="space-y-4 p-4"></div>
        </div>

    </div>
</div>

<script>
    const MENU_DATA = {
        newarrival: {
            route: "/newcollection",
            items: [],
            image: "{{ asset('assets/images/menu/one.png') }}"
        },
        accessories: {
            route: "/",
            items: [{
                    label: "See All",
                    route: "/seeall"
                },
                {
                    label: "Shawls",
                    route: "/specific"
                },
                {
                    label: "Hats & Caps",
                    route: "/specific"
                },
                {
                    label: "Gloves",
                    route: "/specific"
                }
            ],
            image: "{{ asset('assets/images/menu/two.png') }}"
        },
        readytowear: {
            route: "/",
            items: [{
                    label: "See All",
                    route: "/seeall"
                },
                {
                    label: "Jackets",
                    route: "/specific"
                },
                {
                    label: "Overcoats",
                    route: "/specific"
                },
                {
                    label: "Blazers",
                    route: "/specific"
                }
            ],
            image: "{{ asset('assets/images/menu/three.png') }}"
        },
        discoveryarns: {
            route: "/",
            items: [{
                    label: "Pashmina",
                    route: "/yarn"
                },
                {
                    label: "Linen",
                    route: "/specific"
                },
                {
                    label: "Yak",
                    route: "/specific"
                },
                {
                    label: "Wool",
                    route: "/specific"
                }
            ],
            image: "{{ asset('assets/images/menu/four.png') }}"
        }
    };
</script>

<script>
    function updateMenuTop() {
        if (!menuOverlay) return;

        if (newheader && !newheader.classList.contains("hidden")) {
            menuOverlay.style.top = "7rem";
        } else {
            menuOverlay.style.top = "12rem";
        }
    }
</script>


<script>
    document.addEventListener("click", function(e) {

        if (e.target.closest(".openMenu")) {

            if (window.innerWidth < 768) {
                mobileMenu.classList.remove("hidden");
                menuOverlay.classList.add("hidden");
            } else {
                updateMenuTop()
                menuOverlay.classList.remove("hidden");
                mobileMenu.classList.add("hidden");
            }
            document.body.classList.add("no-scroll");
        }
        if (e.target.closest("#closeMenu")) {
            menuOverlay.classList.add("hidden");
            document.body.classList.remove("no-scroll");
        }

    });
</script>




<script>
    const mobileMenu = document.getElementById("mobileMenu");
    const closeMobileMenu = document.getElementById("closeMobileMenu");
    const mobileLevel1 = document.getElementById("mobileLevel1");
    const mobileLevel2 = document.getElementById("mobileLevel2");
    const mobileSubMenu = document.getElementById("mobileSubMenu");
    const mobileBack = document.getElementById("mobileBack");

    // openMenu.addEventListener("click", () => {
    //     if (window.innerWidth < 768) {
    //         mobileMenu.classList.remove("hidden");
    //     }
    // });

    // openMenu.addEventListener("click", () => {
    //     if (window.innerWidth < 768) {
    //         mobileMenu.classList.remove("hidden");
    //         menuOverlay.classList.add("hidden");
    //     } else {
    //         menuOverlay.classList.remove("hidden");
    //         mobileMenu.classList.add("hidden");
    //     }
    // });


    closeMobileMenu.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
        resetMobileMenu();
    });

    function resetMobileMenu() {
        mobileLevel1.classList.remove("hidden");
        mobileLevel2.classList.add("hidden");
        mobileSubMenu.innerHTML = "";
    }

    document.querySelectorAll("#mobileLevel1 .menu-item").forEach(item => {
        item.addEventListener("click", (e) => {
            e.preventDefault();

            const key = item.dataset.menu;
            const data = MENU_DATA[key];

            if (!data) return;

            if (!data.items || data.items.length === 0) {
                mobileMenu.classList.add("hidden");
                resetMobileMenu();
                return;
            }
            mobileLevel1.classList.add("hidden");
            mobileLevel2.classList.remove("hidden");

            mobileSubMenu.innerHTML = "";

            data.items.forEach(sub => {
                const a = document.createElement("a");

                a.href = sub.route;
                a.textContent = sub.label;

                if (sub.label.toLowerCase() === "see all") {
                    a.className = "block text-sm underline underline-offset-4";
                } else {
                    a.className = "block text-sm opacity-60 hover:opacity-100";
                }

                mobileSubMenu.appendChild(a);
            });

        });
    });

    mobileBack.addEventListener("click", () => {
        resetMobileMenu();
    });
</script>

<script>
    const openMenu = document.getElementById("openMenu");
    const closeMenu = document.getElementById("closeMenu");
    const menuOverlay = document.getElementById("menuOverlay");
    const subMenu = document.getElementById("subMenu");
    const menuImage = document.getElementById("menuImage");
    const menuItems = document.querySelectorAll(".menu-item");
    const subMenuWrapper = document.getElementById("subMenuWrapper");
    const menuDivider = document.getElementById("menuDivider");

    // openMenu.addEventListener("click", () => {
    //     menuOverlay.classList.remove("hidden");

    // });

    closeMenu.addEventListener("click", () => {
        menuOverlay.classList.add("hidden");
    });


    function loadMenu(key) {
        if (!MENU_DATA[key]) return;

        const {
            items,
            image
        } = MENU_DATA[key];

        if (!items || items.length === 0) {
            subMenuWrapper.classList.add("hidden");
            menuDivider.classList.remove("w-2");
            menuDivider.classList.add("w-5");
        } else {
            subMenuWrapper.classList.remove("hidden");

            menuDivider.classList.remove("w-5");
            menuDivider.classList.add("w-2");

            subMenu.innerHTML = "";

            items.forEach(item => {
                const a = document.createElement("a");
                a.href = item.route;
                a.textContent = item.label;

                if (item.label.toLowerCase() === "see all") {
                    a.className = "block underline underline-offset-4";
                } else {
                    a.className = "block opacity-60 hover:opacity-100";
                }

                subMenu.appendChild(a);
            });

        }

        menuImage.src = image;
    }


    menuItems.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();

            const key = btn.dataset.menu;
            const data = MENU_DATA[key];

            if (!data) return;

            if (!data.items || data.items.length === 0) {
                window.location.href = data.route;
                return;
            }

            menuItems.forEach(b => b.classList.add("opacity-60"));
            btn.classList.remove("opacity-60");

            loadMenu(key);
        });
    });

    loadMenu("newarrival");
    document
        .querySelector('[data-menu="newarrival"]')
        .classList.remove("opacity-60");
</script>
