@extends('admin.include.layout')

@section('content')

<div class="p-6">

    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Create Product</h1>
        <a href="{{ route('admin.products.index') }}"
           class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
            ← Back
        </a>
    </div>

    <form action="{{ route('admin.products.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        @csrf

        {{-- LEFT SECTION --}}
        <div class="lg:col-span-2 space-y-6">


{{-- PRODUCT INFO --}}
<div class="bg-white rounded-xl shadow-sm border">
    <div class="px-6 py-4 border-b bg-gray-50 rounded-t-xl">
        <h2 class="font-semibold text-gray-700">Product Information</h2>
    </div>

    <div class="p-6 space-y-5">

        {{-- Category --}}
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">
                Category
            </label>
            <select name="category_id"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
                <option value="">Select Category</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Product Name --}}
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">
                Product Name
            </label>
            <input type="text"
                   name="name"
                   placeholder="Enter product name"
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
        </div>

        {{-- Brand / Fabric / Fit Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Brand
                </label>
                <input type="text"
                       name="brand"
                       placeholder="Brand name"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Fabric
                </label>
                <input type="text"
                       name="fabric"
                       placeholder="Fabric type"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Fit
                </label>
                <input type="text"
                       name="fit"
                       placeholder="Slim / Regular / Oversized"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
            </div>

        </div>

        {{-- Short Description --}}
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">
                Short Description
            </label>
            <textarea name="short_description"
                      rows="2"
                      placeholder="Small summary shown on listing page"
                      class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200"></textarea>
        </div>

        {{-- Full Description --}}
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">
                Full Description
            </label>
            <textarea name="description"
                      rows="4"
                      placeholder="Detailed product description"
                      class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200"></textarea>
        </div>

        {{-- SEO Section --}}
        <div class="border-t pt-4">
            <h3 class="text-sm font-semibold text-gray-700 mb-3">
                SEO Settings
            </h3>

            <div class="space-y-3">

                <div>
                    <label class="block text-sm text-gray-600 mb-1">
                        Meta Title
                    </label>
                    <input type="text"
                           name="meta_title"
                           placeholder="SEO title"
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1">
                        Meta Description
                    </label>
                    <textarea name="meta_description"
                              rows="2"
                              placeholder="SEO description"
                              class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200"></textarea>
                </div>

            </div>
        </div>

        {{-- Status + Featured --}}
        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Status
                </label>
                <select name="status"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="flex items-center mt-6">
                <input type="checkbox"
                       name="is_featured"
                       value="1"
                       class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label class="ml-2 text-sm text-gray-600">
                    Featured Product
                </label>
            </div>

        </div>

    </div>
</div>



            {{-- VARIANTS --}}
            <div class="bg-white rounded-xl shadow-sm border">
                <div class="px-6 py-4 border-b bg-blue-50 rounded-t-xl flex justify-between items-center">
                    <h2 class="font-semibold text-blue-700">Product Variants</h2>

                    <button type="button"
                            onclick="addVariant()"
                            class="px-3 py-1 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">
                        + Add Variant
                    </button>
                </div>

                <div class="p-6 space-y-4">

                    <div id="variant-wrapper">

                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 border rounded-lg p-4 bg-gray-50">

                            <input type="text"
                                   name="variants[0][size]"
                                   placeholder="Size"
                                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

                            <input type="text"
                                   name="variants[0][color]"
                                   placeholder="Color"
                                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

                            <input type="text"
                                   name="variants[0][sku]"
                                   placeholder="SKU"
                                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

                            <input type="number"
                                   step="0.01"
                                   name="variants[0][price]"
                                   placeholder="Price"
                                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

                            <input type="number"
                                   step="0.01"
                                   name="variants[0][discount_price]"
                                   placeholder="Discount"
                                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

                            <input type="number"
                                   name="variants[0][stock]"
                                   placeholder="Stock"
                                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

                        </div>

                    </div>

                </div>
            </div>

        </div>

        {{-- RIGHT SECTION --}}
        <div class="space-y-6">

            {{-- IMAGES --}}
            <div class="bg-white rounded-xl shadow-sm border">
                <div class="px-6 py-4 border-b bg-green-50 rounded-t-xl">
                    <h2 class="font-semibold text-green-700">Product Images</h2>
                </div>

                <div class="p-6">
                    <input type="file"
                           name="images[]"
                           multiple
                           class="w-full text-sm text-gray-600
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-lg file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-green-100 file:text-green-700
                                  hover:file:bg-green-200">
                </div>
            </div>

            {{-- SAVE BUTTON --}}
            <div class="bg-white rounded-xl shadow-sm border p-6">
                <button class="w-full bg-gray-900 text-white py-3 rounded-lg hover:bg-black transition font-medium">
                    Save Product
                </button>
            </div>

        </div>

    </form>

</div>

@endsection


@push('scripts')
<script>

let variantIndex = 1;

function addVariant() {

    let html = `
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 border rounded-lg p-4 bg-gray-50">
            <input type="text"
                   name="variants[${variantIndex}][size]"
                   placeholder="Size"
                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

            <input type="text"
                   name="variants[${variantIndex}][color]"
                   placeholder="Color"
                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

            <input type="text"
                   name="variants[${variantIndex}][sku]"
                   placeholder="SKU"
                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

            <input type="number"
                   step="0.01"
                   name="variants[${variantIndex}][price]"
                   placeholder="Price"
                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

            <input type="number"
                   step="0.01"
                   name="variants[${variantIndex}][discount_price]"
                   placeholder="Discount"
                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

            <input type="number"
                   name="variants[${variantIndex}][stock]"
                   placeholder="Stock"
                   class="border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
        </div>
    `;

    document.getElementById('variant-wrapper')
            .insertAdjacentHTML('beforeend', html);

    variantIndex++;
}

</script>
@endpush
