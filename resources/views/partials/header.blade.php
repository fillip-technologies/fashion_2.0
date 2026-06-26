<div class="bg-background fixed top-0 inset-x-0 z-50 header-visible" id="oldheader">
    <header class="w-full md:h-[12.1875rem]">
        <div class="mx-auto px-4 sm:px-14">

            <div class="hidden sm:flex items-center justify-between pt-7">
                <a href="/location" class="text-[0.75rem]" style="font-weight: 200">
                    Location <span class="underline">(India / EN / ₹)</span>
                </a>
                <a href="/contact" class="text-[0.75rem]" style="font-weight: 200">
                    Contact Us
                </a>
            </div>

            <div class="relative flex items-center justify-between h-16 sm:h-40 pb-2 sm:pb-4">
                <div class="flex items-center gap-4 sm:gap-20">
                    <div class="flex items-center gap-2 cursor-pointer openMenu">
                        <img src="{{ asset('assets/SVG/Menu BLK.svg') }}" alt="Menu"
                            class="w-10 sm:w-[36px] h-auto" />
                        {{-- <img src="{{ asset('assets/icons/search.png') }}" alt="Search"
                            class="w-[15px] h-[15px] md:hidden ml-2" /> --}}
                        <span class="hidden sm:block text-[0.8125rem]" style="font-weight: 300">
                            Menu
                        </span>
                    </div>

                    <div class="hidden sm:flex items-center gap-3 cursor-pointer openSearch">
                        <img src="{{ asset('assets/SVG/Search black.svg') }}" alt="Search"
                            class="w-[0.9375rem] h-[0.9375rem]" />

                        <div class="flex flex-col">
                            <span class="text-[0.8125rem] text-black leading-none px-2" style="font-weight: 300">
                                Search
                            </span>
                            <span class="h-[0.5px] w-36 bg-black/60 mt-1"></span>
                        </div>
                    </div>

                </div>
                <div class="absolute left-1/2 -translate-x-1/2 mt-2 md:-mt-9">
                    <a href="/" class="w-20 h-12 bg-[#4f6fc6] flex items-center justify-center sm:hidden">
                        <span class="text-white font-semibold text-xs">
                            LOGO 2
                        </span>
                    </a>

                    <a href="/" class="hidden sm:flex sm:w-32 sm:h-36 bg-purple-600 items-center justify-center">
                        <span class="text-white font-semibold text-base">
                            LOGO 1
                        </span>
                    </a>
                </div>
                <div class="flex items-center gap-3 sm:gap-9">

                    @if (UserLogin())
                        <a href="{{ url('user/wishlist') }}">
                            <img src="{{ asset('assets/SVG/Wishlist black.svg') }}" alt="Wishlist"
                                class="hidden sm:block w-6 sm:w-7 h-auto">
                        </a>
                    @else
                        <a href="javascript:void(0);" onclick="toggleMasterDrawer('drawerlogin')">
                            <img src="{{ asset('assets/SVG/Wishlist black.svg') }}" alt="Wishlist"
                                class="hidden sm:block w-6 sm:w-7 h-auto">
                        </a>
                    @endif

                    @if (UserLogin())
                        <a href="{{ route('user.profile') }}">
                            <img src="{{ asset('assets/SVG/Profile black.svg') }}" alt="User"
                                class="w-5 sm:w-5 h-auto cursor-pointer" />
                        </a>
                    @else
                        <img src="{{ asset('assets/SVG/Profile black.svg') }}" alt="User"
                            class="w-5 sm:w-5 h-auto cursor-pointer" onclick="toggleMasterDrawer('drawerlogin')" />
                    @endif

                    @if (UserLogin())
                        <a href="{{ route('bag') }}">
                            <img src="{{ asset('assets/SVG/Bag black.svg') }}" alt="Cart"
                                class="hidden md:block w-6 sm:w-7 h-auto" />
                        </a>
                    @else
                        <img src="{{ asset('assets/SVG/Bag black.svg') }}" alt="Cart"
                            class="hidden md:block w-6 sm:w-7 h-auto cursor-pointer"
                            onclick="toggleMasterDrawer('drawerlogin')" />
                    @endif
                </div>
            </div>
        </div>
    </header>
</div>

