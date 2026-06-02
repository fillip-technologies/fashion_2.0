@extends('admin.include.layout')

@section('content')
<div class="product-form-container">
    <div class="page-header">
        <h1 class="page-title">
            <i class="fas fa-plus-circle"></i> Add New Product
        </h1>
        <div class="page-actions">
            <a href="" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Products
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Product Information</h3>
            <p class="card-subtitle">Fill in the details below to add a new product to your inventory.</p>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" id="productForm">
                @csrf

                <div class="form-grid">
                    <!-- LEFT COLUMN -->
                    <div class="form-column">
                        <!-- Category & Sub Category -->
                        <div class="form-row two-col">
                            <div class="form-group">
                                <label for="category_id">Category <span class="required">*</span></label>
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                                    <option value="">-- Select Category --</option>
                                    <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>Electronics</option>
                                    <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>Fashion</option>
                                    <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>Home & Living</option>
                                    <option value="4" {{ old('category_id') == 4 ? 'selected' : '' }}>Books</option>
                                </select>
                                @error('category_id')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="sub_category_id">Sub Category</label>
                                <select name="sub_category_id" id="sub_category_id" class="form-control @error('sub_category_id') is-invalid @enderror">
                                    <option value="">-- Select Sub Category --</option>
                                    <option value="101" {{ old('sub_category_id') == 101 ? 'selected' : '' }}>Smartphones</option>
                                    <option value="102" {{ old('sub_category_id') == 102 ? 'selected' : '' }}>Laptops</option>
                                    <option value="103" {{ old('sub_category_id') == 103 ? 'selected' : '' }}>Accessories</option>
                                </select>
                                @error('sub_category_id')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Product Name -->
                        <div class="form-group">
                            <label for="name">Product Name <span class="required">*</span></label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="e.g., Wireless Bluetooth Headphones" required>
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Slug (auto-generated or manual) -->
                        <div class="form-group">
                            <label for="slug">Slug <span class="required">*</span></label>
                            <div class="input-with-hint">
                                <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" placeholder="auto-generated from name" required>
                                <small class="hint-text">Unique URL identifier. Leave empty to auto-generate.</small>
                            </div>
                            @error('slug')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Detailed product description...">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Price & Sale Price -->
                        <div class="form-row two-col">
                            <div class="form-group">
                                <label for="price">Price <span class="required">*</span></label>
                                <div class="input-prefix">
                                    <span class="prefix">$</span>
                                    <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" placeholder="0.00" required>
                                </div>
                                @error('price')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="sale_price">Sale Price</label>
                                <div class="input-prefix">
                                    <span class="prefix">$</span>
                                    <input type="number" step="0.01" name="sale_price" id="sale_price" class="form-control @error('sale_price') is-invalid @enderror" value="{{ old('sale_price') }}" placeholder="0.00">
                                </div>
                                <small class="hint-text">Leave empty if no sale.</small>
                                @error('sale_price')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="form-column">
                        <!-- SKU & Stock -->
                        <div class="form-row two-col">
                            <div class="form-group">
                                <label for="sku">SKU <span class="required">*</span></label>
                                <input type="text" name="sku" id="sku" class="form-control @error('sku') is-invalid @enderror" value="{{ old('sku') }}" placeholder="PROD-001" required>
                                @error('sku')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="stock">Stock Quantity <span class="required">*</span></label>
                                <input type="number" name="stock" id="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}" placeholder="0" min="0" required>
                                @error('stock')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Thumbnail Upload -->
                        <div class="form-group">
                            <label for="thumbnail">Product Thumbnail</label>
                            <div class="file-upload-area" id="fileUploadArea">
                                <input type="file" name="thumbnail" id="thumbnail" class="file-input" accept="image/jpeg,image/png,image/webp,image/jpg">
                                <div class="upload-preview">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <p>Click or drag image to upload</p>
                                    <small>Supported: JPG, PNG, WEBP (Max 2MB)</small>
                                </div>
                                <div id="thumbnailPreview" class="thumbnail-preview" style="display: none;"></div>
                            </div>
                            @error('thumbnail')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Status Toggle -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <div class="toggle-switch-wrapper">
                                <label class="toggle-switch">
                                    <input type="checkbox" name="status" id="status" value="active" {{ old('status', 'active') == 'active' ? 'checked' : '' }}>
                                    <span class="toggle-slider"></span>
                                </label>
                                <span class="toggle-label" id="statusLabel">Active</span>
                            </div>
                            <small class="hint-text">Active products are visible in the store.</small>
                        </div>

                        <!-- Additional Info Box -->
                        <div class="info-box">
                            <i class="fas fa-info-circle"></i>
                            <div>
                                <strong>Note:</strong> All fields marked with <span class="required">*</span> are required.
                                The slug will be automatically generated based on product name if left empty.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORM ACTIONS -->
                <div class="form-actions">
                    <button type="reset" class="btn btn-outline" id="resetBtn">
                        <i class="fas fa-undo-alt"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    /* Enhanced Admin Styling */
    .product-form-container {
        padding: 24px 32px;
        max-width: 1400px;
        margin: 0 auto;
    }

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 28px;
        flex-wrap: wrap;
        gap: 16px;
    }

    .page-title {
        font-size: 28px;
        font-weight: 700;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .page-title i {
        color: #3b82f6;
        font-size: 28px;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 10px;
        font-weight: 500;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.2s ease;
        border: none;
        text-decoration: none;
    }

    .btn-secondary {
        background: #e2e8f0;
        color: #334155;
    }

    .btn-secondary:hover {
        background: #cbd5e1;
        transform: translateY(-1px);
    }

    .btn-primary {
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        color: white;
        box-shadow: 0 2px 8px rgba(59,130,246,0.3);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        transform: translateY(-2px);
        box-shadow: 0 6px 14px rgba(59,130,246,0.35);
    }

    .btn-outline {
        background: white;
        border: 1px solid #cbd5e1;
        color: #475569;
    }

    .btn-outline:hover {
        background: #f8fafc;
        border-color: #94a3b8;
    }

    .card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .card-header {
        padding: 24px 32px;
        border-bottom: 1px solid #e2e8f0;
        background: #fafcff;
    }

    .card-title {
        font-size: 20px;
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 6px;
    }

    .card-subtitle {
        color: #64748b;
        font-size: 14px;
    }

    .card-body {
        padding: 32px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 32px;
    }

    .form-column {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .form-group label {
        font-weight: 600;
        font-size: 14px;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .required {
        color: #ef4444;
    }

    .form-control {
        padding: 12px 16px;
        border: 1.5px solid #e2e8f0;
        border-radius: 12px;
        font-size: 14px;
        font-family: 'Inter', sans-serif;
        transition: all 0.2s;
        background: white;
    }

    .form-control:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59,130,246,0.1);
    }

    .form-control.is-invalid {
        border-color: #ef4444;
        background-color: #fef2f2;
    }

    .error-message {
        font-size: 12px;
        color: #ef4444;
        margin-top: 4px;
    }

    .hint-text {
        font-size: 11px;
        color: #94a3b8;
        margin-top: 4px;
    }

    .form-row.two-col {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .input-prefix {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-prefix .prefix {
        position: absolute;
        left: 14px;
        font-weight: 600;
        color: #64748b;
    }

    .input-prefix .form-control {
        padding-left: 28px;
    }

    .input-with-hint {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    /* File Upload Styling */
    .file-upload-area {
        border: 2px dashed #cbd5e1;
        border-radius: 16px;
        padding: 24px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s;
        background: #fafcff;
        position: relative;
    }

    .file-upload-area:hover {
        border-color: #3b82f6;
        background: #eff6ff;
    }

    .file-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .upload-preview i {
        font-size: 48px;
        color: #94a3b8;
        margin-bottom: 12px;
    }

    .upload-preview p {
        font-size: 14px;
        color: #475569;
        margin: 8px 0;
    }

    .upload-preview small {
        font-size: 11px;
        color: #94a3b8;
    }

    .thumbnail-preview {
        margin-top: 16px;
        max-width: 120px;
        margin-left: auto;
        margin-right: auto;
    }

    .thumbnail-preview img {
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    /* Toggle Switch */
    .toggle-switch-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 52px;
        height: 26px;
    }

    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .toggle-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #cbd5e1;
        transition: 0.3s;
        border-radius: 34px;
    }

    .toggle-slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        transition: 0.3s;
        border-radius: 50%;
    }

    input:checked + .toggle-slider {
        background-color: #3b82f6;
    }

    input:checked + .toggle-slider:before {
        transform: translateX(26px);
    }

    .toggle-label {
        font-weight: 500;
        font-size: 14px;
    }

    .info-box {
        background: #f0f9ff;
        border-left: 4px solid #3b82f6;
        padding: 16px;
        border-radius: 12px;
        display: flex;
        gap: 12px;
        align-items: flex-start;
        margin-top: 8px;
    }

    .info-box i {
        color: #3b82f6;
        font-size: 20px;
        margin-top: 2px;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 16px;
        margin-top: 40px;
        padding-top: 24px;
        border-top: 1px solid #e2e8f0;
    }

    @media (max-width: 768px) {
        .product-form-container {
            padding: 16px;
        }
        .form-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }
        .form-row.two-col {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        .card-body {
            padding: 20px;
        }
    }
</style>

<script>
    // Auto-generate slug from product name (if slug field is empty)
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');

    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start
            .replace(/-+$/, '');            // Trim - from end
    }

    if (nameInput && slugInput) {
        nameInput.addEventListener('blur', function() {
            if (slugInput.value.trim() === '') {
                const generatedSlug = slugify(nameInput.value);
                slugInput.value = generatedSlug;
            }
        });
    }

    // Thumbnail preview
    const thumbnailInput = document.getElementById('thumbnail');
    const previewDiv = document.getElementById('thumbnailPreview');
    const uploadArea = document.getElementById('fileUploadArea');
    const uploadPreviewDiv = document.querySelector('.upload-preview');

    if (thumbnailInput) {
        thumbnailInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && (file.type.startsWith('image/'))) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    if (uploadPreviewDiv) uploadPreviewDiv.style.display = 'none';
                    previewDiv.style.display = 'block';
                    previewDiv.innerHTML = `<img src="${e.target.result}" alt="Thumbnail Preview">`;
                }
                reader.readAsDataURL(file);
            } else {
                if (uploadPreviewDiv) uploadPreviewDiv.style.display = 'block';
                previewDiv.style.display = 'none';
                previewDiv.innerHTML = '';
                if (file) alert('Please select a valid image file (JPG, PNG, WEBP).');
            }
        });
    }

    // Click on upload area triggers file input
    if (uploadArea) {
        uploadArea.addEventListener('click', function(e) {
            if (e.target !== thumbnailInput) {
                thumbnailInput.click();
            }
        });
    }

    // Status toggle label dynamic
    const statusCheckbox = document.getElementById('status');
    const statusLabel = document.getElementById('statusLabel');

    function updateStatusLabel() {
        if (statusCheckbox && statusLabel) {
            if (statusCheckbox.checked) {
                statusLabel.textContent = 'Active';
                statusLabel.style.color = '#10b981';
            } else {
                statusLabel.textContent = 'Inactive';
                statusLabel.style.color = '#ef4444';
            }
        }
    }
    if (statusCheckbox) {
        statusCheckbox.addEventListener('change', updateStatusLabel);
        updateStatusLabel();
    }

    // Reset button confirmation / clear preview
    const resetBtn = document.getElementById('resetBtn');
    if (resetBtn) {
        resetBtn.addEventListener('click', function(e) {
            // optional: reset thumbnail preview manually because native reset doesn't clear file input well
            if (thumbnailInput) {
                thumbnailInput.value = '';
                if (uploadPreviewDiv) uploadPreviewDiv.style.display = 'block';
                if (previewDiv) {
                    previewDiv.style.display = 'none';
                    previewDiv.innerHTML = '';
                }
            }
            // reset slug generation hint is fine
            setTimeout(() => {
                if (slugInput && nameInput && slugInput.value === '') {
                    // if slug remains empty after reset, keep empty
                }
                updateStatusLabel();
            }, 10);
        });
    }

    // Form validation before submit (basic)
    const form = document.getElementById('productForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            const price = document.getElementById('price').value;
            const stock = document.getElementById('stock').value;
            const sku = document.getElementById('sku').value;
            const name = document.getElementById('name').value;
            let hasError = false;

            if (!name.trim()) {
                alert('Product name is required.');
                hasError = true;
            } else if (!sku.trim()) {
                alert('SKU is required.');
                hasError = true;
            } else if (!price || parseFloat(price) <= 0) {
                alert('Please enter a valid price greater than 0.');
                hasError = true;
            } else if (stock === '' || parseInt(stock) < 0) {
                alert('Stock quantity must be 0 or greater.');
                hasError = true;
            } else if (document.getElementById('sale_price').value && parseFloat(document.getElementById('sale_price').value) >= parseFloat(price)) {
                alert('Sale price should be less than regular price.');
                hasError = true;
            }

            if (hasError) {
                event.preventDefault();
            }
        });
    }
</script>
@endsection

@push('styles')
<style>
    /* Additional blade-specific compatibility */
    [x-cloak] { display: none; }
    .form-control.is-invalid {
        border-color: #dc2626;
    }
</style>
@endpush
