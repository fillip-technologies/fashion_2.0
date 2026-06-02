@extends('admin.include.layout')

@section('content')
<style>
    .product-image-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        margin-top: 20px;
    }

    .card-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
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
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    .custom-select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }

    .file-upload-wrapper {
        position: relative;
    }

    .file-upload-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .btn-submit {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .btn-cancel {
        background: #6c757d;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-left: 10px;
    }

    .btn-submit:hover {
        opacity: 0.9;
    }

    .btn-cancel:hover {
        background: #5a6268;
    }

    .image-preview-container {
        margin-top: 20px;
    }

    .preview-img {
        max-width: 200px;
        max-height: 200px;
        border-radius: 10px;
        border: 2px solid #ddd;
        padding: 5px;
    }

    .alert-danger {
        background: #f8d7da;
        color: #721c24;
        padding: 12px;
        border-radius: 5px;
        margin-bottom: 20px;
        border-left: 4px solid #dc3545;
    }

    .text-danger {
        color: #dc3545;
        font-size: 12px;
        margin-top: 5px;
    }
</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="product-image-card">
                <div class="card-header">
                    <h3>📸 Add Product Image</h3>
                </div>
                <div class="card-body">
                    @if(session('error'))
                        <div class="alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action=""
                          method="POST"
                          enctype="multipart/form-data"
                          id="productImageForm">
                        @csrf

                        <div class="form-group">
                            <label for="product_id">Select Product</label>
                            <select name="product_id"
                                    id="product_id"
                                    class="custom-select"
                                    required>
                                <option value="">-- Select Product --</option>
                                {{-- @foreach($products as $product)
                                    <option value="{{ $product->id }}">
                                        {{ $product->name }}
                                    </option>
                                @endforeach --}}
                            </select>
                            @error('product_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image</label>
                            <div class="file-upload-wrapper">
                                <input type="file"
                                       name="image[]"
                                       id="image"
                                       multiple
                                       class="file-upload-input"
                                       accept="image/*"
                                       required>
                            </div>

                            <div class="image-preview-container" id="imagePreviewContainer" style="display: none;">
                                <img id="imagePreview" class="preview-img" src="#" alt="Preview">
                            </div>

                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-submit" id="submitBtn">
                                Upload Image
                            </button>
                            <a href="" class="btn-cancel">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Image Preview JavaScript
document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('imagePreview');
            const container = document.getElementById('imagePreviewContainer');
            preview.src = e.target.result;
            container.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});
</script>

@endsection
