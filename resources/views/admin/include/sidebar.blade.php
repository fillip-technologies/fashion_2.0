<nav class="flex-1 overflow-y-auto py-6">
    <!-- NAVIGATION TITLE -->
    <div class="px-6 mb-6">
        <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400/80">
            Main Navigation
        </p>
        <div class="h-px bg-gradient-to-r from-gray-200 to-transparent mt-2"></div>
    </div>

    <!-- DASHBOARD -->
    <a href="{{ url('/admin/dashboard') }}"
        class="sidebar-link group relative flex items-center gap-3 px-6 py-2.5 mx-3 rounded-xl transition-all duration-200 {{ request()->is('admin/dashboard') ? 'active bg-gradient-to-r from-primary/10 to-transparent text-primary shadow-sm' : 'text-gray-500 hover:bg-gray-50/80 hover:text-primary' }}">
        <i
            class="fas fa-chart-line w-5 text-lg transition-all duration-200 {{ request()->is('admin/dashboard') ? 'text-primary scale-110' : 'text-gray-400 group-hover:text-primary group-hover:scale-110' }}"></i>
        <span class="text-sm font-medium">Dashboard</span>
        @if(request()->is('admin/dashboard'))
            <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-6 bg-primary rounded-r-full"></div>
        @endif
    </a>

    <!-- PRODUCT MANAGEMENT -->
    <details class="group mx-3 mt-3" {{ request()->is('admin/product*') ? 'open' : '' }}>
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-xl cursor-pointer transition-all duration-200 text-gray-500 hover:bg-gray-50/80 hover:text-primary list-none">
            <i class="fas fa-box w-5 text-lg text-gray-400 group-hover:text-primary transition-all duration-200"></i>
            <span class="text-sm font-medium flex-1">Product</span>
            <i
                class="fas fa-chevron-down text-xs text-gray-400 transition-all duration-300 group-open:rotate-180 group-open:text-primary"></i>
        </summary>

        <!-- Submenu Items with better visual hierarchy -->
        <div class="pl-11 mt-2 flex flex-col space-y-1.5 border-l-2 border-gray-100 ml-5">
            <a href="{{ route('admin.product.index') }}"
                class="relative block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('admin.product.index') ? 'text-primary font-medium bg-primary/5' : '' }}">
                <span class="flex items-center gap-2">
                    <i class="fas fa-plus-circle text-xs opacity-60"></i>
                    Add Product
                </span>
            </a>

            <a href="{{ route('admin.product.price') }}"
                class="relative block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('admin.product.price') ? 'text-primary font-medium bg-primary/5' : '' }}">
                <span class="flex items-center gap-2">
                    <i class="fas fa-tag text-xs opacity-60"></i>
                    Add Price
                </span>
            </a>

            <a href="{{ route('admin.product.color') }}"
                class="relative block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('admin.product.color') ? 'text-primary font-medium bg-primary/5' : '' }}">
                <span class="flex items-center gap-2">
                    <i class="fas fa-palette text-xs opacity-60"></i>
                    Add Colors
                </span>
            </a>
            <a href="{{ route('admin.index.size') }}"
                class="relative block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('admin.index.size') ? 'text-primary font-medium bg-primary/5' : '' }}">
                <span class="flex items-center gap-2">
                     <i class="fas fa-ruler-combined text-xs opacity-60"></i>
                    Add Sizes
                </span>
            </a>

            <a href="{{ route('admin.product.category') }}"
                class="relative block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('admin.product.category') ? 'text-primary font-medium bg-primary/5' : '' }}">
                <span class="flex items-center gap-2">
                    <i class="fas fa-folder-tree text-xs opacity-60"></i>
                    Add Category
                </span>
            </a>

            <a href="{{ route('admin.product.image') }}"
                class="relative block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('admin.product.image') ? 'text-primary font-medium bg-primary/5' : '' }}">
                <span class="flex items-center gap-2">
                    <i class="fas fa-image text-xs opacity-60"></i>
                    Add Images
                </span>
            </a>

            <a href="{{ route('admin.product.variant') }}"
                class="relative block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('admin.product.variant') ? 'text-primary font-medium bg-primary/5' : '' }}">
                <span class="flex items-center gap-2">
                    <i class="fas fa-copy text-xs opacity-60"></i>
                    Add Variants
                </span>
            </a>
        </div>
    </details>

    <!-- OPTIONAL: Add a divider before commented sections -->
    <div class="px-6 my-6">
        <div class="h-px bg-gradient-to-r from-gray-200 to-transparent"></div>
    </div>

    <!-- UNCOMMENT WHEN NEEDED
    <div class="px-6 mb-4">
        <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400/80">
            Additional Features
        </p>
    </div>

    <details class="group mx-3 mt-1">
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-xl cursor-pointer transition-all duration-200 text-gray-500 hover:bg-gray-50/80 hover:text-primary list-none">
            <i class="fas fa-layer-group w-5 text-lg text-gray-400 group-hover:text-primary transition-colors"></i>
            <span class="text-sm font-medium flex-1">Categories</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200 group-open:rotate-180"></i>
        </summary>
        <div class="pl-11 mt-2 flex flex-col space-y-1.5 border-l-2 border-gray-100 ml-5">
            <a href="#" class="block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200">
                Add Category
            </a>
            <a href="#" class="block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200">
                All Categories
            </a>
        </div>
    </details>

    <details class="group mx-3 mt-1">
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-xl cursor-pointer transition-all duration-200 text-gray-500 hover:bg-gray-50/80 hover:text-primary list-none">
            <i class="fas fa-sitemap w-5 text-lg text-gray-400 group-hover:text-primary transition-colors"></i>
            <span class="text-sm font-medium flex-1">Sub Categories</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200 group-open:rotate-180"></i>
        </summary>
        <div class="pl-11 mt-2 flex flex-col space-y-1.5 border-l-2 border-gray-100 ml-5">
            <a href="#" class="block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200">
                Add SubCategory
            </a>
            <a href="#" class="block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200">
                All SubCategory
            </a>
        </div>
    </details>

    <details class="group mx-3 mt-1">
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-xl cursor-pointer transition-all duration-200 text-gray-500 hover:bg-gray-50/80 hover:text-primary list-none">
            <i class="fas fa-ticket-alt w-5 text-lg text-gray-400 group-hover:text-primary transition-colors"></i>
            <span class="text-sm font-medium flex-1">Coupons</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200 group-open:rotate-180"></i>
        </summary>
        <div class="pl-11 mt-2 flex flex-col space-y-1.5 border-l-2 border-gray-100 ml-5">
            <a href="#" class="block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200">
                Add Coupon
            </a>
            <a href="#" class="block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200">
                All Coupons
            </a>
        </div>
    </details>

    <details class="group mx-3 mt-1">
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-xl cursor-pointer transition-all duration-200 text-gray-500 hover:bg-gray-50/80 hover:text-primary list-none">
            <i class="fas fa-truck w-5 text-lg text-gray-400 group-hover:text-primary transition-colors"></i>
            <span class="text-sm font-medium flex-1">Shipping</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200 group-open:rotate-180"></i>
        </summary>
        <div class="pl-11 mt-2 flex flex-col space-y-1.5 border-l-2 border-gray-100 ml-5">
            <a href="#" class="block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200">
                Add Shipping
            </a>
            <a href="#" class="block py-2 px-3 text-sm text-gray-500 rounded-lg hover:text-primary hover:bg-primary/5 transition-all duration-200">
                All Shipping
            </a>
        </div>
    </details>
    -->
</nav>

