@extends('admin.include.layout')

@section('heading', 'Products')
@section('title', 'Edit Product')

@section('content')
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-6">Edit Product</h2>

        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf


            {{-- Product Details --}}
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 font-semibold">Product Name</label>
                    <input type="text" name="name" class="w-full border p-2 rounded"
                        value="{{ old('name', $product->name) }}" required>
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-semibold">View Product Section</label>
                    <select name="show_product" class="w-full border p-2 rounded">
                        <option value="">-- Select Section --</option>
                        <option value="top" {{ old('show_product', $product->show_product) == 'top' ? 'selected' : '' }}>
                            Top Product</option>
                        <option value="new_arrival"
                            {{ old('show_product', $product->show_product) == 'new_arrival' ? 'selected' : '' }}>
                            New Arrival</option>

                    </select>

                    @error('show_product')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label class="block mb-1 font-semibold">Category</label>
                    <select name="category_id" id="categorySelect" class="w-full border p-2 rounded">
                        <option value="">-- Select Category --</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}"
                                {{ old('category_id', $product->category_id ?? '') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div id="subcategoryDiv" hidden>
                    <label class="block mb-1 font-semibold">Subcategory</label>
                    <select name="subcategory_id" id="subcategorySelect" class="w-full border p-2 rounded">
                        <option value="">-- Select Subcategory --</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 font-semibold">Price</label>
                    <input type="number" name="price" step="0.01" class="w-full border p-2 rounded"
                        value="{{ old('price', $product->price) }}" required>
                    @error('price')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Discount (%)</label>
                    <input type="number" name="discount" step="0.01" class="w-full border p-2 rounded"
                        value="{{ old('discount', $product->discount) }}">
                    @error('discount')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Stock</label>
                    <input type="number" name="stock" class="w-full border p-2 rounded"
                        value="{{ old('stock', $product->stock) }}" required>
                    @error('stock')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Main Image</label>
                    <input type="file" name="image" class="w-full border p-2 rounded">
                    @if ($product->image)
                        <img src="{{ asset($product->image) }}" class="w-24 mt-2 rounded">
                    @endif
                    @error('image')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Gallery Images</label>
                    <input type="file" name="gallery_images[]" multiple class="w-full border p-2 rounded">
                    @if ($product->gallery_images)
                        @foreach (json_decode($product->gallery_images, true) as $gImage)
                            <img src="{{ asset($gImage) }}" class="w-24 mt-2 rounded inline-block">
                        @endforeach
                    @endif
                    @error('gallery_images.*')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div>
                    <label class="block mb-1 font-semibold">Purity</label>
                    <input type="text" name="purity" class="w-full border p-2 rounded"
                        value="{{ old('purity', $product->purity) }}">
                    @error('purity')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div> --}}

                {{-- <div>
                    <label class="block mb-1 font-semibold">Color</label>
                    <input type="text" name="color" class="w-full border p-2 rounded"
                        value="{{ old('color', $product->color) }}">
                    @error('color')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div> --}}

                {{-- <div>
                    <label class="block mb-1 font-semibold">Type</label>
                    <input type="text" name="type" class="w-full border p-2 rounded"
                        value="{{ old('type', $product->type) }}">
                    @error('type')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div> --}}

                {{-- <div>
                    <label class="block mb-1 font-semibold">Min-Highlighter</label>
                    <input type="text" name="hylighter" class="w-full border p-2 rounded"
                        value="{{ old('hylighter', $product->hylighter) }}">
                    @error('hylighter')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div> --}}
                {{--
                <div>
                    <label class="block mb-1 font-semibold">Max-Highlighter</label>
                    <input type="text" name="hylighter_two" class="w-full border p-2 rounded"
                        value="{{ old('hylighter_two', $product->hylighter_two) }}">
                    @error('hylighter_two')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div> --}}

                {{-- <div class="col-span-2">
                    <label class="block mb-1 font-semibold">MRP (Text)</label>
                    <input type="text" name="mrptext" class="w-full border p-2 rounded"
                        value="{{ old('mrptext', $product->mrptext) }}">
                    @error('mrptext')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div> --}}

                {{-- <div>
                    <label class="block mb-1 font-semibold">Net-Weight</label>
                    <input type="text" name="net_weight" class="w-full border p-2 rounded"
                        value="{{ old('net_weight', $product->net_weight) }}">
                    @error('net_weight')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div> --}}

                {{-- <div>
                    <label class="block mb-1 font-semibold">Gross-Weight</label>
                    <input type="text" name="gross_weight" class="w-full border p-2 rounded"
                        value="{{ old('gross_weight', $product->gross_weight) }}">
                    @error('gross_weight')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div> --}}
            </div>

            {{-- Product Description --}}
            <div class="mt-4">
                <label class="block mb-1 font-semibold">Description</label>
                <textarea name="description" id="product_description" rows="6" class="border rounded-md p-2 w-full">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Product Variants --}}
            <div class="mt-6">
                <h3 class="text-xl font-bold mb-2">Product Variants</h3>
                <div id="variants-wrapper">
                    @foreach ($product->variants as $vIndex => $variant)
                        <div class="variant border p-4 mb-3 rounded bg-gray-50 relative">
                            <button type="button" class="remove-variant absolute top-2 right-2 text-red-600">✖</button>

                            <label class="block mb-1 font-semibold">SKU</label>
                            <input type="text" name="variants[{{ $vIndex }}][sku]"
                                class="w-full border p-2 rounded" value="{{ old("variants.$vIndex.sku", $variant->sku) }}">

                            <label class="block mt-2 mb-1 font-semibold">Price</label>
                            <input type="number" step="0.01" name="variants[{{ $vIndex }}][price]"
                                class="w-full border p-2 rounded"
                                value="{{ old("variants.$vIndex.price", $variant->price) }}">

                            <label class="block mt-2 mb-1 font-semibold">Stock</label>
                            <input type="number" name="variants[{{ $vIndex }}][stock]"
                                class="w-full border p-2 rounded"
                                value="{{ old("variants.$vIndex.stock", $variant->stock) }}">

                            <label class="block mt-2 mb-1 font-semibold">Size</label>
                            <input type="text" name="variants[{{ $vIndex }}][size]"
                                class="w-full border p-2 rounded"
                                value="{{ old("variants.$vIndex.size", $variant->size) }}">

                            <label class="block mt-2 mb-1 font-semibold">Image</label>
                            <input type="file" name="variants[{{ $vIndex }}][image]"
                                class="w-full border p-2 rounded">
                            @if ($variant->image)
                                <img src="{{ asset($variant->image) }}" class="w-16 mt-2 rounded">
                            @endif


                            <div class="mt-3 options-wrapper">
                                <h4 class="font-semibold">Options</h4>
                                @foreach ($variant->options as $oIndex => $option)
                                    <div class="option flex gap-2 mb-2 relative">
                                        <input type="text"
                                            name="variants[{{ $vIndex }}][options][{{ $oIndex }}][name]"
                                            value="{{ old("variants.$vIndex.options.$oIndex.name", $option->name) }}"
                                            placeholder="Option Name" class="border p-2 rounded w-1/2">
                                        <input type="text"
                                            name="variants[{{ $vIndex }}][options][{{ $oIndex }}][value]"
                                            value="{{ old("variants.$vIndex.options.$oIndex.value", $option->value) }}"
                                            placeholder="Option Value" class="border p-2 rounded w-1/2">
                                        <button type="button"
                                            class="remove-option absolute right-0 top-0 text-red-600">✖</button>
                                    </div>
                                @endforeach
                            </div>

                            <button type="button" class="add-option bg-blue-500 text-white px-2 py-1 mt-2 rounded">+ Add
                                Option</button>
                        </div>
                    @endforeach
                </div>

                <button type="button" id="add-variant" class="bg-green-500 text-white px-3 py-2 rounded mt-2">+ Add
                    Variant</button>
            </div>
            {{-- <h3 class="text-xl font-bold my-4">Pic BreackPoint</h3>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Making Price</label>
                <input type="number" step="0.01" name="making_price" class="w-full border p-2 rounded"
                    value="{{ old('making_price',$product->making_price) }}">
                @error('making_price')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Material</label>
                <input type="text" name="material" class="w-full border p-2 rounded" value="{{ old('material') }}">
                @error('material', $product->material)
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Material Charges</label>
                <input type="number" step="0.01" name="material_price" class="w-full border p-2 rounded"
                    value="{{ old('material_price',$product->material_price) }}">
                @error('material_price')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Discount (%)</label>
                <input type="number" step="0.01" name="brdiscount" class="w-full border p-2 rounded"
                    value="{{ old('brdiscount',$product->_brdiscount) }}">
                @error('brdiscount')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Tax (%)</label>
                <input type="number" step="0.01" name="tax" class="w-full border p-2 rounded"
                    value="{{ old('tax',$product->tax) }}">
                @error('tax')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div> --}}
            <div class="mt-6">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Product</button>
            </div>
        </form>
    </div>

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#product_description')).catch(error => console.error(error));

        let variantIndex = {{ count($product->variants) }};

        document.getElementById('add-variant').addEventListener('click', function() {
            const wrapper = document.getElementById('variants-wrapper');
            const firstVariant = wrapper.firstElementChild.cloneNode(true);

            firstVariant.querySelectorAll('input').forEach(input => input.value = '');
            firstVariant.querySelectorAll('[name]').forEach(input => {
                input.name = input.name.replace(/variants\[\d+\]/, `variants[${variantIndex}]`);
            });

            wrapper.appendChild(firstVariant);
            variantIndex++;
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('add-option')) {
                const variantBlock = e.target.closest('.variant');
                const optionsWrapper = variantBlock.querySelector('.options-wrapper');
                const optionIndex = optionsWrapper.querySelectorAll('.option').length;
                const variantIdx = variantBlock.querySelector('input[name^="variants"]').name.match(
                    /variants\[(\d+)\]/)[1];

                const newOption = document.createElement('div');
                newOption.classList.add('option', 'flex', 'gap-2', 'mb-2', 'relative');
                newOption.innerHTML = `
                <input type="text" name="variants[${variantIdx}][options][${optionIndex}][name]" placeholder="Option Name" class="border p-2 rounded w-1/2">
                <input type="text" name="variants[${variantIdx}][options][${optionIndex}][value]" placeholder="Option Value" class="border p-2 rounded w-1/2">
                <button type="button" class="remove-option absolute right-0 top-0 text-red-600">✖</button>`;
                optionsWrapper.appendChild(newOption);
            }

            if (e.target.classList.contains('remove-variant')) {
                const variantBlock = e.target.closest('.variant');
                if (document.querySelectorAll('.variant').length > 1) {
                    variantBlock.remove();
                } else {
                    alert('At least one variant is required.');
                }
            }

            if (e.target.classList.contains('remove-option')) {
                e.target.closest('.option').remove();
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    const subDiv = $('#subcategoryDiv');
    const subSelect = $('#subcategorySelect');
    const categorySelect = $('#categorySelect');

    // 🟢 Pre-selected values (for edit form)
    const selectedCategoryId = categorySelect.val();
    const selectedSubcategoryId = "{{ old('subcategory_id', $product->subcategory_id ?? '') }}";

    // If editing, load subcategories automatically
    if (selectedCategoryId) {
        loadSubcategories(selectedCategoryId, selectedSubcategoryId);
    }

    // When category changes, reload subcategories
    categorySelect.on('change', function () {
        const categoryId = $(this).val();
        subSelect.html('<option value="">-- Select Subcategory --</option>');
        subDiv.attr('hidden', true);

        if (!categoryId) return;

        loadSubcategories(categoryId);
    });

    function loadSubcategories(categoryId, selectedSubcategoryId = null) {
        $.ajax({
            url: '/get-subcategories/' + categoryId,
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                subSelect.html('<option>Loading...</option>');
            },
            success: function (data) {
                subSelect.html('<option value="">-- Select Subcategory --</option>');
                if (data.length > 0) {
                    $.each(data, function (key, subcat) {
                        const isSelected = selectedSubcategoryId == subcat.id ? 'selected' : '';
                        subSelect.append('<option value="' + subcat.id + '" ' + isSelected + '>' + subcat.name + '</option>');
                    });
                } else {
                    subSelect.append('<option value="">No subcategories found</option>');
                }
                subDiv.removeAttr('hidden');
            },
            error: function (xhr, status, error) {
                console.error("Error fetching subcategories:", error);
                alert("Something went wrong while loading subcategories.");
            }
        });
    }
});
</script>

@endsection
