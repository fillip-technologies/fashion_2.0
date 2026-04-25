@extends('admin.layouts.app')

@section('content')

<div class="container">
    <h3>All Categories</h3>

    <a href="{{ route('admin.categories.create') }}"
       class="btn btn-primary mb-3">Add Category</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($categories as $cat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $cat->name }}</td>
                <td>{{ $cat->parent->name ?? '-' }}</td>
                <td>{{ $cat->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit',$cat->id) }}"
                       class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('admin.categories.destroy',$cat->id) }}"
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

    {{ $categories->links() }}
</div>

@endsection
