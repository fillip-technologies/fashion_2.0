<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
 public function subcateProduct($id,$slug){
   $product = Product::with(['variants','category'])->where('category_id',$id)->paginate(12);
    return view('pages.view-product',compact('product'));
 }
}
