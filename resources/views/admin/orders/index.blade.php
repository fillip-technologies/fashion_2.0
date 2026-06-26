@extends('admin.include.layout')
@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between mb-6 flex-wrap gap-4">
        <div>
            <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-3">
                <i class="fas fa-shopping-bag text-primary"></i>
                Order Management
                <span class="text-sm font-medium text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                    Total: {{ $orders->count() }}
                </span>
            </h2>
            <p class="text-sm text-gray-500 mt-1">Manage and track all customer orders</p>
        </div>
        <div class="flex items-center gap-3">
            <button onclick="window.location.reload()"
                    class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-all duration-200 text-sm font-medium">
                <i class="fas fa-sync-alt"></i>
                Refresh
            </button>
            <button onclick="window.print()"
                    class="inline-flex items-center gap-2 px-4 py-2 bg-primary hover:bg-primary/90 text-white rounded-lg transition-all duration-200 text-sm font-medium shadow-sm shadow-primary/20">
                <i class="fas fa-print"></i>
                Print
            </button>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 mb-6">
        <form action="{{ route('admin.orders.index') }}" method="GET" class="flex flex-wrap items-center gap-4">
            <!-- Search -->
            <div class="flex-1 min-w-[200px]">
                <div class="relative">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           placeholder="Search by order #, customer, email..."
                           class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-lg focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all duration-200 text-sm">
                </div>
            </div>

            <!-- Status Filter -->
            <div class="min-w-[150px]">
                <select name="status"
                        class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all duration-200 text-sm appearance-none bg-white">
                    <option value="">All Status</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Processing</option>
                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>

            <!-- Date Range -->
            <div class="min-w-[150px]">
                <input type="date"
                       name="date_from"
                       value="{{ request('date_from') }}"
                       placeholder="From Date"
                       class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all duration-200 text-sm">
            </div>
            <div class="min-w-[150px]">
                <input type="date"
                       name="date_to"
                       value="{{ request('date_to') }}"
                       placeholder="To Date"
                       class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all duration-200 text-sm">
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-2">
                <button type="submit"
                        class="px-6 py-2.5 bg-primary hover:bg-primary/90 text-white rounded-lg transition-all duration-200 text-sm font-medium shadow-sm shadow-primary/20">
                    <i class="fas fa-filter mr-2"></i>Apply Filters
                </button>
                <a href="{{ route('admin.orders.index') }}"
                   class="px-6 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-all duration-200 text-sm font-medium">
                    <i class="fas fa-undo mr-2"></i>Reset
                </a>
            </div>
        </form>
    </div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wider">Total Orders</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">{{ $totalOrders ?? 0 }}</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                    <i class="fas fa-shopping-bag text-primary text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wider">Pending</p>
                    <p class="text-2xl font-bold text-yellow-600 mt-1">{{ $pendingOrders ?? 0 }}</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-yellow-50 flex items-center justify-center">
                    <i class="fas fa-clock text-yellow-600 text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wider">Processing</p>
                    <p class="text-2xl font-bold text-blue-600 mt-1">{{ $processingOrders ?? 0 }}</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center">
                    <i class="fas fa-spinner text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wider">Completed</p>
                    <p class="text-2xl font-bold text-green-600 mt-1">{{ $completedOrders ?? 0 }}</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Orders Table -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-50/80 border-b border-gray-100">
                        <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-4">
                            <div class="flex items-center gap-1">
                                Order #
                                <i class="fas fa-sort text-gray-300 text-[10px]"></i>
                            </div>
                        </th>
                        <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-4">Customer</th>
                        <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-4">Date</th>
                        <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-4">Total</th>
                        <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-4">Status</th>
                        <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-4">Items</th>
                        <th class="text-center text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($orders as $order)
                    <tr class="hover:bg-gray-50/50 transition-colors duration-150 group">
                        <!-- Order Number -->
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center">
                                    <i class="fas fa-hashtag text-primary text-xs"></i>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">{{ $order->order_number }}</span>
                            </div>
                        </td>

                        <!-- Customer -->
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-gradient-to-br from-primary/20 to-primary/10 flex items-center justify-center">
                                    <span class="text-xs font-bold text-primary">
                                        {{ substr($order->customer_name, 0, 2) }}
                                    </span>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">{{ $order->customer_name }}</p>
                                    <p class="text-xs text-gray-500">{{ $order->customer_email }}</p>
                                </div>
                            </div>
                        </td>

                        <!-- Date -->
                        <td class="px-6 py-4">
                            <div>
                                <p class="text-sm text-gray-700">{{ $order->created_at->format('M d, Y') }}</p>
                                <p class="text-xs text-gray-400">{{ $order->created_at->format('h:i A') }}</p>
                            </div>
                        </td>

                        <!-- Total -->
                        <td class="px-6 py-4">
                            <div>
                                <p class="text-sm font-bold text-primary">${{ number_format($order->total_amount, 2) }}</p>
                                <p class="text-xs text-gray-400">Subtotal: ${{ number_format($order->subtotal, 2) }}</p>
                            </div>
                        </td>

                        <!-- Status -->
                        <td class="px-6 py-4">
                            @if($order->status == 'pending')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    <i class="fas fa-clock text-[10px]"></i>
                                    Pending
                                </span>
                            @elseif($order->status == 'processing')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    <i class="fas fa-spinner fa-spin text-[10px]"></i>
                                    Processing
                                </span>
                            @elseif($order->status == 'completed')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle text-[10px]"></i>
                                    Completed
                                </span>
                            @elseif($order->status == 'cancelled')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    <i class="fas fa-times-circle text-[10px]"></i>
                                    Cancelled
                                </span>
                            @endif
                        </td>

                        <!-- Items Count -->
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                                <i class="fas fa-box text-[10px]"></i>
                                {{ $order->items_count ?? 0 }}
                            </span>
                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-1">
                                <a href=""
                                   class="p-2 rounded-lg text-primary hover:bg-primary/10 transition-all duration-200 group-hover:scale-110"
                                   title="View Details">
                                    <i class="fas fa-eye text-sm"></i>
                                </a>
                                <a href=""
                                   class="p-2 rounded-lg text-blue-500 hover:bg-blue-50 transition-all duration-200 group-hover:scale-110"
                                   title="Edit Order">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <button onclick="deleteOrder({{ $order->id }})"
                                        class="p-2 rounded-lg text-red-500 hover:bg-red-50 transition-all duration-200 group-hover:scale-110"
                                        title="Delete Order">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mb-4">
                                    <i class="fas fa-shopping-bag text-2xl text-gray-400"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-600 mb-1">No Orders Found</h3>
                                <p class="text-sm text-gray-500">No orders match your search criteria</p>
                                <a href="{{ route('admin.orders.index') }}" class="mt-4 text-primary hover:underline text-sm">
                                    <i class="fas fa-arrow-left mr-1"></i> Clear filters
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>


    </div>

    <!-- Quick Stats -->

</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 transform transition-all">
        <div class="p-6">
            <div class="flex items-center justify-center mb-4">
                <div class="w-16 h-16 rounded-full bg-red-50 flex items-center justify-center">
                    <i class="fas fa-exclamation-triangle text-red-500 text-2xl"></i>
                </div>
            </div>
            <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Delete Order</h3>
            <p class="text-sm text-gray-500 text-center mb-6">Are you sure you want to delete this order? This action cannot be undone.</p>
            <form id="deleteForm" action="" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex gap-3">
                    <button type="button" onclick="closeDeleteModal()"
                            class="flex-1 px-4 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-all duration-200 text-sm font-medium">
                        Cancel
                    </button>
                    <button type="submit"
                            class="flex-1 px-4 py-2.5 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-all duration-200 text-sm font-medium shadow-sm shadow-red-500/20">
                        <i class="fas fa-trash mr-2"></i>Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function deleteOrder(id) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    // Close modal on backdrop click
    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
        }
    });
</script>
@endpush

@push('styles')
<style>
    /* Custom Pagination Styling */
    .pagination {
        display: flex;
        gap: 4px;
        align-items: center;
        flex-wrap: wrap;
    }
    .pagination .page-item {
        list-style: none;
    }
    .pagination .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 36px;
        height: 36px;
        padding: 0 12px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 500;
        color: #6b7280;
        background: transparent;
        transition: all 0.2s ease;
        border: 1px solid transparent;
    }
    .pagination .page-link:hover {
        background: #f3f4f6;
        color: #1f2937;
    }
    .pagination .active .page-link {
        background: #4f46e5;
        color: white;
        border-color: #4f46e5;
        box-shadow: 0 2px 8px rgba(79, 70, 229, 0.3);
    }
    .pagination .disabled .page-link {
        opacity: 0.5;
        cursor: not-allowed;
    }

    /* Scrollable table */
    .overflow-x-auto::-webkit-scrollbar {
        height: 6px;
    }
    .overflow-x-auto::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 9999px;
    }
    .overflow-x-auto::-webkit-scrollbar-thumb {
        background: #d1d5db;
        border-radius: 9999px;
    }
    .overflow-x-auto::-webkit-scrollbar-thumb:hover {
        background: #9ca3af;
    }
</style>
@endpush
@endsection
