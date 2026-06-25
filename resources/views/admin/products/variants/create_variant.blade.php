@extends('admin.include.layout')

@section('content')
<style>
    /* Modern CSS for Product Variation Management */
    :root {
        --primary: #4f46e5;
        --primary-dark: #4338ca;
        --success: #10b981;
        --danger: #ef4444;
        --warning: #f59e0b;
        --info: #3b82f6;
        --dark: #1f2937;
        --light: #f9fafb;
        --border: #e5e7eb;
    }

    .variation-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Cards */
    .variation-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        overflow: hidden;
        margin-bottom: 30px;
    }

    .card-header {
        background: linear-gradient(135deg, var(--primary) 0%, #764ba2 100%);
        color: white;
        padding: 25px 30px;
    }

    .card-header h2 {
        margin: 0;
        font-size: 24px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-header p {
        margin: 10px 0 0;
        opacity: 0.9;
    }

    .card-body {
        padding: 30px;
    }

    /* Form Layout */
    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--dark);
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-group label i {
        margin-right: 5px;
        color: var(--primary);
    }

    .required-star {
        color: var(--danger);
        margin-left: 3px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid var(--border);
        border-radius: 10px;
        font-size: 14px;
        transition: all 0.3s;
    }

    .form-control:focus {
        border-color: var(--primary);
        outline: none;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
    }

    select.form-control {
        cursor: pointer;
    }

    /* Image Upload */
    .image-upload-area {
        border: 2px dashed var(--border);
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s;
    }

    .image-upload-area:hover {
        border-color: var(--primary);
        background: #f8fafc;
    }

    .image-preview {
        margin-top: 15px;
        display: none;
    }

    .image-preview img {
        max-width: 100px;
        max-height: 100px;
        border-radius: 10px;
        border: 2px solid var(--primary);
        padding: 3px;
    }

    /* Stock Status Badge */
    .stock-badge {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }

    .stock-high {
        background: #d1fae5;
        color: #065f46;
    }

    .stock-medium {
        background: #fed7aa;
        color: #92400e;
    }

    .stock-low {
        background: #fee2e2;
        color: #991b1b;
    }

    /* Status Switch */
    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 24px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: 0.3s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 18px;
        width: 18px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        transition: 0.3s;
        border-radius: 50%;
    }

    input:checked + .slider {
        background-color: var(--success);
    }

    input:checked + .slider:before {
        transform: translateX(26px);
    }

    /* Buttons */
    .btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(79, 70, 229, 0.4);
    }

    /* Table Styles */
    .table-responsive {
        overflow-x: auto;
    }

    .variation-table {
        width: 100%;
        border-collapse: collapse;
    }

    .variation-table thead {
        background: var(--light);
    }

    .variation-table th {
        padding: 15px;
        text-align: left;
        font-weight: 600;
        color: var(--dark);
        border-bottom: 2px solid var(--border);
    }

    .variation-table td {
        padding: 15px;
        border-bottom: 1px solid var(--border);
        vertical-align: middle;
    }

    .variation-table tr:hover {
        background: var(--light);
    }

    .color-box {
        width: 30px;
        height: 30px;
        border-radius: 8px;
        display: inline-block;
        margin-right: 8px;
        border: 1px solid #ddd;
    }

    .action-buttons {
        display: flex;
        gap: 8px;
    }

    .btn-edit, .btn-delete, .btn-toggle {
        padding: 6px 12px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 12px;
        transition: all 0.3s;
    }

    .btn-edit {
        background: var(--warning);
        color: white;
    }

    .btn-delete {
        background: var(--danger);
        color: white;
    }

    .btn-toggle {
        background: var(--info);
        color: white;
    }

    /* Alert Messages */
    .alert {
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .alert-success {
        background: #d1fae5;
        border-left: 4px solid var(--success);
        color: #065f46;
    }

    /* Modal */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background: white;
        border-radius: 20px;
        max-width: 500px;
        width: 90%;
        animation: slideIn 0.3s;
    }

    @keyframes slideIn {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .variation-container {
            padding: 10px;
        }

        .action-buttons {
            flex-direction: column;
        }
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
<div class="variation-container">
    <!-- Add Variation Form -->
    <div class="variation-card">
        <div class="card-header">
            <h2>
                <i class="fas fa-layer-group"></i>
                Add Product Variation
            </h2>
            <p>Manage product variants with color, size, price, and stock</p>
        </div>
        <div class="card-body">

            <form action="{{ route('admin.store.product.variant') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-grid">
                    <div class="form-group">
                        <label for="product_id">
                            <i class="fas fa-box"></i> Product
                            <span class="required-star">*</span>
                        </label>
                        <select name="product_id" id="product_id" class="form-control" >
                            <option value="">Select Product</option>
                            @foreach(allProduct() as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="color_id">
                            <i class="fas fa-palette"></i> Color
                            <span class="required-star">*</span>
                        </label>
                        <select name="color_id" id="color_id" class="form-control" >
                            <option value="">Select Color</option>
                             @foreach(GetColor() as $color)
                                <option value="{{ $color->id }}">
                                    {{ $color->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="size_id">
                            <i class="fas fa-ruler"></i> Size
                            <span class="required-star">*</span>
                        </label>
                        <select name="size_id" id="size_id" class="form-control" >
                            <option value="">Select Size</option>
                             @foreach(GetSize() as $size)
                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sku">
                            <i class="fas fa-barcode"></i> SKU
                            <span class="required-star">*</span>
                        </label>
                        <input type="text" name="sku" id="sku" class="form-control" placeholder="Unique SKU code" >
                    </div>

                    <div class="form-group">
                        <label for="price">
                            <i class="fas fa-dollar-sign"></i> Regular Price
                            <span class="required-star">*</span>
                        </label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="0.00" step="0.01" >
                    </div>

                    <div class="form-group">
                        <label for="sale_price">
                            <i class="fas fa-tag"></i> Sale Price
                        </label>
                        <input type="number" name="sale_price" id="sale_price" class="form-control" placeholder="0.00" step="0.01">
                    </div>

                    <div class="form-group">
                        <label for="stock">
                            <i class="fas fa-boxes"></i> Stock Quantity
                            <span class="required-star">*</span>
                        </label>
                        <input type="number" name="stock" id="stock" class="form-control" value="0" >
                    </div>

                    <div class="form-group">
                        <label for="image">
                            <i class="fas fa-image"></i> Variation Image
                        </label>
                        <div class="image-upload-area" onclick="document.getElementById('image').click()">
                            <i class="fas fa-cloud-upload-alt" style="font-size: 40px; color: var(--primary);"></i>
                            <p>Click to upload image</p>
                            <small>PNG, JPG up to 2MB</small>
                        </div>
                        <input type="file" name="image[]" id="image" style="display: none;" accept="image/*" multiple>
                        <div class="image-preview" id="imagePreview">
                            <img id="previewImg" src="#" alt="Preview">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status">
                            <i class="fas fa-power-off"></i> Status
                        </label>
                        <label class="switch">
                            <input type="checkbox" name="status" id="status" value="1" checked>
                            <span class="slider"></span>
                        </label>
                        <small style="display: block; margin-top: 5px;">Active/Inactive variation</small>
                    </div>
                </div>

                <div style="margin-top: 30px; text-align: center;">
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-save"></i> Save Variation
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Variations List -->
    <div class="variation-card">
        <div class="card-header" style="background: linear-gradient(135deg, #3b82f6 0%, #2dd4bf 100%);">
            <h2>
                <i class="fas fa-list"></i>
                Product Variations
            </h2>
            <p>Total Variations: {{ $productVarialt->count() }}</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="variation-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>SKU</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                     <tbody>
                        @forelse($productVarialt as $variation)
                        <tr>
                            <td>#{{ $variation->id }}</td>
                            <td>{{ $variation->product->name ?? 'N/A' }}</td>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    @if($variation->color && $variation->color->code)
                                        <div class="color-box" style="background: {{ $variation->color->code }};"></div>
                                    @endif
                                    {{ $variation->color->name ?? 'N/A' }}
                                </div>
                            </td>
                            <td>{{ $variation->size->name ?? 'N/A' }}</td>
                            <td><code>{{ $variation->sku }}</code></td>
                            <td>
                                @if($variation->sale_price)
                                    <del>${{ number_format($variation->price, 2) }}</del><br>
                                    <strong style="color: var(--success);">${{ number_format($variation->sale_price, 2) }}</strong>
                                @else
                                    <strong>${{ number_format($variation->price, 2) }}</strong>
                                @endif
                            </td>
                            <td>
                                @php
                                    $stockClass = 'stock-high';
                                    if($variation->stock <= 5) $stockClass = 'stock-low';
                                    elseif($variation->stock <= 20) $stockClass = 'stock-medium';
                                @endphp
                                <span class="stock-badge {{ $stockClass }}">
                                    {{ $variation->stock }} units
                                </span>
                            </td>
                             <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">

                                        @foreach ($variation->image ?? [] as $img)
                                            <img src="{{ asset($img) ?? 'default.png' }}"
                                                class="w-12 h-12 rounded object-cover border">
                                        @endforeach

                                    </div>
                                </td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status-toggle" data-id="{{ $variation->id }}" {{ $variation->status ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                </label>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('admin.edit.product_variant',$variation->id) }}" class="btn-edit">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.product_variant.delete',$variation->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" style="text-align: center; padding: 50px;">
                                <i class="fas fa-box-open" style="font-size: 48px; color: #ccc;"></i>
                                <h3>No Variations Found</h3>
                                <p>Add your first product variation using the form above.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div style="margin-top: 20px;">
                 {{ $productVarialt->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    // Image preview
    const imageInput = document.getElementById('image');
    const previewContainer = document.getElementById('imagePreview');
    const previewImg = document.getElementById('previewImg');


    imageInput.addEventListener('change', function(e) {
        const file = e.target.files;

        if(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewContainer.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });

    // Auto-generate SKU
    const productSelect = document.getElementById('product_id');
    const colorSelect = document.getElementById('color_id');
    const sizeSelect = document.getElementById('size_id');
    const skuInput = document.getElementById('sku');

    function generateSKU() {
        const product = productSelect.options[productSelect.selectedIndex]?.text;
        const color = colorSelect.options[colorSelect.selectedIndex]?.text;
        const size = sizeSelect.options[sizeSelect.selectedIndex]?.text;

        if(product && color && size) {
            const sku = product.substring(0, 3).toUpperCase() + '-' +
                       color.substring(0, 2).toUpperCase() + '-' +
                       size.toUpperCase();
            skuInput.value = sku;
        }
    }

    productSelect.addEventListener('change', generateSKU);
    colorSelect.addEventListener('change', generateSKU);
    sizeSelect.addEventListener('change', generateSKU);

    // Status toggle via AJAX
    document.querySelectorAll('.status-toggle').forEach(toggle => {
        toggle.addEventListener('change', function() {
            const id = this.dataset.id;
            const status = this.checked ? 1 : 0;

            fetch(`/admin/product-variations/${id}/toggle-status`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({status: status})
            });
        });
    });

    function editVariation(id) {
        window.location.href = `/admin/product-variations/${id}/edit`;
    }
</script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
