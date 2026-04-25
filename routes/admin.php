<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'admin'])->name('admin');
Route::post('login', [AdminController::class, 'admin_login'])->name('login');
Route::get('store', [LoginController::class, 'store'])->name('login.store');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware(['admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('variants', ProductVariantController::class);

Route::post('admin/store/message',[MessageController::class, 'adminStoreMsg'])->name('store.message');
    Route::get('/users', function () {
        return 'This is the admin users list';
    })->name('users');

    Route::get('/settings', function () {
        return 'Admin settings page';
    })->name('settings');


    // product setting prices

    // Admin Dashboard
    // Route::get('admin/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('dashboard');

    // Users List
    Route::get('/users', function () {
        return 'This is the admin users list';
    })->name('users');

    // Settings Page
    Route::get('/settings', function () {
        return 'Admin settings page';
    })->name('settings');
});
