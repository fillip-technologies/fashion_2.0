@extends('admin.include.layout')

@section('content')

<div class="container">
    <h3>Add Product</h3>

    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf

        <select name="category_id" class="form-control mb-2">
            <option value="">Select Category</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>

        <input type="text" name="name" class="form-control mb-2" placeholder="Product Name">

        <input type="text" name="brand" class="form-control mb-2" placeholder="Brand">

        <input type="text" name="fabric" class="form-control mb-2" placeholder="Fabric">

        <input type="text" name="fit" class="form-control mb-2" placeholder="Fit">

        <textarea name="short_description" class="form-control mb-2" placeholder="Short Description"></textarea>

        <textarea name="description" class="form-control mb-2" placeholder="Full Description"></textarea>

        <input type="text" name="meta_title" class="form-control mb-2" placeholder="Meta Title">

        <textarea name="meta_description" class="form-control mb-2" placeholder="Meta Description"></textarea>

        <label>Status</label>
        <select name="status" class="form-control mb-2">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>

        <label>
            <input type="checkbox" name="is_featured" value="1">
            Featured Product
        </label>

        <button class="btn btn-success mt-3">Save</button>
    </form>
</div>

@endsection
