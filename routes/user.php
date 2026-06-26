<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Carts\CartManagementController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->middleware(['user'])->group(function(){
Route::controller(UserController::class)->group(function(){
Route::get('/welcome', 'WelcomeUser')->name('user.welcome');
Route::get('/aacount', 'UserDashboard')->name('user.account');
Route::get('/profile', 'profile')->name('user.profile');
Route::get("/wishlist", 'wishList')->name('user.wishlist');
Route::get('/oreder', 'oredrList')->name('user.orders');
Route::get('/addressbook', 'addressBook')->name('user.addressbook');
Route::get('/logout', 'UserLogout')->name('user.loggedout');
Route::post('/update/profile','update.profile')->name('update.profile');
});
Route::controller(CartManagementController::class)->group(function(){
Route::post('/add/to/cart','addToCart')->name('add.To.Cart');
Route::get('/bag','cardList')->name('bag');
Route::post('update/qyt','updateQuantity')->name('cart.update.quantity');
Route::get('/checkout','checkout')->name('checkout');
Route::post('/paymentDone','paymentDone')->name('payment.done');
Route::delete('/card/item/{itemId}/delete/{userID}',[CartManagementController::class, 'deleteCart'])->name('delete.cart');
});
});
