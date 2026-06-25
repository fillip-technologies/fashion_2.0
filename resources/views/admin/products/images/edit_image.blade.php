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

        .existing-images {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .existing-img-wrapper {
            position: relative;
            display: inline-block;
        }

        .existing-img-wrapper img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #ddd;
            padding: 3px;
        }

        .remove-image-btn {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #dc3545;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .remove-image-btn:hover {
            background: #c82333;
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

        .section-title {
            font-weight: 600;
            margin-top: 15px;
            margin-bottom: 10px;
            color: #555;
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

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

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
                        <h3>📸 Update Product Images</h3>
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

                        {{-- Update Form --}}
                        <form action="{{ route('admin.image.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf


                            {{-- Hidden ID for reference --}}
                            <input type="hidden" name="id" value="{{ $data->id }}">

                            {{-- Product Selection (disabled for update, or you can keep it editable) --}}
                            <div class="form-group">
                                <label>Select Product</label>
                                <select name="product_id" class="custom-select" {{-- Uncomment below to disable changing product on update --}} {{-- disabled --}}>
                                    <option value="">
                                        -- Select Product --
                                    </option>
                                    @foreach (allProduct() as $product)
                                        <option value="{{ $product->id }}" @selected($data->product_id == $product->id)>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Existing Images Display --}}
                            @if ($data->image && count($data->image) > 0)
                                <div class="form-group">
                                    <label>Existing Images</label>
                                    <div class="existing-images">
                                        @foreach ($data->image as $key => $image)
                                            <div class="existing-img-wrapper">
                                                <img src="{{ asset($image) }}" alt="Product Image">
                                                <button type="button" class="remove-image-btn delete-image"
                                                    data-index="{{ $key }}" data-id="{{ $data->id }}">
                                                    ×
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            {{-- Upload New Images --}}
                            <div class="form-group">
                                <label>Add New Images (Optional)</label>
                                <input type="file" name="image[]" id="image" class="file-upload-input" multiple
                                    accept="image/*">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('image.*')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="image-preview-container" id="imagePreviewContainer"></div>
                            </div>

                            <button type="submit" class="btn-submit">
                                Update Images
                            </button>

                            <a href="{{ url()->previous() }}" class="btn-cancel">
                                Back
                            </a>
                        </form>

                        {{-- Optional: Delete all images form --}}
                        @if ($data->images && count($data->images) > 0)
                            <form action="{{ route('admin.product-images.destroy-all', $data->id) }}" method="POST"
                                style="margin-top:20px; display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete all images?')">
                                    Delete All Images
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".delete-image").on('click', function() {
                var value = $(this).data('index');
                var pid = $(this).data('id');
                $.ajax({
                    url: "{{ route('admin.index.image.del') }}",
                    type: "GET",
                    data: {
                        index: value,
                        id:pid
                    },
                    success: function(respons) {
                      window.location.reload();
                    },
                    error: function(error) {
                        console.log(error);

                    }
                });
            })
        })
        // Image preview for new uploads
        document.getElementById('image').addEventListener('change', function() {
            const previewContainer = document.getElementById('imagePreviewContainer');
            previewContainer.innerHTML = '';
            const files = this.files;

            if (!files.length) return;

            Array.from(files).forEach(file => {
                if (!file.type.startsWith('image/')) return;

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
