<nav class="flex-1 overflow-y-auto py-4">
    <!-- NAVIGATION TITLE -->
    <div class="px-6 mb-4">
        <p class="text-[11px] font-semibold uppercase tracking-wider text-gray-400">
            Main Navigation
        </p>
    </div>

    <!-- DASHBOARD -->
    <a href="{{ url('/admin/dashboard') }}"
        class="sidebar-link group flex items-center gap-3 px-6 py-2.5 mx-2 rounded-lg transition-all duration-200 {{ request()->is('admin/dashboard') ? 'active bg-primary/5 text-primary' : 'text-gray-600 hover:bg-gray-50 hover:text-primary' }}">
        <i
            class="fas fa-chart-line w-5 text-lg transition-colors {{ request()->is('admin/dashboard') ? 'text-primary' : 'text-gray-400 group-hover:text-primary' }}"></i>
        <span class="text-sm font-medium">Dashboard</span>
    </a>

    <details class="group mx-2  mt-3" {{ request()->is('admin/product*') ? 'open' : '' }}>
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-lg cursor-pointer transition-all duration-200 text-gray-600 hover:bg-gray-50 hover:text-primary list-none">
            <i class="fas fa-box w-5 text-lg text-gray-400 group-hover:text-primary transition-colors"></i>
            <span class="text-sm font-medium flex-1">Product Management</span>
            <i
                class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200 group-open:rotate-180"></i>
        </summary>
        <div class="pl-11 mt-1 flex flex-col space-y-1">

            <a href="{{ route('admin.product.index') }}"
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->is('admin/products/create') ? 'text-primary font-medium bg-primary/5' : '' }}">
                Add Product
            </a>

            <a href="{{ route('admin.product.price') }}"
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->is('admin/products/index*') ? 'text-primary font-medium bg-primary/5' : '' }}">
                Add Price
            </a>
            <a href="{{ route('admin.product.color') }}"
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->is('admin/products/index*') ? 'text-primary font-medium bg-primary/5' : '' }}">
                Add Colors
            </a>

            <a href="{{ route('admin.product.category') }}"
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->is('admin/products/index*') ? 'text-primary font-medium bg-primary/5' : '' }}">
                Add Category
            </a>
            <a href="{{ route('admin.product.image') }}"
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->is('admin/products/create') ? 'text-primary font-medium bg-primary/5' : '' }}">
                Add Product Image
            </a>
            <a href="{{ route('admin.product.variant') }}"
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->is('admin/products/create') ? 'text-primary font-medium bg-primary/5' : '' }}">
                Add Product Variants
            </a>
        </div>
    </details>


    {{-- <!-- CATEGORY -->
    <details class="group mx-2 mt-1">
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-lg cursor-pointer transition-all duration-200 text-gray-600 hover:bg-gray-50 hover:text-primary list-none">
            <i class="fas fa-layer-group w-5 text-lg text-gray-400 group-hover:text-primary transition-colors"></i>
            <span class="text-sm font-medium flex-1">Categories</span>
            <i
                class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200 group-open:rotate-180"></i>
        </summary>
        <div class="pl-11 mt-1 flex flex-col space-y-1">
            <a href=""
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200">
                Add Category
            </a>
            <a href=""
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200">
                All Categories
            </a>
        </div>
    </details>

    <!-- SUBCATEGORY -->
    <details class="group mx-2 mt-1">
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-lg cursor-pointer transition-all duration-200 text-gray-600 hover:bg-gray-50 hover:text-primary list-none">
            <i class="fas fa-sitemap w-5 text-lg text-gray-400 group-hover:text-primary transition-colors"></i>
            <span class="text-sm font-medium flex-1">Sub Categories</span>
            <i
                class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200 group-open:rotate-180"></i>
        </summary>
        <div class="pl-11 mt-1 flex flex-col space-y-1">
            <a href=""
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200">
                Add SubCategory
            </a>
            <a href=""
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200">
                All SubCategory
            </a>
        </div>
    </details>

    <!-- COUPONS -->
    <details class="group mx-2 mt-1">
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-lg cursor-pointer transition-all duration-200 text-gray-600 hover:bg-gray-50 hover:text-primary list-none">
            <i class="fas fa-ticket-alt w-5 text-lg text-gray-400 group-hover:text-primary transition-colors"></i>
            <span class="text-sm font-medium flex-1">Coupons</span>
            <i
                class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200 group-open:rotate-180"></i>
        </summary>
        <div class="pl-11 mt-1 flex flex-col space-y-1">
            <a href=""
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200">
                Add Coupon
            </a>
            <a href=""
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200">
                All Coupons
            </a>
        </div>
    </details>

    <!-- SHIPPING -->
    <details class="group mx-2 mt-1">
        <summary
            class="flex items-center gap-3 px-4 py-2.5 rounded-lg cursor-pointer transition-all duration-200 text-gray-600 hover:bg-gray-50 hover:text-primary list-none">
            <i class="fas fa-truck w-5 text-lg text-gray-400 group-hover:text-primary transition-colors"></i>
            <span class="text-sm font-medium flex-1">Shipping</span>
            <i
                class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-200 group-open:rotate-180"></i>
        </summary>
        <div class="pl-11 mt-1 flex flex-col space-y-1">
            <a href=""
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200">
                Add Shipping
            </a>
            <a href=""
                class="block py-2 px-3 text-sm text-gray-500 rounded-md hover:text-primary hover:bg-primary/5 transition-all duration-200">
                All Shipping
            </a>
        </div>
    </details> --}}


</nav>

<style>
    /* Smooth details/summary animation */
    details summary::-webkit-details-marker {
        display: none;
    }

    details summary {
        list-style: none;
    }

    details summary .fa-chevron-down {
        transition: transform 0.2s ease;
    }

    details[open] summary .fa-chevron-down {
        transform: rotate(180deg);
    }

    /* Subtle hover scale effect for icons */
    .sidebar-link:hover i,
    details summary:hover i {
        transform: scale(1.05);
    }

    .sidebar-link i,
    details summary i {
        transition: transform 0.2s ease, color 0.2s ease;
    }

    /* Active link styling */
    .sidebar-link.active {
        background: linear-gradient(90deg, rgba(231, 60, 126, 0.08) 0%, rgba(231, 60, 126, 0.02) 100%);
        border-left: 3px solid #e73c7e;
    }

    .sidebar-link.active i {
        color: #e73c7e;
    }

    /* Scrollbar for nav */
    nav {
        scrollbar-width: thin;
        scrollbar-color: #cbd5e1 #f1f5f9;
    }

    nav::-webkit-scrollbar {
        width: 4px;
    }

    nav::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 10px;
    }

    nav::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }
</style>