<div class="bg-secondary fixed top-0 inset-x-0 z-50 header-hidden" id="newheader">
    <header class="w-full">
        <div class="mx-auto px-4 sm:px-14">

            <div class="relative flex items-center justify-between h-14 md:h-[6.9375rem]">
                <div class="flex items-center gap-4 sm:gap-20">
                    <div class="flex items-center gap-2 cursor-pointer openMenu">
                        <img src="{{ asset('assets/SVG/Menu WH.svg') }}" alt="Menu"
                            class="w-10 sm:w-[36px] h-auto" />
                        <span class="hidden sm:block text-[0.8125rem] text-white" style="font-weight: 300">
                            Menu
                        </span>
                    </div>

                    <div class="hidden sm:flex items-center gap-3 cursor-pointer openSearch">
                        <img src="{{ asset('assets/SVG/Search white.svg') }}" alt="Search"
                            class="w-[15px] h-[15px]" />
                        <div class="flex flex-col">
                            <span class="text-[0.8125rem] text-white leading-none px-2" style="font-weight: 300">
                                Search
                            </span>
                            <span class="h-[0.5px] w-36 bg-white/60 mt-1"></span>
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

                <div class="flex items-center gap-3 sm:gap-9">

                    @unless (request()->is(
                            'accountoverview',
                            'profile',
                            'wishlist',
                            'orders',
                            'addressbook',
                            'orderhistory',
                            'viewdetails',
                            'shippingaddress',
                            'billingaddress'))
                        <img src="{{ asset('assets/SVG/Wishlist white.svg') }}"
                            class="hidden sm:block w-6 sm:w-7 h-auto" />
                    @endunless

                    @unless (request()->is(
                            'accountoverview',
                            'profile',
                            'wishlist',
                            'orders',
                            'addressbook',
                            'orderhistory',
                            'viewdetails',
                            'shippingaddress',
                            'billingaddress'))
                        <img src="{{ asset('assets/SVG/Profile white.svg') }}" class="w-5 md:w-5 cursor-pointer"
                            onclick="toggleMasterDrawer('drawerlogin')" />
                    @endunless

                    <img src="{{ asset('assets/SVG/Bag white.svg') }}"
                        class="hidden md:block w-6 md:w-6 cursor-pointer" />

                </div>
            </div>
        </div>
    </header>
</div>
<div id="headerSpacer" class="w-full transition-[height] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]"></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const oldheader = document.getElementById("oldheader");
        const newheader = document.getElementById("newheader");
        const headerSpacer = document.getElementById("headerSpacer");

        const path = window.location.pathname;

        const isAccountPage =
            path.includes("accountoverview") ||
            path.includes("profile") ||
            path.includes("wishlist") ||
            path.includes("orders") ||
            path.includes("orderhistory") ||
            path.includes("viewdetails") ||
            path.includes("addressbook") ||
            path.includes("shippingaddress") ||
            path.includes("billingaddress");

        const isSeeAllPage = path.includes("specific") || path.includes("seeall") || path.includes(
            "newcollection") || path.includes("yarn");


        const getHeaderHeight = (el) => el ? el.getBoundingClientRect().height : 0;
        let oldHeaderHeight = getHeaderHeight(oldheader);
        let newHeaderHeight = getHeaderHeight(newheader);
        let activeHeaderMode = null;

        const setHeaderMode = (mode) => {
            if (activeHeaderMode === mode) return;
            activeHeaderMode = mode;

            if (mode === "old") {
                oldheader.classList.remove("header-hidden");
                oldheader.classList.add("header-visible");
                newheader.classList.remove("header-visible");
                newheader.classList.add("header-hidden");
                headerSpacer.style.height = `${oldHeaderHeight}px`;
                return;
            }

            if (mode === "new") {
                oldheader.classList.remove("header-visible");
                oldheader.classList.add("header-hidden");
                newheader.classList.remove("header-hidden");
                newheader.classList.add("header-visible");
                headerSpacer.style.height = `${newHeaderHeight}px`;
                return;
            }

            oldheader.classList.remove("header-visible");
            oldheader.classList.add("header-hidden");
            newheader.classList.remove("header-visible");
            newheader.classList.add("header-hidden");
            headerSpacer.style.height = "0px";
        };

        const recalcHeights = () => {
            oldHeaderHeight = getHeaderHeight(oldheader);
            newHeaderHeight = getHeaderHeight(newheader);

            if (activeHeaderMode === "old") {
                headerSpacer.style.height = `${oldHeaderHeight}px`;
            } else if (activeHeaderMode === "new") {
                headerSpacer.style.height = `${newHeaderHeight}px`;
            }
        };

        // ACCOUNT PAGES
        if (isAccountPage) {
            setHeaderMode("new");
            window.addEventListener("resize", recalcHeights);
            return;
        }

        const updateHeadersOnScroll = () => {
            const y = window.scrollY;

            if (isSeeAllPage) {
                if (y > 20) {
                    setHeaderMode("none");
                } else {
                    setHeaderMode("old");
                }
            } else {
                if (y > 60) {
                    setHeaderMode("new");
                } else if (y < 35) {
                    setHeaderMode("old");
                } else if (!activeHeaderMode) {
                    setHeaderMode("old");
                }
            }
        };

        let ticking = false;
        window.addEventListener("scroll", () => {
            if (ticking) return;
            ticking = true;
            window.requestAnimationFrame(() => {
                updateHeadersOnScroll();
                ticking = false;
            });
        }, {
            passive: true
        });

        window.addEventListener("resize", () => {
            recalcHeights();
            updateHeadersOnScroll();
        });

        updateHeadersOnScroll();
        requestAnimationFrame(() => {
            recalcHeights();
            if (!activeHeaderMode) {
                setHeaderMode("old");
            } else if (activeHeaderMode === "old") {
                headerSpacer.style.height = `${oldHeaderHeight}px`;
            } else if (activeHeaderMode === "new") {
                headerSpacer.style.height = `${newHeaderHeight}px`;
            } else {
                headerSpacer.style.height = "0px";
            }
        });

    });
