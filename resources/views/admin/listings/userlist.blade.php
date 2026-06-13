@extends('admin.include.layout')

@section('content')
    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endif
    <div class="card-body">
        <div class="table-container">
            <table class="category-table">
                <thead>
                    <tr>
                        <th width="80">#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Location</th>
                        <th>Company</th>
                        <th width="150">Created At</th>
                        <th width="150">Action</th>

                    </tr>
                </thead>

                <tbody>
                    @forelse ($users ?? [] as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <span class="badge badge-primary">
                                    {{ $user->firstname ?? '' }} {{ $user->lastname ?? '' }}
                                </span>
                            </td>
                            <td>{{ $user->email ?? '' }}</td>
                            <td>{{ $user->title ?? '' }}</td>
                            <td>{{ $user->phone ?? '' }}</td>
                            <td>{{ $user->role ?? '' }}</td>
                            <td>{{ $user->location ?? '' }}</td>
                            <td>{{ $user->company ?? '' }}</td>
                            <td>{{ $user->created_at ? $user->created_at->format('d M Y') : 'N/A' }}</td>
                            <td>
                                <div class="action-buttons">
                                    <form action="{{ url('admin/users/delete/' . $user->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this user?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-delete">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">
                                <div class="empty-state">
                                    <i class="fas fa-users"></i>
                                    <h3>No Users Found</h3>
                                    <p>Create your first user to get started.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <style>
        /* Add these styles to your existing CSS */
        .table-container {
            overflow-x: auto;
        }

        .category-table {
            width: 100%;
            border-collapse: collapse;
        }

        .category-table th,
        .category-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        .category-table th {
            background-color: #f9fafb;
            font-weight: 600;
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
        }

        .badge-primary {
            background-color: #e0e7ff;
            color: #3730a3;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .btn-edit,
        .btn-delete {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 4px 8px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 12px;
            cursor: pointer;
            border: none;
        }

        .btn-edit {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .btn-delete {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .empty-state {
            text-align: center;
            padding: 40px;
        }

        .empty-state i {
            font-size: 48px;
            color: #9ca3af;
            margin-bottom: 16px;
        }

        .empty-state h3 {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .empty-state p {
            color: #6b7280;
        }
    </style>
@endsection
