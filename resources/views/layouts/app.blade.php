<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3E3E40',
                        secondary: '#97A0A1',
                        tertiary: "#D2C9D5",
                        background: "#F2F2F2",
                        border: "#727070"
                    },

                    backgroundImage: {
                        'dash-dot': 'repeating-linear-gradient(to right, rgba(0,0,0,0.4) 0 8px, transparent 8px 12px, rgba(0,0,0,0.4) 12px 20px, transparent 20px 24px, rgba(0,0,0,0.4) 24px 26px, transparent 20px 30px)',

                        'dash-dot-white': 'repeating-linear-gradient(to right, rgba(255,255,255,0.4) 0 8px, transparent 8px 12px, rgba(255,255,255,0.4) 12px 20px, transparent 20px 24px, rgba(255,255,255,0.4) 24px 26px, transparent 26px 30px)',

                        'dash-dot-h': 'repeating-linear-gradient(to right, rgba(0,0,0,0.4) 0 8px, transparent 8px 12px, rgba(0,0,0,0.4) 12px 20px, transparent 20px 24px, rgba(0,0,0,0.4) 24px 26px, transparent 26px 30px)',

                        'dash-dot-v': 'repeating-linear-gradient(to bottom, rgba(0,0,0,0.4) 0 8px, transparent 8px 12px, rgba(0,0,0,0.4) 12px 20px, transparent 20px 24px, rgba(0,0,0,0.4) 24px 26px, transparent 26px 30px)',

                        'dash-dot-v-white': 'repeating-linear-gradient(to bottom, rgba(255,255,255,0.4) 0 8px, transparent 8px 12px, rgba(255,255,255,0.4) 12px 20px, transparent 20px 24px, rgba(255,255,255,0.4) 24px 26px, transparent 26px 30px)',
                    }

                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Libre Franklin', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        .cookie-reset {
            font-family: system-ui, -apple-system, BlinkMacSystemFont,
                "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        .no-scroll {
            /* overflow: hidden;
            height: 100vh; */
        }
    </style>

    <link rel="icon" href="{{ asset('images/cm-removebg-preview.png') }}" type="image/x-icon">
</head>

<body class="m-0 p-0 overflow-x-hidden scroll-smooth">


    @if (!request()->is(['createaccount', 'accountconfirmed', 'bag', 'checkout', 'order-completed', 'location']))
        @include('partials.header')
    @endif

    <main>
        @yield('content')
    </main>

    @if (!request()->is(['location', 'accountconfirmed', 'order-completed']))
        @include('partials.footer')
    @endif


    @include('partials.searchbar')

    @include('partials.cookies')

    @include('shared.filter')

    @include('shared.sizeguide')

    @include('shared.login')

    @include('shared.newsletter')

    @include('shared.cartnotification')

    @include('shared.changeshippingaddress')

    @include('shared.changebillingaddress')

    @include('shared.editbillingaddress')

    @include('shared.editshippingaddress')

    @include('shared.chooseshippingaddress')

    @include('shared.choosebillingaddress')




    <!-- WhatsApp Button -->
    <div id="whatsappBtn" class="fixed bottom-6 left-6 z-50 hidden">
        <a href="https://wa.me/919999999999" target="_blank"
            class="text-green-600 text-4xl hover:text-6xl transition-all">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Scroll To Top Button -->
    <div id="scrollToTop" class="fixed bottom-6 right-6 z-50 hidden">
        <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="bg-tertiary text-primary px-4 py-2  shadow hover:bg-secondary hover:text-primary transition">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>


    {{-- For scroll to top --}}
    <script>
        const scrollToTopBtn = document.getElementById("scrollToTop");
        const whatsappBtn = document.getElementById("whatsappBtn");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
                scrollToTopBtn.classList.remove("hidden");
                whatsappBtn.classList.remove("hidden");
            } else {
                scrollToTopBtn.classList.add("hidden");
                whatsappBtn.classList.add("hidden");
            }
        });
    </script>

    {{-- For search bar --}}
    {{-- <script>
        const openSearchBtn = document.getElementById("openSearchBtn");
        const searchOverlay = document.getElementById("searchOverlay");

        if (openSearchBtn) {
            openSearchBtn.addEventListener("click", () => {
                searchOverlay.classList.remove("hidden");
            });
        }
    </script> --}}

    <script>
        document.addEventListener("click", function(e) {
            if (e.target.closest(".openSearch")) {
                e.preventDefault();

                const searchOverlay = document.getElementById("searchOverlay");
                if (searchOverlay) {
                    searchOverlay.classList.remove("hidden");
                    document.body.classList.add("overflow-hidden");
                }
            }
        });
    </script>


    {{-- For cookies display --}}
    <script>
        const cookieConsent = document.getElementById("cookieConsent");
        window.addEventListener("load", () => {
            setTimeout(() => {

                const cookieDecision = localStorage.getItem("cookieConsent");
                if (!cookieDecision) {
                    cookieConsent.classList.remove("hidden");
                }

            }, 2000);
        });

        function acceptCookies() {
            localStorage.setItem("cookieConsent", "accepted");
            closeCookiePopup();
        }

        function rejectCookies() {
            closeCookiePopup();
        }

        function customiseCookies() {
            localStorage.setItem("cookieConsent", "customised");
            closeCookiePopup();
        }

        function closeCookiePopup() {
            cookieConsent.classList.add("hidden");
        }
    </script>

    {{-- Script for the filter drawer --}}
    <script>
        function toggleDrawer() {
            const drawer = document.querySelector('#drawer');
            if (drawer) {
                drawer.classList.toggle('translate-x-full');
                drawer.classList.toggle('translate-x-0');
            }
        }
    </script>


    {{-- Script for the other drawer --}}
    <script>
        function toggleMasterDrawer(id) {
            const drawer = document.getElementById(id);
            if (!drawer) return;

            drawer.classList.toggle('translate-x-full');
            drawer.classList.toggle('translate-x-0');
        }
    </script>

    <script>
        window.appliedFilters = {};
    </script>

</body>

</html>
