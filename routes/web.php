<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::controller(UserController::class)->group(function(){
Route::post('/create/users','createUsers')->name('create.users');
Route::post('/login/user','UserLogin')->name('user.login');
});

Route::controller(PageController::class)->group(function () {
    Route::get('/','landing');
    Route::get('/about', 'about');
    Route::get('/yarn-story', 'yarnStory');
    Route::get('/journey', 'journey');
    Route::get('/lookbook', 'lookbook');
    Route::get('/yarn', 'yarn');
    Route::get('/newcollection', 'newCollection');
    Route::get('/seeall', 'seeAll');
    Route::get('/specific', 'specific');
    Route::get('/filteredproduct', 'filteredProduct');
    Route::get('/productdetails/{pid}/{slug}', 'productDetails')->name('product.details');;
    Route::get('/createaccount', 'createAccount');
    Route::get('/accountconfirmed', 'accountConfirmed');
    // Route::get('/bag', 'bag');
    Route::get('/test', 'test');

    Route::get('/order-completed', 'orderCompleted');
    Route::get('/contact', 'contact');
    Route::get('/location', 'location');
    Route::get('/orderhistory', 'orderHistory');
    Route::get('/viewdetails', 'viewDetails');
    Route::get('/addressbook', 'addressBook');
    Route::get('/shippingaddress', 'shippingAddress');
    Route::get('/billingaddress', 'billingAddress');
    Route::get('/sitemap', 'sitemap');
    Route::get('/fashionlanding', 'fashionLanding');
});
