@extends('admin.include.layouts')

@section('content')

<div class="container">
    <h3>Add Category</h3>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf

        <input type="text"
               name="name"
               class="form-control mb-2"
               placeholder="Category Name">

        <select name="parent_id" class="form-control mb-2">
            <option value="">Select Parent (Optional)</option>
            @foreach($parents as $parent)
                <option value="{{ $parent->id }}">
                    {{ $parent->name }}
                </option>
            @endforeach
        </select>

        <select name="status" class="form-control mb-2">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>

        <button class="btn btn-success">Save</button>
    </form>
</div>

@endsection
