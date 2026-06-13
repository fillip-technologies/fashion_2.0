<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fashion Clothing - Admin Panel')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap"
        rel="stylesheet">

    <!-- Tailwind Custom Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#e73c7e',
                        primaryDark: '#c72a6c',
                        secondary: '#10b981',
                        secondaryDark: '#059669',
                        dark: '#1e293b',
                        darker: '#0f172a',
                        light: '#f8fafc',
                        accent: '#f59e0b',
                        slateLight: '#f1f5f9'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    boxShadow: {
                        'card': '0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.02)',
                        'sidebar': '4px 0 20px -8px rgba(0, 0, 0, 0.08)',
                        'hover': '0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 10px 10px -5px rgba(0, 0, 0, 0.02)',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.3s ease-in-out',
                        'slide-in': 'slideIn 0.2s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            },
                        },
                        slideIn: {
                            '0%': {
                                transform: 'translateX(-10px)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateX(0)',
                                opacity: '1'
                            },
                        },
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #e2e8f0;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Sidebar link active state - improved */
        .sidebar-link {
            transition: all 0.2s ease;
            position: relative;
            border-left: 3px solid transparent;
        }

        .sidebar-link.active {
            background: linear-gradient(90deg, rgba(231, 60, 126, 0.08) 0%, rgba(231, 60, 126, 0.02) 100%);
            border-left-color: #e73c7e;
            color: #e73c7e;
        }

        .sidebar-link.active i {
            color: #e73c7e;
        }

        .sidebar-link:hover:not(.active) {
            background-color: #f8fafc;
            border-left-color: #cbd5e1;
        }

        /* Stat card hover effect */
        .stat-card {
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.12);
        }

        /* Login card styling */
        .login-card {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Smooth transitions for all interactive elements */
        button,
        a,
        .stat-card,
        .sidebar-link {
            transition: all 0.2s ease;
        }

        /* Gradient text utility */
        .gradient-text {
            background: linear-gradient(135deg, #e73c7e 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Top navigation hover effect */
        .nav-icon-btn {
            transition: all 0.2s ease;
        }

        .nav-icon-btn:hover {
            background-color: #f1f5f9;
            transform: translateY(-1px);
        }

        /* Main content fade in */
        main {
            animation: fadeIn 0.3s ease-out;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-slate-50 font-sans antialiased">

    <!-- Admin Panel Wrapper -->
    <div id="admin-panel" class="min-h-screen flex">

        <!-- Sidebar - Enhanced Design -->
        <aside
            class="w-72 bg-white shadow-sidebar h-screen fixed top-0 left-0 flex flex-col z-30 border-r border-gray-100">
            <!-- Logo Area - Refined -->
            <div class="px-6 py-6 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <div
                            class="bg-gradient-to-br from-primary to-primaryDark w-10 h-10 rounded-xl flex items-center justify-center shadow-md">
                            <span class="text-white font-bold text-lg">FC</span>
                        </div>
                        <div class="absolute -top-1 -right-1 w-3 h-3 bg-accent rounded-full ring-2 ring-white"></div>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold tracking-tight text-dark">Fashion<span
                                class="text-primary">Clothing</span></h2>
                        <p class="text-[11px] font-medium text-gray-400 uppercase tracking-wider">Administration</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                @include('admin.include.sidebar')
            </nav>

            <!-- User Profile Section - Modernized -->
            <div class="p-4 border-t border-gray-100 bg-gradient-to-r from-white to-slate-50/50">
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <div
                            class="w-11 h-11 rounded-full bg-gradient-to-br from-primary/20 to-primary/10 flex items-center justify-center ring-2 ring-white shadow-sm">
                            <i class="fas fa-user-circle text-2xl text-primary"></i>
                        </div>
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full ring-2 ring-white">
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-dark truncate">
                            {{ Auth::guard('admin')->user()->firstname ?? 'N/A' }}</p>
                        <p class="text-xs text-gray-500 truncate">
                            {{ Auth::guard('admin')->check() ? Auth::guard('admin')->user()->email : 'admin@fashion.com' }}
                        </p>
                    </div>
                    <a href="{{ route('admin.logout') }}"
                        class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-400 hover:text-primary hover:bg-primary/10 transition-all duration-200"
                        title="Sign out">
                        <i class="fas fa-sign-out-alt text-sm"></i>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col ml-72">
            <!-- Enhanced Top Navigation -->
            <header class="bg-white/80 backdrop-blur-sm sticky top-0 z-20 border-b border-gray-100 shadow-sm">
                <div class="px-8 py-4 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <!-- Mobile Menu Toggle Button (Hidden on desktop but kept for responsive) -->
                        <button id="sidebar-toggle"
                            class="lg:hidden w-9 h-9 rounded-lg flex items-center justify-center text-gray-500 hover:bg-gray-100 hover:text-primary transition-all">
                            <i class="fas fa-bars text-lg"></i>
                        </button>

                        <!-- Page Title / Breadcrumb Area -->
                        <div class="hidden sm:block">
                            <h1 class="text-xl font-semibold text-dark">@yield('page-title', 'Dashboard')</h1>
                            <p class="text-xs text-gray-500 mt-0.5">Welcome back, Admin</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <!-- Search Button -->
                        <button
                            class="nav-icon-btn w-9 h-9 rounded-lg flex items-center justify-center text-gray-500 hover:text-primary bg-gray-50 hover:bg-primary/10">
                            <i class="fas fa-search text-sm"></i>
                        </button>

                        <!-- Notifications -->
                        <div class="relative">
                            <button
                                class="nav-icon-btn w-9 h-9 rounded-lg flex items-center justify-center text-gray-500 hover:text-primary bg-gray-50 hover:bg-primary/10">
                                <i class="far fa-bell text-sm"></i>
                            </button>
                            <span
                                class="absolute -top-1 -right-1 w-4 h-4 bg-accent rounded-full text-[10px] font-bold text-white flex items-center justify-center shadow-sm">3</span>
                        </div>

                        <!-- Settings -->
                        <button
                            class="nav-icon-btn w-9 h-9 rounded-lg flex items-center justify-center text-gray-500 hover:text-primary bg-gray-50 hover:bg-primary/10">
                            <i class="fas fa-cog text-sm"></i>
                        </button>

                        <!-- Divider -->
                        <div class="h-8 w-px bg-gray-200 mx-1"></div>

                        <!-- Admin Quick Menu -->
                        <div class="relative group">
                            <button
                                class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-gray-50 transition-all">
                                <div
                                    class="w-7 h-7 rounded-full bg-gradient-to-r from-primary to-primaryDark flex items-center justify-center shadow-sm">
                                    <i class="fas fa-user text-white text-xs"></i>
                                </div>
                                <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                            </button>

                            <!-- Dropdown -->
                            <div
                                class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">


                                <a href=""
                                    class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                                    <i class="fas fa-cog mr-2"></i>
                                    Settings
                                </a>

                                <div class="border-t"></div>

                                <form action="{{ route('admin.logout') }}" method="GET">

                                    <button type="submit"
                                        class="w-full text-left flex items-center px-4 py-3 text-sm text-red-600 hover:bg-red-50">
                                        <i class="fas fa-sign-out-alt mr-2"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <main class="flex-1 p-8 overflow-auto bg-gradient-to-b from-slate-50 to-white">
                <div class="animate-fade-in">
                    @yield('content')
                </div>
            </main>


            <footer class="border-t border-gray-100 bg-white/50 py-3 px-8 text-center text-xs text-gray-400">
                &copy; {{ date('Y') }} Fashion Clothing Admin Panel. All rights reserved.
            </footer>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const toggleBtn = document.getElementById('sidebar-toggle');
            const sidebar = document.querySelector('.w-72');

            if (toggleBtn && sidebar) {
                toggleBtn.addEventListener('click', function() {
                    const isHidden = sidebar.classList.contains('hidden');

                    if (isHidden) {
                        sidebar.classList.remove('hidden');
                        sidebar.classList.remove('slide-out');
                        sidebar.classList.add('slide-in', 'fixed', 'inset-y-0', 'left-0', 'z-50');
                        // Add overlay for mobile
                        let overlay = document.querySelector('.mobile-overlay');
                        if (!overlay) {
                            overlay = document.createElement('div');
                            overlay.className = 'mobile-overlay fixed inset-0 bg-black/50 z-40 lg:hidden';
                            document.body.appendChild(overlay);
                            overlay.addEventListener('click', function() {
                                sidebar.classList.add('hidden');
                                overlay.remove();
                            });
                        }
                    } else {
                        sidebar.classList.add('hidden');
                        const overlay = document.querySelector('.mobile-overlay');
                        if (overlay) overlay.remove();
                    }
                });
            }


            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            const currentUrl = window.location.pathname;

            sidebarLinks.forEach(link => {

                const href = link.getAttribute('href');
                if (href && href !== '#' && currentUrl.includes(href)) {
                    link.classList.add('active');
                }


                link.addEventListener('click', function(e) {
                    sidebarLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');


                    localStorage.setItem('activeSidebarLink', this.getAttribute('href') || '');
                });
            });


            const savedActiveLink = localStorage.getItem('activeSidebarLink');
            if (savedActiveLink) {
                sidebarLinks.forEach(link => {
                    if (link.getAttribute('href') === savedActiveLink) {
                        link.classList.add('active');
                    }
                });
            }


            const iconButtons = document.querySelectorAll('.nav-icon-btn, .sidebar-link');
            iconButtons.forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.2s ease';
                });
            });


            document.querySelectorAll('a[href^="' + window.location.origin + '"]').forEach(link => {
                link.addEventListener('click', function(e) {

                    if (this.id === 'sidebar-toggle' || this.href.includes('logout')) return;

                    const targetUrl = this.href;
                    const mainContent = document.querySelector('main');
                    if (mainContent) {
                        e.preventDefault();
                        mainContent.style.opacity = '0';
                        mainContent.style.transform = 'translateY(10px)';
                        setTimeout(() => {
                            window.location.href = targetUrl;
                        }, 150);
                    }
                });
            });

            // Reset animation when main content changes (for livewire or turbo)
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'childList') {
                        const main = document.querySelector('main');
                        if (main) {
                            main.style.opacity = '0';
                            main.style.animation = 'none';
                            setTimeout(() => {
                                main.style.opacity = '1';
                                main.style.animation = 'fadeIn 0.3s ease-out';
                            }, 10);
                        }
                    }
                });
            });

            const mainElement = document.querySelector('main');
            if (mainElement) {
                observer.observe(mainElement, {
                    childList: true,
                    subtree: true
                });
            }
        });

        // Handle window resize - remove mobile overlay if needed
        window.addEventListener('resize', function() {
            const overlay = document.querySelector('.mobile-overlay');
            const sidebar = document.querySelector('.w-72');
            if (window.innerWidth >= 1024 && overlay) {
                overlay.remove();
                if (sidebar) {
                    sidebar.classList.remove('hidden', 'fixed', 'inset-y-0', 'left-0', 'z-50', 'slide-in');
                    sidebar.classList.add('lg:block');
                }
            }
            if (window.innerWidth < 1024 && sidebar && !sidebar.classList.contains('hidden')) {
                // On mobile, ensure sidebar has proper positioning
                sidebar.classList.add('fixed', 'inset-y-0', 'left-0', 'z-50');
            }
        });
    </script>

    @include('admin.include.datatable')
    @stack('scripts')
</body>

</html>
