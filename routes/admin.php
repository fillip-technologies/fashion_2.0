<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EditManagementController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Carts\CartManagementController;
use App\Http\Controllers\User\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/admin/log', [AdminController::class, 'admin'])->name('admin');
Route::post('/login', [AdminController::class, 'admin_login'])->name('login');
Route::get('store', [LoginController::class, 'store'])->name('login.store');

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');


     Route::controller(EditManagementController::class)->group(function(){
       Route::get('product/edit/{id}','editproduct')->name('edit.product');
       Route::post('/update/product/{id}','update_product')->name('product.update');
       Route::delete('/product/delete/{id}','product_delete')->name('delete.product');
       Route::get('/edit/price/{id}','editPrice')->name('edit.price');
       Route::post('/price/update/{id}','update_price')->name('update.price');
       Route::delete('price/{id}/delete','price_delete')->name('price.delete');
       Route::get('/color/{id}/edit','editColor')->name('edit.color');
       Route::post('color/{id}/update','update_color')->name('color.update');
       Route::delete('color/{id}/delete','delete_color')->name('color.delete');
        Route::get('/size/{id}/edit','editsize')->name('edit.size');
       Route::post('size/{id}/update','size_update')->name('size.update');
       Route::delete('size/{id}/delete','delete_size')->name('size.delete');
       Route::get('/image/{id}/edit','editimage')->name('edit.image');
       Route::post('image/{id}/update','image_update')->name('image.update');
       Route::get('image/del/by','del_image_index')->name('index.image.del');
       Route::delete('image/{id}/delete','delete_image')->name('image.delete');

       Route::get('/product_variant/{id}/edit','editproduct_variant')->name('edit.product_variant');
       Route::post('/product_variant/{id}/update','product_variant_update')->name('product_variant.update');
       Route::get('/product_variant/del/by','del_product_variant_index')->name('index.product_variant.del');
       Route::delete('/product_variant/{id}/delete','delete_product_variant')->name('product_variant.delete');

     });

    Route::controller(ProductController::class)->group(function(){
    Route::get('product/index','produtList')->name('product.index');
    Route::get('product/image','product_image')->name('product.image');
    Route::get('product/price','product_price')->name('product.price');
    Route::get('product/color','product_color')->name('product.color');
    Route::get('product/category','product_category')->name('product.category');
    Route::get('product/variants','product_variants')->name('product.variant');
    Route::get('product/create','index')->name('product.create');
    Route::get('/product/size','sizes')->name('index.size');
     Route::post('store/product', 'store_product')->name('store.product');
     Route::post('store/price', 'store_price')->name('store.price');
     Route::post('store/color', 'store_color')->name('store.color');
     Route::post('store/images/product', 'store_image')->name('store.images.product');
     Route::post('/store/size', 'store_size')->name('store.size');
     Route::post('/store/product/variant', 'store_product_variant')->name('store.product.variant');
     });
     
    Route::get('/query/list',[ContactController::class, 'queryList'])->name('query.list');
    Route::get('/order/list',[CartManagementController::class, 'OrderList'])->name('orders.index');
    Route::post('store/categories', [CategoryController::class, 'store_category'])->name('add.categories');
    Route::get('/edit/category/{id}', [CategoryController::class, 'edit_category'])->name('edit.categories');
    Route::post('update/category/{id}', [CategoryController::class, 'update_category'])->name('update.category');
    Route::delete('delete/category/{id}', [CategoryController::class, 'delete_category'])->name('delete.categories');
    Route::get('/search/order',[CartManagementController::class, 'orderFilter'])->name('search.order');
      Route::get('logout', [AdminController::class, 'logout'])->name('logout');
      Route::delete('users/delete/{id}',[AdminController::class ,'deleteUser'])->name('delete.user');
      Route::get('user/list',[AdminController::class ,'userList'])->name('users.list');

});
