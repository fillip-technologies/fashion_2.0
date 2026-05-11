<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fashion')</title>

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

        .no-scroll {
            overflow: hidden;
        }
    </style>

    <link rel="icon" href="{{ asset('images/cm-removebg-preview.png') }}" type="image/x-icon">
</head>

<body class="m-0 p-0 overflow-x-hidden scroll-smooth bg-[#f2f2f2]">

    {{-- NEW LANDING HEADER --}}
    @include('partials.landingpageheader')

    <main>
        @yield('content')
    </main>

       {{-- NEW LANDING HEADER --}}
    @include('partials.landingpagefooter')


    {{-- Optional Shared Components --}}
    @include('partials.searchbar')

    {{-- Scroll To Top --}}
    <div id="scrollToTop" class="fixed bottom-6 right-6 z-50 hidden">
        <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="bg-tertiary text-primary px-4 py-2 shadow hover:bg-secondary transition">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    <script>
        const scrollToTopBtn = document.getElementById("scrollToTop");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
                scrollToTopBtn.classList.remove("hidden");
            } else {
                scrollToTopBtn.classList.add("hidden");
            }
        });
    </script>

</body>

</html>