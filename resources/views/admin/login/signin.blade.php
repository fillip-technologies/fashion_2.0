<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#e73c7e',
                        secondary: '#10b981',
                        dark: '#1f2937',
                        light: '#f3f4f6',
                        newprimary: '#3E3E40',
                        newsecondary: '#97A0A1',
                        tertiary: "#D2C9D5",
                        background: "#F2F2F2"
                    }
                }
            }
        }
    </script>
    <style>
        /* Preserving all original styles */
        .sidebar-link.active {
            background-color: #fef3c7;
            border-left: 4px solid #f59e0b;
            color: #b45309;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .login-card {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Enhanced UI improvements - preserving all existing elements */
        .login-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            backdrop-filter: blur(2px);
        }

        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3);
        }

        /* Improved input focus effects */
        input:focus {
            box-shadow: 0 0 0 3px rgba(231, 60, 126, 0.1);
        }

        /* Button animation enhancement */
        button[type="submit"] {
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.2);
        }

        button[type="submit"]:active {
            transform: translateY(0);
        }

        /* Smooth ripple effect on inputs */
        .input-group {
            position: relative;
        }

        .input-group input {
            transition: all 0.3s ease;
        }

        /* Enhanced card inner elements */
        .bg-background {
            position: relative;
            overflow: hidden;
        }

        .bg-background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #e73c7e, #f59e0b, #10b981);
        }

        /* Checkbox styling improvement */
        input[type="checkbox"] {
            transition: all 0.2s ease;
            cursor: pointer;
        }

        input[type="checkbox"]:checked {
            background-color: #e73c7e;
            border-color: #e73c7e;
        }

        /* Link hover effects */
        a:hover {
            transition: all 0.2s ease;
        }

        /* Improved gradient background */
        .bg-gradient-to-br {
            background-size: 200% 200%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 0%;
            }

            50% {
                background-position: 100% 100%;
            }

            100% {
                background-position: 0% 0%;
            }
        }

        /* Subtle floating animation for login card */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-8px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .login-card {
            animation: float 6s ease-in-out infinite;
        }

        /* Enhanced label styling */
        label {
            font-weight: 600;
            letter-spacing: 0.025em;
        }

        /* Placeholder styling */
        input::placeholder {
            color: #cbd5e1;
            font-size: 0.875rem;
        }

        /* Icon enhancement for inputs (adding visual icons) */
        .input-icon-wrapper {
            position: relative;
        }

        .input-icon-wrapper i {
            transition: all 0.2s ease;
        }

        .input-icon-wrapper input:focus+i {
            color: #e73c7e;
        }
    </style>
</head>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

