<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->middleware(['user'])->group(function(){
    Route::get('/welcome',[UserController::class, 'WelcomeUser'])->name('user.welcome');
Route::get('/aacount',[UserController::class, 'UserDashboard'])->name('user.account');
Route::get('/profile',[UserController::class, 'profile'])->name('user.profile');
Route::get("/wishlist",[UserController::class, 'wishList'])->name('user.wishlist');
Route::get('/oreder',[UserController::class, 'oredrList'])->name('user.orders');
Route::get('/addressbook',[UserController::class, 'addressBook'])->name('user.addressbook');
Route::get('/logout',[UserController::class, 'UserLogout'])->name('user.loggedout');
});
