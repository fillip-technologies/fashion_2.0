<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/yarn-story', function () {
    return view('pages.yarnstory');
});

Route::get('/journey', function () {
    return view('pages.journey');
});

Route::get('/lookbook', function () {
    return view('pages.lookbook');
});

Route::get('/yarn', function () {
    return view('pages.yarn');
});

Route::get('/newcollection', function () {
    return view('pages.newcollection');
});

Route::get('/seeall', function () {
    return view('pages.seeall');
});

Route::get('/specific', function () {
    return view('pages.specific');
});

Route::get('/filteredproduct', function () {
    return view('pages.filteredprodcuts');
});

Route::get('/productdetails', function () {
    return view('pages.productdetails');
});

Route::get('/createaccount', function () {
    return view('pages.createaccount');
});

Route::get('/accountconfirmed', function () {
    return view('pages.accountconfirmed');
});

Route::get('/bag', function () {
    return view('pages.bag');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/order-completed', function () {
    return view('pages.confirmorder');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/location', function () {
    return view('pages.location');
});









