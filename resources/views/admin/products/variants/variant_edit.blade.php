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
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
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
            display: block;
        }

        .image-preview img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 10px;
            border: 2px solid var(--primary);
            padding: 3px;
        }

        .current-image {
            margin-top: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .current-image img {
            max-width: 80px;
            max-height: 80px;
            border-radius: 10px;
            border: 2px solid var(--border);
            padding: 3px;
        }

        .current-image .badge {
            background: var(--success);
            color: white;
            padding: 2px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
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

        input:checked+.slider {
            background-color: var(--success);
        }

        input:checked+.slider:before {
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

        .btn-secondary {
            background: #6b7280;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-left: 10px;
        }

        .btn-secondary:hover {
            background: #4b5563;
            color: white;
        }

        .btn-danger {
            background: var(--danger);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-danger:hover {
            background: #dc2626;
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

        .alert-danger {
            background: #fee2e2;
            border-left: 4px solid var(--danger);
            color: #991b1b;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .variation-container {
                padding: 10px;
            }

            .form-grid {
                grid-template-columns: 1fr;
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

    <div class="variation-container">
        <!-- Edit Variation Form -->
        <div class="variation-card">
            <div class="card-header">
                <h2>
                    <i class="fas fa-edit"></i>
                    Edit Product Variation
                </h2>
                <p>Update product variant details</p>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.product_variant.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   

                    <input type="hidden" name="id" value="{{ $data->id }}">

                    <div class="form-grid">
                        <!-- Product -->
                        <div class="form-group">
                            <label for="product_id">
                                <i class="fas fa-box"></i> Product
                                <span class="required-star">*</span>
                            </label>
                            <select name="product_id" id="product_id" class="form-control" required>
                                <option value="">Select Product</option>
                                @foreach (allProduct() as $product)
                                    <option value="{{ $product->id }}" @selected($data->product_id == $product->id)>
                                        {{ $product->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('product_id')
                                <div class="text-danger" style="color: var(--danger); font-size: 12px; margin-top: 5px;">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Color -->
                        <div class="form-group">
                            <label for="color_id">
                                <i class="fas fa-palette"></i> Color
                                <span class="required-star">*</span>
                            </label>
                            <select name="color_id" id="color_id" class="form-control" required>
                                <option value="">Select Color</option>
                                @foreach (GetColor() as $color)
                                    <option value="{{ $color->id }}" @selected($data->color_id == $color->id)>
                                        {{ $color->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('color_id')
                                <div class="text-danger" style="color: var(--danger); font-size: 12px; margin-top: 5px;">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Size -->
                        <div class="form-group">
                            <label for="size_id">
                                <i class="fas fa-ruler"></i> Size
                                <span class="required-star">*</span>
                            </label>
                            <select name="size_id" id="size_id" class="form-control" required>
                                <option value="">Select Size</option>
                                @foreach (GetSize() as $size)
                                    <option value="{{ $size->id }}" @selected($data->size_id == $size->id)>
                                        {{ $size->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('size_id')
                                <div class="text-danger" style="color: var(--danger); font-size: 12px; margin-top: 5px;">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- SKU -->
                        <div class="form-group">
                            <label for="sku">
                                <i class="fas fa-barcode"></i> SKU
                                <span class="required-star">*</span>
                            </label>
                            <input type="text" name="sku" id="sku" class="form-control"
                                placeholder="Unique SKU code" value="{{ old('sku', $data->sku) }}" required>
                            @error('sku')
                                <div class="text-danger" style="color: var(--danger); font-size: 12px; margin-top: 5px;">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Regular Price -->
                        <div class="form-group">
                            <label for="price">
                                <i class="fas fa-dollar-sign"></i> Regular Price
                                <span class="required-star">*</span>
                            </label>
                            <input type="number" name="price" id="price" class="form-control" placeholder="0.00"
                                step="0.01" value="{{ old('price', $data->price) }}" required>
                            @error('price')
                                <div class="text-danger" style="color: var(--danger); font-size: 12px; margin-top: 5px;">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Sale Price -->
                        <div class="form-group">
                            <label for="sale_price">
                                <i class="fas fa-tag"></i> Sale Price
                            </label>
                            <input type="number" name="sale_price" id="sale_price" class="form-control" placeholder="0.00"
                                step="0.01" value="{{ old('sale_price', $data->sale_price) }}">
                            @error('sale_price')
                                <div class="text-danger" style="color: var(--danger); font-size: 12px; margin-top: 5px;">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Stock -->
                        <div class="form-group">
                            <label for="stock">
                                <i class="fas fa-boxes"></i> Stock Quantity
                                <span class="required-star">*</span>
                            </label>
                            <input type="number" name="stock" id="stock" class="form-control"
                                value="{{ old('stock', $data->stock) }}" required min="0">
                            @error('stock')
                                <div class="text-danger" style="color: var(--danger); font-size: 12px; margin-top: 5px;">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Image Upload -->
                        <div class="form-group">
                            <label for="image">
                                <i class="fas fa-image"></i> Variation Image
                            </label>

                            <!-- Current Image -->
                            @if ($data->image)
                                @foreach ($data->image as $items)
                                    <div class="current-image">
                                        <img src="{{ asset($items) }}" alt="Current image">
                                        <span class="badge">Current</span>
                                    </div>
                                @endforeach
                            @endif

                            <div class="image-upload-area" onclick="document.getElementById('image').click()">
                                <i class="fas fa-cloud-upload-alt" style="font-size: 40px; color: var(--primary);"></i>
                                <p>Click to upload new image</p>
                                <small>PNG, JPG up to 2MB</small>
                            </div>
                            <input type="file" name="image" id="image" style="display: none;"
                                accept="image/*">
                            <div class="image-preview" id="imagePreview" style="display: none;">
                                <img id="previewImg" src="#" alt="Preview">
                            </div>
                            @error('image')
                                <div class="text-danger" style="color: var(--danger); font-size: 12px; margin-top: 5px;">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">
                                <i class="fas fa-power-off"></i> Status
                            </label>
                            <label class="switch">
                                <input type="checkbox" name="status" id="status" value="1"
                                    {{ $data->status == 'active' ? 'checked' : '' }}>
                                <span class="slider"></span>
                            </label>
                            <small style="display: block; margin-top: 5px;">Active/Inactive variation</small>
                            @error('status')
                                <div class="text-danger" style="color: var(--danger); font-size: 12px; margin-top: 5px;">
                                    {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div style="margin-top: 30px; text-align: center;">
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-save"></i> Update Variation
                        </button>
                      <a href="{{ url()->previous() }}" class="btn-secondary">
    <i class="fas fa-arrow-left"></i> Back to List
</a>

                        <!-- Delete Button -->
                        <button type="button" class="btn-danger" onclick="confirmDelete({{ $data->id }})">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </form>

                <!-- Delete Form (Hidden) -->
                <form id="deleteForm" action="" method="POST"
                    style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>

    <script>
        // Image preview
        const imageInput = document.getElementById('image');
        const previewContainer = document.getElementById('imagePreview');
        const previewImg = document.getElementById('previewImg');

        imageInput.addEventListener('change', function(e) {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    previewContainer.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });

        // Auto-generate SKU (optional - can be used for new variations)
        const productSelect = document.getElementById('product_id');
        const colorSelect = document.getElementById('color_id');
        const sizeSelect = document.getElementById('size_id');
        const skuInput = document.getElementById('sku');

        function generateSKU() {
            // Only generate if SKU is empty or was auto-generated
            if (!skuInput.value || skuInput.dataset.auto === 'true') {
                const product = productSelect.options[productSelect.selectedIndex]?.text;
                const color = colorSelect.options[colorSelect.selectedIndex]?.text;
                const size = sizeSelect.options[sizeSelect.selectedIndex]?.text;

                if (product && color && size && product !== 'Select Product' && color !== 'Select Color' && size !==
                    'Select Size') {
                    const sku = product.substring(0, 3).toUpperCase() + '-' +
                        color.substring(0, 2).toUpperCase() + '-' +
                        size.toUpperCase();
                    skuInput.value = sku;
                    skuInput.dataset.auto = 'true';
                }
            }
        }

        // Mark if SKU was manually edited
        skuInput.addEventListener('input', function() {
            this.dataset.auto = 'false';
        });

        // Only auto-generate if SKU is empty
        productSelect.addEventListener('change', function() {
            if (!skuInput.value) {
                generateSKU();
            }
        });
        colorSelect.addEventListener('change', function() {
            if (!skuInput.value) {
                generateSKU();
            }
        });
        sizeSelect.addEventListener('change', function() {
            if (!skuInput.value) {
                generateSKU();
            }
        });

        // Delete confirmation
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').submit();
                }
            });
        }

        // Status change confirmation (optional)
        document.getElementById('status').addEventListener('change', function() {
            const status = this.checked ? 'active' : 'inactive';
            Swal.fire({
                icon: 'info',
                title: 'Status Updated',
                text: `Variation will be ${status}`,
                timer: 2000,
                showConfirmButton: false
            });
        });
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection
