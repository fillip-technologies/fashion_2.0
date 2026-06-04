@extends('admin.include.layout')

@section('content')
<style>
    /* Color Management CSS */
    .color-management-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Color Card Styles */
    .color-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        overflow: hidden;
        margin-bottom: 30px;
    }

    .color-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 25px 30px;
    }

    .color-header h2 {
        margin: 0;
        font-size: 28px;
        font-weight: 600;
    }

    .color-header p {
        margin: 10px 0 0;
        opacity: 0.9;
    }

    .color-body {
        padding: 30px;
    }

    /* Form Styles */
    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 25px;
        flex-wrap: wrap;
    }

    .form-group {
        flex: 1;
        min-width: 200px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
        font-size: 14px;
    }

    .form-group label i {
        margin-right: 8px;
        color: #667eea;
    }

    .required-star {
        color: #dc3545;
        margin-left: 4px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e1e5e9;
        border-radius: 10px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #667eea;
        outline: none;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    /* Color Picker Styles */
    .color-input-group {
        position: relative;
    }

    .color-preview {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        width: 30px;
        height: 30px;
        border-radius: 8px;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        cursor: pointer;
    }

    input[type="color"] {
        width: 100%;
        height: 50px;
        padding: 5px;
        border: 2px solid #e1e5e9;
        border-radius: 10px;
        cursor: pointer;
    }

    /* Button Styles */
    .btn-group {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    .btn-danger {
        background: #dc3545;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-danger:hover {
        background: #c82333;
        transform: translateY(-1px);
    }

    .btn-edit {
        background: #ffc107;
        color: #333;
        border: none;
        padding: 8px 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-edit:hover {
        background: #e0a800;
        transform: translateY(-1px);
    }

    /* Color Grid Display */
    .color-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
        margin-top: 30px;
    }

    .color-item {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .color-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .color-preview-large {
        height: 150px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .color-code-badge {
        background: rgba(0,0,0,0.7);
        color: white;
        padding: 8px 15px;
        border-radius: 20px;
        font-family: monospace;
        font-size: 14px;
        backdrop-filter: blur(5px);
    }

    .color-info {
        padding: 20px;
        background: white;
    }

    .color-name {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin: 0 0 10px 0;
    }

    .color-code {
        font-size: 14px;
        color: #666;
        font-family: monospace;
        margin: 0 0 15px 0;
    }

    .color-actions {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
    }

    /* Alert Messages */
    .alert {
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        border-left: 4px solid;
        animation: slideIn 0.3s ease-out;
    }

    .alert-success {
        background: #d1fae5;
        border-left-color: #10b981;
        color: #065f46;
    }

    .alert-danger {
        background: #fee2e2;
        border-left-color: #dc2626;
        color: #991b1b;
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        animation: fadeIn 0.3s ease-out;
    }

    .modal-content {
        background: white;
        margin: 5% auto;
        width: 90%;
        max-width: 500px;
        border-radius: 20px;
        animation: slideDown 0.3s ease-out;
    }

    .modal-header {
        padding: 20px 25px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 20px 20px 0 0;
    }

    .modal-body {
        padding: 25px;
    }

    .modal-footer {
        padding: 20px 25px;
        border-top: 1px solid #e1e5e9;
        display: flex;
        gap: 10px;
        justify-content: flex-end;
    }

    .close {
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
        color: white;
    }

    .close:hover {
        opacity: 0.7;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }

    .empty-state i {
        font-size: 80px;
        color: #ccc;
        margin-bottom: 20px;
    }

    .empty-state h3 {
        color: #666;
        margin-bottom: 10px;
    }

    /* Animations */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .color-grid {
            grid-template-columns: 1fr;
        }

        .form-row {
            flex-direction: column;
        }

        .btn-group {
            flex-direction: column;
        }

        .btn-primary {
            width: 100%;
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
<div class="color-management-container">
    <!-- Add Color Form Card -->
    <div class="color-card">
        <div class="color-header">
            <h2><i class="fas fa-palette"></i> Color Management</h2>
            <p>Add and manage colors for your products</p>
        </div>
        <div class="color-body">
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle"></i>
                    @foreach($errors->all() as $error)
                        • {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.store.color') }}" method="POST" >
                @csrf

                <div class="form-row">
                    <div class="form-group">
                        <label for="name">
                            <i class="fas fa-tag"></i> Color Name
                            <span class="required-star">*</span>
                        </label>
                        <input type="text"
                               name="name"
                               id="name"
                               class="form-control"
                               placeholder="e.g., Red, Blue, Green"
                               value="{{ old('name') }}"
                               >
                    </div>

                    <div class="form-group">
                        <label for="code">
                            <i class="fas fa-fill-drip"></i> Color Code
                            <span class="required-star">*</span>
                        </label>
                        <div class="color-input-group">
                            <input type="text"
                                   name="code"
                                   id="code"
                                   class="form-control"
                                   placeholder="#FF0000 or rgb(255,0,0)"
                                   value="{{ old('code') }}"
                                   >
                            <div class="color-preview" id="colorPreview" style="background-color: {{ old('code', '#667eea') }}"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="colorPicker">
                            <i class="fas fa-eyedropper"></i> Color Picker
                        </label>
                        <input type="color"
                               id="colorPicker"
                               class="form-control"
                               value="{{ old('code', '#667eea') }}">
                    </div>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn-primary" id="submitBtn">
                        <i class="fas fa-save"></i> Add Color
                    </button>
                    <button type="button" class="btn-primary" onclick="resetForm()" style="background: #6c757d;">
                        <i class="fas fa-redo"></i> Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="px-6 py-4 border-b">
        <h2 class="text-xl font-semibold text-gray-800">
            Color Listing
        </h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-600">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3">#</th>
                    <th class="px-6 py-3">Color Name</th>
                    <th class="px-6 py-3">Color Preview</th>
                    <th class="px-6 py-3 text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4 font-medium">Red</td>
                    <td class="px-6 py-4">
                        <span class="w-6 h-6 rounded-full bg-red-500 inline-block border"></span>
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

                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">2</td>
                    <td class="px-6 py-4 font-medium">Blue</td>
                    <td class="px-6 py-4">
                        <span class="w-6 h-6 rounded-full bg-blue-500 inline-block border"></span>
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

                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">3</td>
                    <td class="px-6 py-4 font-medium">Green</td>
                    <td class="px-6 py-4">
                        <span class="w-6 h-6 rounded-full bg-green-500 inline-block border"></span>
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

                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">4</td>
                    <td class="px-6 py-4 font-medium">Black</td>
                    <td class="px-6 py-4">
                        <span class="w-6 h-6 rounded-full bg-black inline-block border"></span>
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

                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">5</td>
                    <td class="px-6 py-4 font-medium">White</td>
                    <td class="px-6 py-4">
                        <span class="w-6 h-6 rounded-full bg-white inline-block border border-gray-400"></span>
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

    const colorCodeInput = document.getElementById('code');
    const colorPreview = document.getElementById('colorPreview');
    const colorPicker = document.getElementById('colorPicker');

    colorCodeInput.addEventListener('input', function() {
        const colorValue = this.value;
        colorPreview.style.backgroundColor = colorValue;
        if (isValidColor(colorValue)) {
            colorPicker.value = colorValue;
        }
    });


    colorPicker.addEventListener('input', function() {
        const colorValue = this.value;
        colorCodeInput.value = colorValue;
        colorPreview.style.backgroundColor = colorValue;
    });
    function isValidColor(color) {
        const hexPattern = /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/;
        const rgbPattern = /^rgb\((\d{1,3},\s*\d{1,3},\s*\d{1,3})\)$/;
        return hexPattern.test(color) || rgbPattern.test(color);
    }

    function resetForm() {
        document.getElementById('colorForm').reset();
        colorPreview.style.backgroundColor = '#667eea';
        colorPicker.value = '#667eea';
    }


    let currentColorId = null;

    function editColor(id, name, code) {
        currentColorId = id;
        const modal = document.getElementById('editModal');
        const editForm = document.getElementById('editForm');
        const editName = document.getElementById('edit_name');
        const editCode = document.getElementById('edit_code');
        const editPreview = document.getElementById('edit_preview');

        editForm.action = `/admin/colors/${id}`;
        editName.value = name;
        editCode.value = code;
        editPreview.style.backgroundColor = code;

        modal.style.display = 'block';
        editCode.addEventListener('input', function() {
            editPreview.style.backgroundColor = this.value;
        });
    }

    function closeModal() {
        const modal = document.getElementById('editModal');
        modal.style.display = 'none';
    }

    // Close modal when clicking on X
    const closeBtn = document.querySelector('.close');
    if (closeBtn) {
        closeBtn.onclick = function() {
            closeModal();
        }
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        const modal = document.getElementById('editModal');
        if (event.target == modal) {
            closeModal();
        }
    }


    document.getElementById('colorForm').addEventListener('submit', function(e) {
        const name = document.getElementById('name').value.trim();
        const code = document.getElementById('code').value.trim();

        if (!name) {
            e.preventDefault();
            alert('Please enter color name!');
            return false;
        }

        if (!code) {
            e.preventDefault();
            alert('Please enter color code!');
            return false;
        }


        if (!isValidColor(code)) {
            e.preventDefault();
            alert('Please enter valid color code (e.g., #FF0000 or rgb(255,0,0))!');
            return false;
        }

        const submitBtn = document.getElementById('submitBtn');
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Adding...';
        submitBtn.disabled = true;
    });
</script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection
