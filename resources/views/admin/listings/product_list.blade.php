@extends('admin.include.layout')

@section('content')
<div class="p-6">
    <div class="bg-white rounded-xl shadow-md overflow-hidden">

        <!-- Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b">
            <h2 class="text-xl font-semibold text-gray-800">
                Products List
            </h2>

            <a href="{{ route('admin.product.create') }}"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition">
                <i class="fas fa-plus mr-2"></i>
                Add New Product
            </a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mx-6 mt-4 p-4 rounded-lg bg-green-100 border border-green-300 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Price</th>
                        <th class="px-4 py-3">Sale Price</th>
                        <th class="px-4 py-3">SKU</th>
                        <th class="px-4 py-3">Stock</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>

                 <tbody class="divide-y divide-gray-200">
                    @forelse($productList as $key => $product)
                        <tr class="hover:bg-gray-50">

                            <td class="px-4 py-3">
                                {{  $key +1 }}
                            </td>

                            <td class="px-4 py-3">
                                <img
                                    src="{{ $product->thumbnail ? asset($product->thumbnail) : asset('images/no-image.png') }}"
                                    alt="{{ $product->name }}"
                                    class="w-14 h-14 object-cover rounded-lg border">
                            </td>

                            <td class="px-4 py-3">
                                <div class="font-semibold text-gray-800">
                                    {{ $product->name }}
                                </div>
                                <div class="text-xs text-gray-500">
                                    {{ $product->slug }}
                                </div>
                            </td>

                            <td class="px-4 py-3">
                                <div>
                                    {{ $product->category->name ?? 'N/A' }}
                                </div>

                                @if($product->subCategory)
                                    <div class="text-xs text-gray-500">
                                        {{ $product->subCategory->name }}
                                    </div>
                                @endif
                            </td>

                            <td class="px-4 py-3 font-medium">
                                ₹{{ number_format($product->price, 2) }}
                            </td>

                            <td class="px-4 py-3">
                                @if($product->sale_price)
                                    ₹{{ number_format($product->sale_price, 2) }}
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>

                            <td class="px-4 py-3">
                                <span class="bg-gray-100 px-2 py-1 rounded text-xs font-mono">
                                    {{ $product->sku }}
                                </span>
                            </td>

                            <td class="px-4 py-3">
                                @if($product->stock > 10)
                                    <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full">
                                        {{ $product->stock }}
                                    </span>
                                @elseif($product->stock > 0)
                                    <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-700 rounded-full">
                                        {{ $product->stock }}
                                    </span>
                                @else
                                    <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-700 rounded-full">
                                        Out of Stock
                                    </span>
                                @endif
                            </td>

                            <td class="px-4 py-3">
                                @if($product->status == 'active')
                                    <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full">
                                        Active
                                    </span>
                                @else
                                    <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-700 rounded-full">
                                        Inactive
                                    </span>
                                @endif
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex items-center justify-center gap-2">

                                    <a href="{{ route('admin.edit.product',$product->id) }}"
                                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('admin.delete.product',$product->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="w-9 h-9 flex items-center justify-center rounded-lg bg-red-100 text-red-600 hover:bg-red-200">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="px-4 py-10 text-center">
                                <div class="text-gray-500">
                                    No products found.
                                    <a href="" class="text-indigo-600 hover:underline">
                                        Create your first product
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        {{-- <div class="px-6 py-4 border-t">
             {{ $products->links() }}
        </div> --}}

    </div>
</div>
@endsection
