@extends('admin.layouts.app')

@section('content')

<div class="container">
    <h3>All Products</h3>

    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">
        Add Product
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Status</th>
                <th>Featured</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name ?? '-' }}</td>
                <td>{{ $product->brand }}</td>
                <td>{{ $product->status ? 'Active' : 'Inactive' }}</td>
                <td>{{ $product->is_featured ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('admin.products.edit',$product->id) }}"
                       class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('admin.products.destroy',$product->id) }}"
                          method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete?')">
                                Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>

@endsection
