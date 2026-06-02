<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.landing');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function yarnStory()
    {
        return view('pages.yarnstory');
    }

    public function journey()
    {
        return view('pages.journey');
    }

    public function lookbook()
    {
        return view('pages.lookbook');
    }

    public function yarn()
    {
        return view('pages.yarn');
    }

    public function newCollection()
    {
        return view('pages.newcollection');
    }

    public function seeAll()
    {
        return view('pages.seeall');
    }

    public function specific()
    {
        return view('pages.specific');
    }

    public function filteredProduct()
    {
        return view('pages.filteredprodcuts');
    }

    public function productDetails()
    {
        return view('pages.productdetails');
    }

    public function createAccount()
    {
        return view('pages.createaccount');
    }

    public function accountConfirmed()
    {
        return view('pages.accountconfirmed');
    }

    public function bag()
    {
        return view('pages.bag');
    }

    public function test()
    {
        return view('test');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function orderCompleted()
    {
        return view('pages.confirmorder');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function location()
    {
        return view('pages.location');
    }

    public function accountOverview()
    {
        return view('pages.accountoverview');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function wishlist()
    {
        return view('pages.wishlist');
    }

    public function orders()
    {
        return view('pages.orders');
    }

    public function orderHistory()
    {
        return view('pages.orderhistory');
    }

    public function viewDetails()
    {
        return view('pages.viewdetails');
    }

    public function addressBook()
    {
        return view('pages.addressbook');
    }

    public function shippingAddress()
    {
        return view('pages.shippingaddress');
    }

    public function billingAddress()
    {
        return view('pages.billingaddress');
    }

    public function sitemap()
    {
        return view('pages.sitemap');
    }

    public function fashionlanding()
    {
        return view('pages.fashionlanding');
    }

    public function aboutPage()
    {
        return view('pages.about');
    }

    public function admin_login()
    {
        return view('admin.login.signin');
    }
}
