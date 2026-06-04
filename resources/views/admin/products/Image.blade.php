@extends('admin.include.layout')

@section('content')
    <style>
        .product-image-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, .1);
            margin-top: 20px;
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 20px;
            border-radius: 15px 15px 0 0;
        }

        .card-header h3 {
            margin: 0;
            font-size: 24px;
        }

        .card-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }

        .custom-select,
        .file-upload-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
        }

        .custom-select:focus,
        .file-upload-input:focus {
            border-color: #667eea;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-submit:hover {
            opacity: .9;
        }

        .btn-cancel {
            background: #6c757d;
            color: #fff;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            margin-left: 10px;
        }

        .btn-cancel:hover {
            color: #fff;
            background: #5a6268;
        }

        .image-preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .preview-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #ddd;
            padding: 3px;
        }

        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .text-danger {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
@if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

    {{-- Error Message --}}
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                html: `
        <ul style="text-align:left;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    `
            });
        </script>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="product-image-card">

                    <div class="card-header">
                        <h3>📸 Add Product Images</h3>
                    </div>

                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('admin.store.images.product') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label>Select Product</label>

                                <select name="product_id" class="custom-select" >

                                    <option value="">
                                        -- Select Product --
                                    </option>

                                    @foreach (allProduct() as $product)
                                        <option value="{{ $product->id }}"
                                            {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach

                                </select>

                                @error('product_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <label>Select Images</label>

                                <input type="file" name="image[]" id="image" class="file-upload-input" multiple
                                    accept="image/*" >

                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                @error('image.*')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="image-preview-container" id="imagePreviewContainer">
                                </div>

                            </div>

                            <button type="submit" class="btn-submit">
                                Upload Images
                            </button>

                            <a href="{{ url()->previous() }}" class="btn-cancel">
                                Cancel
                            </a>

                        </form>

                    </div>
                </div>

            </div>
        </div>


        <div class="bg-white shadow-lg rounded-lg overflow-hidden mt-6">
    <div class="px-6 py-4 border-b">
        <h2 class="text-xl font-semibold text-gray-800">
            Product Images Listing
        </h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-600">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3">#</th>
                    <th class="px-6 py-3">Product Name</th>
                    <th class="px-6 py-3">Thumbnail</th>
                    <th class="px-6 py-3">Gallery Images</th>
                    <th class="px-6 py-3 text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                <!-- Product 1 -->
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">1</td>

                    <td class="px-6 py-4 font-medium text-gray-900">
                        Premium Cotton T-Shirt
                    </td>

                    <td class="px-6 py-4">
                        <img src="https://via.placeholder.com/60"
                             alt="Thumbnail"
                             class="w-16 h-16 rounded-lg object-cover border">
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <img src="https://via.placeholder.com/50"
                                 class="w-12 h-12 rounded object-cover border">

                            <img src="https://via.placeholder.com/50"
                                 class="w-12 h-12 rounded object-cover border">

                            <img src="https://via.placeholder.com/50"
                                 class="w-12 h-12 rounded object-cover border">
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex justify-center gap-2">
                            <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                Edit
                            </button>

                            <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Product 2 -->
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">2</td>

                    <td class="px-6 py-4 font-medium text-gray-900">
                        Denim Jacket
                    </td>

                    <td class="px-6 py-4">
                        <img src="https://via.placeholder.com/60"
                             alt="Thumbnail"
                             class="w-16 h-16 rounded-lg object-cover border">
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <img src="https://via.placeholder.com/50"
                                 class="w-12 h-12 rounded object-cover border">

                            <img src="https://via.placeholder.com/50"
                                 class="w-12 h-12 rounded object-cover border">
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex justify-center gap-2">
                            <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                Edit
                            </button>

                            <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Product 3 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">3</td>

                    <td class="px-6 py-4 font-medium text-gray-900">
                        Sports Shoes
                    </td>

                    <td class="px-6 py-4">
                        <img src="https://via.placeholder.com/60"
                             alt="Thumbnail"
                             class="w-16 h-16 rounded-lg object-cover border">
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <img src="https://via.placeholder.com/50"
                                 class="w-12 h-12 rounded object-cover border">

                            <img src="https://via.placeholder.com/50"
                                 class="w-12 h-12 rounded object-cover border">

                            <img src="https://via.placeholder.com/50"
                                 class="w-12 h-12 rounded object-cover border">

                            <img src="https://via.placeholder.com/50"
                                 class="w-12 h-12 rounded object-cover border">
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex justify-center gap-2">
                            <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                Edit
                            </button>

                            <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    </div>

    <script>
        document.getElementById('image').addEventListener('change', function() {

            const previewContainer = document.getElementById('imagePreviewContainer');

            previewContainer.innerHTML = '';

            const files = this.files;

            if (!files.length) {
                return;
            }

            Array.from(files).forEach(file => {

                if (!file.type.startsWith('image/')) {
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {

                    const img = document.createElement('img');

                    img.src = e.target.result;
                    img.classList.add('preview-img');

                    previewContainer.appendChild(img);
                };

                reader.readAsDataURL(file);
            });
        });
    </script>
@endsection
