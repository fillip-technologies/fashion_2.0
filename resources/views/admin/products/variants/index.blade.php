@extends('admin.layouts.app')

@section('content')

<div class="container">
    <h3>All Product Variants</h3>

    <a href="{{ route('admin.variants.create') }}"
       class="btn btn-primary mb-3">Add Variant</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>SKU</th>
                <th>Size</th>
                <th>Color</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($variants as $variant)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $variant->product->name }}</td>
                <td>{{ $variant->sku }}</td>
                <td>{{ $variant->size }}</td>
                <td>{{ $variant->color }}</td>
                <td>{{ $variant->price }}</td>
                <td>{{ $variant->discount_price ?? '-' }}</td>
                <td>{{ $variant->stock }}</td>
                <td>
                    <a href="{{ route('admin.variants.edit',$variant->id) }}"
                       class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('admin.variants.destroy',$variant->id) }}"
                          method="POST"
                          style="display:inline;">
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

    {{ $variants->links() }}
</div>

@endsection