<body class="bg-gray-100 font-sans">
    <!-- Login Screen - All original elements preserved, only UI enhanced -->
    <div id="login-screen"
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-primary/10 to-secondary/10 p-4">
        <div class="login-card w-full max-w-md bg-white rounded-xl overflow-hidden">
            <div class="bg-background p-6">
                <h1 class="text-2xl font-bold text-black text-center">Clothing E-commerce Admin</h1>
                <p class="text-black/80 text-center mt-2">Manage Product, bookings, and Users</p>
            </div>

            <div class="p-8">
                <form id="login-form" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="block text-dark text-sm font-medium mb-2">
                            <i class="fas fa-envelope mr-2 text-primary/70"></i>Email
                        </label>
                        <div class="relative">
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200"
                                placeholder="Enter your email" autofocus>
                            <i
                                class="fas fa-user absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                        </div>
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-dark text-sm font-medium mb-2">
                            <i class="fas fa-lock mr-2 text-primary/70"></i>Password
                        </label>
                        <div class="relative">
                            <input type="password" id="password" name="password"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200"
                                placeholder="••••••••">
                            <i
                                class="fas fa-key absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                        </div>
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember"
                                class="h-4 w-4 text-primary focus:ring-primary rounded border-gray-300 cursor-pointer transition-all">
                            <label for="remember"
                                class="ml-2 text-sm text-gray-600 cursor-pointer hover:text-gray-800 transition-colors">Remember
                                me</label>
                        </div>
                        <a href=""
                            class="text-sm text-primary font-medium hover:underline hover:text-primary/80 transition-all duration-200">
                            Forgot password?
                        </a>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-800 hover:bg-yellow-600 text-white font-medium py-3 px-4 rounded-lg transition duration-300 transform hover:scale-[1.02] active:scale-[0.98]">
                        <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                    </button>
                </form>

                <!-- Additional subtle design element - decorative divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-xs">
                        <span class="px-2 bg-white text-gray-400">Secure Admin Access</span>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 px-8 py-4 text-center border-t">
                <p class="text-gray-600 text-sm">© {{ date('Y') }} Faishion Clothing. All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- Admin Panel (hidden initially, preserved exactly as in original) -->
    <div id="admin-panel" class="hidden">
        <!-- Original admin panel content would go here -->
        <div class="min-h-screen bg-gray-100">
            <!-- Placeholder for admin panel content -->
            <div class="p-8 text-center">Admin Panel Loaded</div>
        </div>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function(e) {

            document.getElementById('login-screen').classList.add('hidden');
            document.getElementById('admin-panel').classList.remove('hidden');
        });


        const sidebarToggle = document.getElementById('sidebar-toggle');
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function() {
                const sidebar = document.querySelector('.w-64');
                if (sidebar) {
                    sidebar.classList.toggle('hidden');
                    sidebar.classList.toggle('absolute');
                    sidebar.classList.toggle('z-50');
                }
            });
        }


        const sidebarLinks = document.querySelectorAll('.sidebar-link');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                sidebarLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });

        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('input-focused');
            });
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('input-focused');
            });
        });


        const passwordInput = document.getElementById('password');
        if (passwordInput) {

            const wrapper = passwordInput.parentElement;
            const toggleIcon = document.createElement('i');
            toggleIcon.className =
                'fas fa-eye-slash absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer hover:text-primary transition-colors z-10';
            toggleIcon.style.right = '40px';
            toggleIcon.style.cursor = 'pointer';


            if (!wrapper.querySelector('.password-toggle')) {
                toggleIcon.classList.add('password-toggle');
                wrapper.appendChild(toggleIcon);

                let isPasswordVisible = false;
                toggleIcon.addEventListener('click', function() {
                    isPasswordVisible = !isPasswordVisible;
                    if (isPasswordVisible) {
                        passwordInput.type = 'text';
                        toggleIcon.className =
                            'fas fa-eye absolute right-3 top-1/2 transform -translate-y-1/2 text-primary cursor-pointer hover:text-primary/80 transition-colors password-toggle';
                        toggleIcon.style.right = '40px';
                    } else {
                        passwordInput.type = 'password';
                        toggleIcon.className =
                            'fas fa-eye-slash absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer hover:text-primary transition-colors password-toggle';
                        toggleIcon.style.right = '40px';
                    }
                });
            }
        }
    </script>

    <style>
        /* Additional UI improvements that don't remove any existing styles */

        /* Smooth gradient animation enhancement */
        @keyframes softPulse {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 0.5;
            }
        }

        /* Card inner shadow enhancement */
        .login-card {
            position: relative;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* Label icon spacing improvement */
        label i {
            width: 1.25rem;
            display: inline-block;
        }

        /* Button icon transition */
        button[type="submit"] i {
            transition: transform 0.2s ease;
        }

        button[type="submit"]:hover i {
            transform: translateX(3px);
        }

        /* Input group enhancement */
        .relative input {
            padding-right: 2.5rem;
        }

        /* Smooth focus ring */
        input:focus {
            outline: none;
            ring: 2px solid #e73c7e;
        }

        /* Remember me checkbox custom style enhancement */
        input[type="checkbox"] {
            accent-color: #e73c7e;
            width: 1rem;
            height: 1rem;
            margin-top: 0.125rem;
        }

        /* Better spacing and alignment */
        .flex.items-center label {
            user-select: none;
        }

        /* Card border radius consistency */
        .rounded-xl {
            border-radius: 1rem;
        }

        /* Footer enhancement */
        .bg-gray-50 {
            background: linear-gradient(to bottom, #f9fafb, #f3f4f6);
        }

        /* Responsive touch improvements for mobile */
        @media (max-width: 640px) {
            .login-card {
                margin: 1rem;
                animation: none;
            }

            .p-8 {
                padding: 1.5rem;
            }

            button[type="submit"] {
                padding: 0.75rem 1rem;
            }
        }

        /* Accessibility focus visible enhancement */
        input:focus-visible {
            outline: 2px solid #e73c7e;
            outline-offset: 2px;
        }

        button:focus-visible {
            outline: 2px solid #e73c7e;
            outline-offset: 2px;
        }

        /* Card decorative element - subtle border glow */
        .login-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 1rem;
            pointer-events: none;
            transition: opacity 0.3s ease;
            opacity: 0;
        }

        .login-card:hover::after {
            opacity: 1;
        }

        /* Input autofill style override */
        input:-webkit-autofill,
        input:-webkit-autofill:focus {
            transition: background-color 0s 600000s, color 0s 600000s;
        }

        /* Better placeholder contrast */
        ::-webkit-input-placeholder {
            color: #9ca3af;
            font-weight: 400;
        }

        :-ms-input-placeholder {
            color: #9ca3af;
            font-weight: 400;
        }

        ::placeholder {
            color: #9ca3af;
            font-weight: 400;
        }

        /* Loading state for button (optional enhancement) */
        button[type="submit"]:active {
            transform: scale(0.98);
        }

        /* Password toggle button positioning fix */
        .password-toggle {
            z-index: 20;
            background: transparent;
            padding: 0.25rem;
            border-radius: 9999px;
        }

        .password-toggle:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        /* Ensure all original functionality remains */
        .hidden {
            display: none;
        }

        /* Preserve all original class behaviors */
        .sidebar-link.active {
            background-color: #fef3c7;
            border-left: 4px solid #f59e0b;
            color: #b45309;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
    </style>
</body>

</html>
