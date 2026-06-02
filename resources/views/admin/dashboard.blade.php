@extends('admin.include.layout')
@section('title', 'Dashboard')
@section('content')

    <!-- Welcome Section -->
    <div class="mb-8">
        <div class="bg-gradient-to-r from-primary/10 via-primary/5 to-transparent rounded-2xl p-6 border border-primary/20">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-dark">Welcome back, Admin! 👋</h1>
                    <p class="text-gray-500 mt-1">Here's what's happening with your store today.</p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-600 hover:bg-gray-50 hover:border-primary/30 transition-all duration-200">
                        <i class="fas fa-download mr-2 text-gray-400"></i>Export Report
                    </button>
                    <button
                        class="px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primaryDark shadow-sm hover:shadow-md transition-all duration-200">
                        <i class="fas fa-plus mr-2"></i>Add New
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards - Enhanced -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Users Card -->
        <div
            class="group stat-card bg-white rounded-2xl shadow-card p-6 border border-gray-100 hover:shadow-hover transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total Users</p>
                    <h3 class="text-3xl font-bold text-dark mt-2">{{ App\Models\User::count() }}</h3>
                </div>
                <div
                    class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500/15 to-blue-500/5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-users text-blue-600 text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center gap-2">
                <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">
                    <i class="fas fa-arrow-up text-xs"></i> 12.5%
                </span>
                <span class="text-xs text-gray-400">vs last month</span>
            </div>
        </div>

        <!-- Active Bookings Card -->
        <div
            class="group stat-card bg-white rounded-2xl shadow-card p-6 border border-gray-100 hover:shadow-hover transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Active Bookings</p>
                    <h3 class="text-3xl font-bold text-dark mt-2">47</h3>
                </div>
                <div
                    class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500/15 to-emerald-500/5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-calendar-check text-emerald-600 text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center gap-2">
                <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">
                    <i class="fas fa-arrow-up text-xs"></i> 8.3%
                </span>
                <span class="text-xs text-gray-400">vs last month</span>
            </div>
        </div>

        <!-- Total Products Card -->
        <div
            class="group stat-card bg-white rounded-2xl shadow-card p-6 border border-gray-100 hover:shadow-hover transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total Products</p>
                    <h3 class="text-3xl font-bold text-dark mt-2">{{ App\Models\Product::count() }}</h3>
                </div>
                <div
                    class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500/15 to-purple-500/5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-box text-purple-600 text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center gap-2">
                <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">
                    <i class="fas fa-arrow-up text-xs"></i> 5.2%
                </span>
                <span class="text-xs text-gray-400">vs last month</span>
            </div>
        </div>

        <!-- Total Orders Card -->
        <div
            class="group stat-card bg-white rounded-2xl shadow-card p-6 border border-gray-100 hover:shadow-hover transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total Orders</p>
                    <h3 class="text-3xl font-bold text-dark mt-2">284</h3>
                </div>
                <div
                    class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500/15 to-amber-500/5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shopping-cart text-amber-600 text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center gap-2">
                <span class="text-xs font-semibold text-amber-600 bg-amber-50 px-2 py-1 rounded-full">
                    <i class="fas fa-chart-line text-xs"></i> +3.2%
                </span>
                <span class="text-xs text-gray-400">vs last month</span>
            </div>
        </div>
    </div>

    <!-- Charts and Recent Data Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Revenue Chart -->
        <div
            class="bg-white rounded-2xl shadow-card border border-gray-100 p-6 hover:shadow-hover transition-all duration-300">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-lg font-semibold text-dark">Revenue Overview</h2>
                    <p class="text-xs text-gray-400 mt-0.5">Monthly earnings breakdown</p>
                </div>
                <div class="flex gap-2 bg-gray-50 p-1 rounded-lg">
                    <button
                        class="text-xs font-medium px-3 py-1.5 rounded-lg bg-white shadow-sm text-primary transition-all">Monthly</button>
                    <button
                        class="text-xs font-medium px-3 py-1.5 rounded-lg text-gray-500 hover:text-gray-700 transition-all">Yearly</button>
                </div>
            </div>
            <div
                class="h-64 bg-gradient-to-b from-gray-50 to-white rounded-xl flex items-center justify-center border border-gray-100">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-primary/5 flex items-center justify-center">
                        <i class="fas fa-chart-line text-2xl text-primary/60"></i>
                    </div>
                    <p class="text-gray-400 text-sm">Revenue chart visualization</p>
                    <p class="text-xs text-gray-300 mt-1">Connect your data source to see insights</p>
                </div>
            </div>
        </div>

        <!-- Recent Users Table -->
        <div
            class="bg-white rounded-2xl shadow-card border border-gray-100 p-6 hover:shadow-hover transition-all duration-300">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-lg font-semibold text-dark">Recent Users</h2>
                    <p class="text-xs text-gray-400 mt-0.5">Latest customer registrations</p>
                </div>
                <a href="{{ url('/list/users') }}"
                    class="text-primary text-sm font-medium hover:underline flex items-center gap-1">
                    View all <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left text-xs font-semibold text-gray-400 border-b border-gray-100">
                            <th class="pb-3">User</th>
                            <th class="pb-3">Email</th>
                            <th class="pb-3 hidden md:table-cell">Contact</th>
                            <th class="pb-3 text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (App\Models\User::latest()->take(5)->get() as $user)
                            <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition-colors">
                                <td class="py-3">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-br from-gray-200 to-gray-100 flex items-center justify-center">
                                            <i class="fas fa-user text-gray-500 text-sm"></i>
                                        </div>
                                        <span class="text-sm font-medium text-gray-700">{{ $user->name }}</span>
                                    </div>
                                </td>
                                <td class="py-3 text-sm text-gray-500">{{ $user->email }}</td>
                                <td class="py-3 text-sm text-gray-500 hidden md:table-cell">{{ $user->phone ?? '—' }}</td>
                                <td class="py-3 text-right">
                                    <span
                                        class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-50 text-green-600">
                                        <i class="fas fa-circle text-[6px] mr-1 text-green-500"></i> Active
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Recent Reviews Section - Enhanced -->
    <div class="bg-white rounded-2xl shadow-card border border-gray-100 p-6 hover:shadow-hover transition-all duration-300">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-lg font-semibold text-dark">Customer Reviews</h2>
                <p class="text-xs text-gray-400 mt-0.5">Latest feedback from customers</p>
            </div>
            <div class="flex items-center gap-2">
                <div class="flex text-amber-400 text-sm">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="text-sm font-medium text-gray-600">4.8</span>
                <span class="text-xs text-gray-400">(128 reviews)</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Review 1 -->
            <div
                class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-4 border border-gray-100 hover:shadow-md transition-all duration-200">
                <div class="flex items-center gap-3 mb-3">
                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-amber-500 flex items-center justify-center text-white font-bold text-sm">
                        AS
                    </div>
                    <div>
                        <h3 class="font-semibold text-dark text-sm">Amit Sharma</h3>
                        <div class="flex text-amber-400 text-xs">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">"Excellent quality products with fast shipping. Very
                    satisfied with my purchase!"</p>
                <p class="text-gray-400 text-xs mt-3 flex items-center gap-1">
                    <i class="far fa-clock"></i> 2 days ago
                </p>
            </div>

            <!-- Review 2 -->
            <div
                class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-4 border border-gray-100 hover:shadow-md transition-all duration-200">
                <div class="flex items-center gap-3 mb-3">
                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-500 flex items-center justify-center text-white font-bold text-sm">
                        PS
                    </div>
                    <div>
                        <h3 class="font-semibold text-dark text-sm">Priya Singh</h3>
                        <div class="flex text-amber-400 text-xs">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">"Great collection and reasonable prices. Customer support
                    was very helpful."</p>
                <p class="text-gray-400 text-xs mt-3 flex items-center gap-1">
                    <i class="far fa-clock"></i> 4 days ago
                </p>
            </div>

            <!-- Review 3 -->
            <div
                class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-4 border border-gray-100 hover:shadow-md transition-all duration-200">
                <div class="flex items-center gap-3 mb-3">
                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-400 to-purple-500 flex items-center justify-center text-white font-bold text-sm">
                        NP
                    </div>
                    <div>
                        <h3 class="font-semibold text-dark text-sm">Neha Patel</h3>
                        <div class="flex text-amber-400 text-xs">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">"Amazing quality and unique designs. Will definitely order
                    again from here!"</p>
                <p class="text-gray-400 text-xs mt-3 flex items-center gap-1">
                    <i class="far fa-clock"></i> 1 week ago
                </p>
            </div>
        </div>

        <div class="mt-5 pt-3 border-t border-gray-100 text-center">
            <a href="#" class="text-primary text-sm font-medium hover:underline inline-flex items-center gap-1">
                View all reviews <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>

@endsection

@push('styles')
    <style>
        .stat-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stat-card:hover {
            transform: translateY(-2px);
        }

        /* Custom gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #e73c7e 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Smooth table row hover */
        tbody tr {
            transition: background-color 0.2s ease;
        }
    </style>
@endpush
