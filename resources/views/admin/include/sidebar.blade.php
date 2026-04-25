<nav class="mt-6 flex-1 overflow-y-auto">

    <!-- NAVIGATION TITLE -->
    <div class="px-4 mb-4">
        <p class="text-xs uppercase text-blue-800 font-medium tracking-wider">
            Main Navigation
        </p>
    </div>

    <!-- DASHBOARD -->
    <a href="{{ url('/admin/dashboard') }}"
       class="sidebar-link flex items-center px-6 py-3 hover:bg-yellow-50 transition {{ request()->is('admin/dashboard') ? 'bg-yellow-100 font-semibold' : '' }}">
        <i class="fas fa-chart-line mr-3 text-blue-800"></i>
        Dashboard
    </a>

    <!-- USERS -->
    <a href="{{ url('/list/users') }}"
       class="sidebar-link flex items-center px-6 py-3 hover:bg-yellow-50 transition {{ request()->is('list/users*') ? 'bg-yellow-100 font-semibold' : '' }}">
        <i class="fas fa-users mr-3 text-blue-800"></i>
        Users
    </a>

    <!-- ORDERS -->
    <a href=""
       class="sidebar-link flex items-center px-6 py-3 hover:bg-yellow-50 transition">
        <i class="fas fa-shopping-cart mr-3 text-blue-800"></i>
        Orders
    </a>

    <!-- PRODUCTS -->
    <details class="group px-6 py-1" {{ request()->is('admin/product*') ? 'open' : '' }}>
        <summary class="flex items-center cursor-pointer hover:bg-yellow-50 px-4 py-2 rounded">
            <i class="fas fa-box mr-3 text-blue-800"></i>
            Products
        </summary>
        <div class="pl-8 mt-1 flex flex-col space-y-1">
            <a href="{{ route('admin.products.create') }}"
               class="hover:text-yellow-600 {{ request()->is('admin/products/create') ? 'text-yellow-600 font-semibold' : '' }}">
                Add Product
            </a>
            <a href="{{ route('admin.products.index') }}"
               class="hover:text-yellow-600 {{ request()->is('admin/products/index*') ? 'text-yellow-600 font-semibold' : '' }}">
                All Products
            </a>
        </div>
    </details>

    <!-- CATEGORY -->
    <details class="group px-6 py-1">
        <summary class="flex items-center cursor-pointer hover:bg-yellow-50 px-4 py-2 rounded">
            <i class="fas fa-layer-group mr-3 text-blue-800"></i>
            Categories
        </summary>
        <div class="pl-8 mt-1 flex flex-col space-y-1">
            <a href="" class="hover:text-yellow-600">
                Add Category
            </a>
            <a href="" class="hover:text-yellow-600">
                All Categories
            </a>
        </div>
    </details>

    <!-- SUBCATEGORY -->
    <details class="group px-6 py-1">
        <summary class="flex items-center cursor-pointer hover:bg-yellow-50 px-4 py-2 rounded">
            <i class="fas fa-sitemap mr-3 text-blue-800"></i>
            Sub Categories
        </summary>
        <div class="pl-8 mt-1 flex flex-col space-y-1">
            <a href="" class="hover:text-yellow-600">
                Add SubCategory
            </a>
            <a href="" class="hover:text-yellow-600">
                All SubCategory
            </a>
        </div>
    </details>

    <!-- COUPONS -->
    <details class="group px-6 py-1">
        <summary class="flex items-center cursor-pointer hover:bg-yellow-50 px-4 py-2 rounded">
            <i class="fas fa-ticket-alt mr-3 text-blue-800"></i>
            Coupons
        </summary>
        <div class="pl-8 mt-1 flex flex-col space-y-1">
            <a href="" class="hover:text-yellow-600">
                Add Coupon
            </a>
            <a href="" class="hover:text-yellow-600">
                All Coupons
            </a>
        </div>
    </details>

    <!-- SHIPPING -->
    <details class="group px-6 py-1">
        <summary class="flex items-center cursor-pointer hover:bg-yellow-50 px-4 py-2 rounded">
            <i class="fas fa-truck mr-3 text-blue-800"></i>
            Shipping
        </summary>
        <div class="pl-8 mt-1 flex flex-col space-y-1">
            <a href="" class="hover:text-yellow-600">
                Add Shipping
            </a>
            <a href="" class="hover:text-yellow-600">
                All Shipping
            </a>
        </div>
    </details>

    <!-- CUSTOM ORDERS -->
    <a href=""
       class="sidebar-link flex items-center px-6 py-3 hover:bg-yellow-50 transition">
        <i class="fas fa-paint-brush mr-3 text-blue-800"></i>
        Customization Orders
    </a>

</nav>
