@extends('admin.layouts.app')

@section('content')

<div class="container">
    <h3>Add Product Variant</h3>

    <form action="{{ route('admin.variants.store') }}" method="POST">
        @csrf

        <select name="product_id" class="form-control mb-2">
            <option value="">Select Product</option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">
                    {{ $product->name }}
                </option>
            @endforeach
        </select>

        <input type="text" name="sku"
               class="form-control mb-2"
               placeholder="SKU (Optional)">

        <input type="text" name="size"
               class="form-control mb-2"
               placeholder="Size">

        <input type="text" name="color"
               class="form-control mb-2"
               placeholder="Color">

        <input type="number" step="0.01"
               name="price"
               class="form-control mb-2"
               placeholder="Price">

        <input type="number" step="0.01"
               name="discount_price"
               class="form-control mb-2"
               placeholder="Discount Price">

        <input type="number"
               name="stock"
               class="form-control mb-2"
               placeholder="Stock">

        <button class="btn btn-success">Save</button>
    </form>
</div>

@endsection
