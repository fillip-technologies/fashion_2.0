<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/log', [AdminController::class, 'admin'])->name('admin');
Route::post('/login', [AdminController::class, 'admin_login'])->name('login');
Route::get('store', [LoginController::class, 'store'])->name('login.store');

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('product/create',[ProductController::class, 'index'])->name('product.index');
    Route::get('product/image',[ProductController::class, 'product_image'])->name('product.image');
    Route::get('product/price',[ProductController::class, 'product_price'])->name('product.price');
     Route::get('product/color',[ProductController::class, 'product_color'])->name('product.color');
      Route::get('product/category',[ProductController::class, 'product_category'])->name('product.category');
         Route::get('product/variants',[ProductController::class, 'product_variants'])->name('product.variant');

Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});
