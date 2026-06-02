@extends('admin.include.layout')

@section('content')
<style>
    /* Modern CSS for Category Management */
    :root {
        --primary-color: #4f46e5;
        --primary-dark: #4338ca;
        --secondary-color: #10b981;
        --danger-color: #ef4444;
        --warning-color: #f59e0b;
        --text-dark: #1f2937;
        --text-light: #6b7280;
        --border-color: #e5e7eb;
        --bg-light: #f9fafb;
    }

    .category-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Cards */
    .category-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        overflow: hidden;
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .category-card:hover {
        box-shadow: 0 15px 50px rgba(0,0,0,0.12);
    }

    .card-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, #764ba2 100%);
        color: white;
        padding: 25px 30px;
    }

    .card-header h2 {
        margin: 0;
        font-size: 26px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-header p {
        margin: 10px 0 0;
        opacity: 0.9;
        font-size: 14px;
    }

    .card-body {
        padding: 30px;
    }

    /* Form Styles */
    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--text-dark);
        font-size: 14px;
    }

    .form-group label i {
        margin-right: 8px;
        color: var(--primary-color);
    }

    .required-star {
        color: var(--danger-color);
        margin-left: 4px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid var(--border-color);
        border-radius: 10px;
        font-size: 14px;
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .form-control:focus {
        border-color: var(--primary-color);
        outline: none;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
    }

    /* Slug Preview */
    .slug-preview {
        margin-top: 8px;
        padding: 10px;
        background: var(--bg-light);
        border-radius: 8px;
        font-size: 13px;
        color: var(--text-light);
        border-left: 3px solid var(--primary-color);
    }

    .slug-preview i {
        margin-right: 5px;
        color: var(--primary-color);
    }

    .slug-preview span {
        color: var(--primary-color);
        font-weight: 600;
        font-family: monospace;
    }

    /* Button Styles */
    .btn-group {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--primary-color) 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(79, 70, 229, 0.4);
    }

    .btn-secondary {
        background: var(--text-light);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-secondary:hover {
        background: #5a6268;
        transform: translateY(-2px);
    }

    /* Alert Messages */
    .alert {
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
        animation: slideIn 0.3s ease-out;
    }

    .alert-success {
        background: #d1fae5;
        border-left: 4px solid var(--secondary-color);
        color: #065f46;
    }

    .alert-danger {
        background: #fee2e2;
        border-left: 4px solid var(--danger-color);
        color: #991b1b;
    }

    .alert-warning {
        background: #fed7aa;
        border-left: 4px solid var(--warning-color);
        color: #92400e;
    }

    /* Categories Table */
    .table-container {
        overflow-x: auto;
    }

    .category-table {
        width: 100%;
        border-collapse: collapse;
    }

    .category-table thead {
        background: var(--bg-light);
    }

    .category-table th {
        padding: 15px;
        text-align: left;
        font-weight: 600;
        color: var(--text-dark);
        border-bottom: 2px solid var(--border-color);
        font-size: 14px;
    }

    .category-table td {
        padding: 15px;
        border-bottom: 1px solid var(--border-color);
        vertical-align: middle;
    }

    .category-table tbody tr:hover {
        background: var(--bg-light);
        transition: background 0.3s ease;
    }

    /* Badge Styles */
    .badge {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }

    .badge-primary {
        background: #e0e7ff;
        color: var(--primary-color);
    }

    .badge-success {
        background: #d1fae5;
        color: #065f46;
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 10px;
    }

    .btn-edit {
        background: var(--warning-color);
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 12px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .btn-delete {
        background: var(--danger-color);
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 12px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .btn-edit:hover, .btn-delete:hover {
        transform: translateY(-2px);
        filter: brightness(1.1);
    }

    /* Pagination */
    .pagination-container {
        padding: 20px;
        border-top: 1px solid var(--border-color);
    }

    .pagination {
        display: flex;
        justify-content: center;
        gap: 5px;
        list-style: none;
    }

    .pagination li a, .pagination li span {
        padding: 8px 12px;
        border: 1px solid var(--border-color);
        border-radius: 6px;
        color: var(--text-dark);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .pagination li.active span {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
    }

    .pagination li a:hover {
        background: var(--bg-light);
        border-color: var(--primary-color);
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }

    .empty-state i {
        font-size: 64px;
        color: #cbd5e1;
        margin-bottom: 20px;
    }

    .empty-state h3 {
        margin: 0 0 10px;
        color: var(--text-dark);
    }

    .empty-state p {
        color: var(--text-light);
        margin: 0;
    }

    /* Animations */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .category-card {
        animation: fadeIn 0.5s ease-out;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .category-container {
            padding: 10px;
        }

        .card-header {
            padding: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .btn-group {
            flex-direction: column;
        }

        .btn-primary, .btn-secondary {
            width: 100%;
            justify-content: center;
        }

        .action-buttons {
            flex-direction: column;
        }

        .category-table th, .category-table td {
            padding: 10px;
        }
    }

    /* Loading Spinner */
    .spinner {
        display: none;
        width: 20px;
        height: 20px;
        border: 2px solid rgba(255,255,255,0.3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }
</style>

<div class="category-container">
    <!-- Add Category Form -->
    <div class="category-card">
        <div class="card-header">
            <h2>
                <i class="fas fa-folder-plus"></i>
                Add New Category
            </h2>
            <p>Create and manage product categories</p>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-triangle"></i>
                    <div>
                        @foreach($errors->all() as $error)
                            • {{ $error }}<br>
                        @endforeach
                    </div>
                </div>
            @endif

            <form action="" method="POST" id="categoryForm">
                @csrf

                <div class="form-group">
                    <label for="name">
                        <i class="fas fa-tag"></i> Category Name
                        <span class="required-star">*</span>
                    </label>
                    <input type="text"
                           name="name"
                           id="name"
                           class="form-control @error('name') is-invalid @enderror"
                           placeholder="Enter category name (e.g., Electronics, Fashion, Books)"
                           value="{{ old('name') }}"
                           required
                           autofocus>
                    <div class="slug-preview" id="slugPreview" style="display: none;">
                        <i class="fas fa-link"></i> Generated Slug: <span id="generatedSlug"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="slug">
                        <i class="fas fa-link"></i> Category Slug
                        <span class="required-star">*</span>
                    </label>
                    <input type="text"
                           name="slug"
                           id="slug"
                           class="form-control @error('slug') is-invalid @enderror"
                           placeholder="e.g., electronics, fashion-books"
                           value="{{ old('slug') }}"
                           required>
                    <div class="slug-preview">
                        <i class="fas fa-globe"></i> URL:
                        <span id="urlPreview">/category/</span>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn-primary" id="submitBtn">
                        <i class="fas fa-save"></i> Create Category
                        <span class="spinner" id="loadingSpinner"></span>
                    </button>
                    <button type="reset" class="btn-secondary" onclick="resetForm()">
                        <i class="fas fa-undo-alt"></i> Reset
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Categories List -->
    <div class="category-card">
        <div class="card-header" style="background: linear-gradient(135deg, #3b82f6 0%, #2dd4bf 100%);">
            <h2>
                <i class="fas fa-list"></i>
                All Categories
            </h2>
            <p>Total Categories: <strong>0</strong></p>
        </div>
        <div class="card-body">

        </div>
    </div>
</div>

<script>
    // Auto-generate slug from name
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');
    const slugPreview = document.getElementById('slugPreview');
    const generatedSlugSpan = document.getElementById('generatedSlug');
    const urlPreviewSpan = document.getElementById('urlPreview');

    function generateSlug(text) {
        return text
            .toString()
            .toLowerCase()
            .trim()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
    }

    nameInput.addEventListener('keyup', function() {
        const name = this.value;
        if(name) {
            const generatedSlug = generateSlug(name);
            slugInput.value = generatedSlug;
            generatedSlugSpan.textContent = generatedSlug;
            slugPreview.style.display = 'block';
            urlPreviewSpan.textContent = '/category/' + generatedSlug;
        } else {
            slugPreview.style.display = 'none';
            urlPreviewSpan.textContent = '/category/';
        }
    });

    slugInput.addEventListener('keyup', function() {
        if(this.value) {
            urlPreviewSpan.textContent = '/category/' + this.value;
        } else {
            urlPreviewSpan.textContent = '/category/';
        }
    });

    // Form submission with loading state
    const form = document.getElementById('categoryForm');
    const submitBtn = document.getElementById('submitBtn');
    const loadingSpinner = document.getElementById('loadingSpinner');

    form.addEventListener('submit', function() {
        submitBtn.disabled = true;
        submitBtn.style.opacity = '0.7';
        loadingSpinner.style.display = 'inline-block';
    });

    function resetForm() {
        nameInput.value = '';
        slugInput.value = '';
        slugPreview.style.display = 'none';
        urlPreviewSpan.textContent = '/category/';
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
    }

    function editCategory(id) {
        // You can implement AJAX for inline editing or redirect to edit page
        window.location.href = '/admin/categories/' + id + '/edit';
    }

    // Add animation to new rows
    const tableRows = document.querySelectorAll('.category-table tbody tr');
    tableRows.forEach((row, index) => {
        row.style.animation = `fadeIn 0.3s ease-out ${index * 0.05}s`;
        row.style.opacity = '0';
        row.style.animationFillMode = 'forwards';
    });
</script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection
