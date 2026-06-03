@extends('admin.include.layout')

@section('content')
    <style>
        /* Modern CSS for Price Management */
        .price-management-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .price-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .price-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px 30px;
        }

        .price-header h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }

        .price-header p {
            margin: 10px 0 0;
            opacity: 0.9;
        }

        .price-body {
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

        select.form-control {
            cursor: pointer;
            background-color: white;
        }

        /* Price Input Group */
        .price-input-group {
            position: relative;
        }

        .currency-symbol {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px;
            color: #667eea;
            font-weight: bold;
        }

        .price-input-group .form-control {
            padding-left: 35px;
        }

        /* Button Styles */
        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
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

        .btn-secondary {
            background: #6c757d;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-secondary:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }

        /* Price List Table */
        .price-list-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .price-list-header {
            background: #f8f9fa;
            padding: 20px 30px;
            border-bottom: 2px solid #e1e5e9;
        }

        .price-list-header h3 {
            margin: 0;
            color: #333;
            font-size: 20px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .price-table {
            width: 100%;
            border-collapse: collapse;
        }

        .price-table thead {
            background: #f8f9fa;
        }

        .price-table th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: #555;
            border-bottom: 2px solid #e1e5e9;
        }

        .price-table td {
            padding: 15px;
            border-bottom: 1px solid #e1e5e9;
        }

        .price-table tr:hover {
            background: #f8f9fa;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-success {
            background: #d1fae5;
            color: #065f46;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-edit {
            background: #ffc107;
            color: #333;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            transform: translateY(-1px);
        }

        /* Alert Messages */
        .alert {
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 4px solid;
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

        /* Country Flag Styles */
        .country-option {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .currency-display {
            font-weight: bold;
            color: #667eea;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 15px;
            }

            .btn-group {
                flex-direction: column;
            }

            .btn-primary,
            .btn-secondary {
                width: 100%;
                text-align: center;
            }
        }

        /* Animation */
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

        .price-card,
        .price-list-card {
            animation: slideIn 0.5s ease-out;
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
    <div class="price-management-container">
        <!-- Add Price Form -->
        <div class="price-card">
            <div class="price-header">
                <h2><i class="fas fa-tag"></i> Add Product Price</h2>
                <p>Manage product pricing for different countries</p>
            </div>
            <div class="price-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i>
                        @foreach ($errors->all() as $error)
                            • {{ $error }}<br>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('admin.store.price') }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="form-group">
                            <label for="product_id">
                                <i class="fas fa-box"></i> Select Product
                                <span class="required-star">*</span>
                            </label>
                            <select name="product_id" id="product_id"
                                class="form-control @error('product_id') is-invalid

                            @enderror">
                                <option value="">-- Choose Product --</option>
                                @foreach (allProduct() as $product)
                                    <option value="{{ $product->id }}">
                                        {{ $product->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country">
                                <i class="fas fa-globe"></i> Country
                                <span class="required-star">*</span>
                            </label>
                            <select name="country" id="country"
                                class="form-control @error('country')
                               is-invalid
                        @enderror">
                                <option value="">-- Select Country --</option>
                                <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>
                                    🇮🇳 India (₹ INR)
                                </option>
                                <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>
                                    🇺🇸 USA ($ USD)
                                </option>
                                <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>
                                    🇬🇧 UK (£ GBP)
                                </option>
                                <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>
                                    🇨🇦 Canada (C$ CAD)
                                </option>
                                <option value="Australia" {{ old('country') == 'Australia' ? 'selected' : '' }}>
                                    🇦🇺 Australia (A$ AUD)
                                </option>
                                <option value="UAE" {{ old('country') == 'UAE' ? 'selected' : '' }}>
                                    🇦🇪 UAE (د.إ AED)
                                </option>
                                <option value="Singapore" {{ old('country') == 'Singapore' ? 'selected' : '' }}>
                                    🇸🇬 Singapore (S$ SGD)
                                </option>
                                <option value="Germany" {{ old('country') == 'Germany' ? 'selected' : '' }}>
                                    🇩🇪 Germany (€ EUR)
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">
                                <i class="fas fa-dollar-sign"></i> Price
                                <span class="required-star">*</span>
                            </label>
                            <div class="price-input-group">
                                <span class="currency-symbol" id="currencySymbol">$</span>
                                <input type="number" name="price" id="price"
                                    class="form-control @error('price') is-invalid

                                @enderror"
                                    placeholder="Enter price" step="0.01" value="{{ old('price') }}">
                            </div>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-save"></i> Save Price
                        </button>

                    </div>
                </form>
            </div>
        </div>


    </div>

    <script>
        // Dynamic currency symbol based on country selection
        const countrySelect = document.getElementById('country');
        const currencySymbol = document.getElementById('currencySymbol');

        const currencyMap = {
            'India': '₹',
            'USA': '$',
            'UK': '£',
            'Canada': 'C$',
            'Australia': 'A$',
            'UAE': 'د.إ',
            'Singapore': 'S$',
            'Germany': '€'
        };

        countrySelect.addEventListener('change', function() {
            const selectedCountry = this.value;
            if (currencyMap[selectedCountry]) {
                currencySymbol.textContent = currencyMap[selectedCountry];
            } else {
                currencySymbol.textContent = '$';
            }
        });

        function editPrice(id) {
            // Implement edit functionality
            window.location.href = '/admin/product-prices/' + id + '/edit';
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection
