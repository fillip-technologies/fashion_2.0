<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.products.creat');
    }
    public function product_image(){
        return view('admin.products.Image');
    }
     public function product_price(){
        return view('admin.products.product_price');
    }

      public function product_color(){
        return view('admin.products.color');
    }

    public function product_category(){
        return view('admin.products.category');
    }

    public function product_variants(){
        return view('admin.products.variants.create_variant');
    }


}
