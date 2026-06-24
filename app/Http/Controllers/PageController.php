<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing(){

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
        $products = Product::with(['productImg','category'])->where('category_id',7)->limit(3)->get();
        return view('pages.specific',compact('products'));
    }

    public function filteredProduct()
    {
        return view('pages.filteredprodcuts');
    }

    public function productDetails($id,$slug)
    {
        $details_product = Product::with(['productImg','variants','relatedProducts','price'])->where('id',$id)->orWhere('slug',$slug)->first();
        return view('pages.productdetails',compact('details_product'));
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

    public function fashionLanding()
    {
        return view('pages.fashionlanding');
    }
}