</script>

<style>
    #oldheader,
    #newheader {
        transition: opacity 360ms ease, transform 500ms cubic-bezier(0.22, 1, 0.36, 1);
        will-change: opacity, transform;
    }

    .header-visible {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .header-hidden {
        opacity: 0;
        transform: translateY(-10px);
        pointer-events: none;
    }
</style>


<!-- MENU DESKTOP -->
<div id="menuOverlay" class="fixed left-0 right-0 z-[999] bg-primary/50 backdrop-blur-sm hidden pt-10 overscroll-none">
    <div class="flex w-full h-[70vh]">
        <div class="w-[25%] bg-background relative" data-menu-keep-open>
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
                    <a href="/contact" class="block opacity-60 hover:opacity-100">Contact Us</a>
                </div>
            </nav>
            <div id="menuDivider"
                class="absolute right-0 top-10 bottom-10 w-2 bg-black/80 transition-all duration-200">
            </div>

        </div>

        <div id="subMenuWrapper" class="w-[25%] bg-background" data-menu-keep-open>
            <nav id="subMenu" class="px-14 py-16 text-[12px] tracking-wide uppercase space-y-4"></nav>
        </div>


        <div class="flex-1 bg-primary/30 backdrop-blur-sm flex items-center justify-center relative py-10">
            <img id="menuImage" class="object-contain" data-menu-keep-open />

            <button id="closeMenu" class="absolute top-6 right-10 text-[24px] font-light text-white"
                data-menu-keep-open>
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
        const menuOverlay = document.getElementById("menuOverlay");
        const oldheader = document.getElementById("oldheader");
        const newheader = document.getElementById("newheader");

        if (!menuOverlay) return;

        if (newheader && newheader.classList.contains("header-visible")) {
            menuOverlay.style.top = "7rem";
        } else if (oldheader && oldheader.classList.contains("header-visible")) {
            menuOverlay.style.top = "12rem";
        } else {
            menuOverlay.style.top = "0";
        }
    }
</script>


<script>
    function lockMenuScroll() {
        document.body.classList.add("no-scroll");
        document.body.classList.add("overflow-hidden");
    }

    function unlockMenuScroll() {
        document.body.classList.remove("no-scroll");
        document.body.classList.remove("overflow-hidden");
    }

    function closeDesktopMenuPanel() {
        if (menuOverlay) {
            menuOverlay.classList.add("hidden");
        }

        if (typeof resetDesktopMenuState === "function") {
            resetDesktopMenuState();
        }

        unlockMenuScroll();
    }

    function closeMobileMenuPanel() {
        if (mobileMenu) {
            mobileMenu.classList.add("hidden");
        }

        if (typeof resetMobileMenu === "function") {
            resetMobileMenu();
        }

        unlockMenuScroll();
    }

    document.addEventListener("click", function(e) {

        if (e.target.closest(".openMenu")) {

            if (window.innerWidth < 768) {
                mobileMenu.classList.remove("hidden");
                menuOverlay.classList.add("hidden");
            } else {
                if (typeof resetDesktopMenuState === "function") {
                    resetDesktopMenuState();
                }

                updateMenuTop()
                menuOverlay.classList.remove("hidden");
                mobileMenu.classList.add("hidden");
            }
            lockMenuScroll();

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


    closeMobileMenu.addEventListener("click", closeMobileMenuPanel);

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
                closeMobileMenuPanel();
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

    window.addEventListener("resize", () => {
        if (window.innerWidth >= 768 && !mobileMenu.classList.contains("hidden")) {
            closeMobileMenuPanel();
        }
    });
</script>

<script>
    const openMenu = document.getElementById("openMenu");
    const closeMenu = document.getElementById("closeMenu");
    const menuOverlay = document.getElementById("menuOverlay");
    const subMenu = document.getElementById("subMenu");
    const menuImage = document.getElementById("menuImage");
    const menuItems = document.querySelectorAll("#menuOverlay .menu-item");
    const subMenuWrapper = document.getElementById("subMenuWrapper");
    const menuDivider = document.getElementById("menuDivider");

    // openMenu.addEventListener("click", () => {
    //     menuOverlay.classList.remove("hidden");

    // });

    closeMenu.addEventListener("click", () => {
        closeDesktopMenuPanel();
    });

    menuOverlay.addEventListener("click", (e) => {
        if (window.innerWidth < 768 || menuOverlay.classList.contains("hidden")) {
            return;
        }

        if (e.target.closest("[data-menu-keep-open]")) {
            return;
        }

        closeDesktopMenuPanel();
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

    function resetDesktopMenuState() {
        menuItems.forEach((item) => item.classList.add("opacity-60"));

        const defaultMenuItem = document.querySelector('#menuOverlay [data-menu="newarrival"]');

        if (defaultMenuItem) {
            defaultMenuItem.classList.remove("opacity-60");
        }

        loadMenu("newarrival");
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

    resetDesktopMenuState();
</script>
