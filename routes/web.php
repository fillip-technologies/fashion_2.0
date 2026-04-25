<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/yarn-story', [HomeController::class, 'yarnStory']);
Route::get('/journey', [HomeController::class, 'journey']);
Route::get('/lookbook', [HomeController::class, 'lookbook']);
Route::get('/yarn', [HomeController::class, 'yarn']);
Route::get('/newcollection', [HomeController::class, 'newCollection']);
Route::get('/seeall', [HomeController::class, 'seeAll']);
Route::get('/specific', [HomeController::class, 'specific']);
Route::get('/filteredproduct', [HomeController::class, 'filteredProduct']);
Route::get('/productdetails', [HomeController::class, 'productDetails']);
Route::get('/createaccount', [HomeController::class, 'createAccount']);
Route::get('/accountconfirmed', [HomeController::class, 'accountConfirmed']);
Route::get('/bag', [HomeController::class, 'bag']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/order-completed', [HomeController::class, 'orderCompleted']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/location', [HomeController::class, 'location']);
Route::get('/accountoverview', [HomeController::class, 'accountOverview']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/wishlist', [HomeController::class, 'wishlist']);
Route::get('/orders', [HomeController::class, 'orders']);
Route::get('/orderhistory', [HomeController::class, 'orderHistory']);
Route::get('/viewdetails', [HomeController::class, 'viewDetails']);
Route::get('/addressbook', [HomeController::class, 'addressBook']);
Route::get('/shippingaddress', [HomeController::class, 'shippingAddress']);
Route::get('/billingaddress', [HomeController::class, 'billingAddress']);
Route::get('/sitemap', [HomeController::class, 'sitemap']);
