<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function addWhishList(Request $request){

        $request->validate([
            'user_id'=>'required|exists:users,id',
            'product_id'=>'required|exists:products,id'
        ]);

        $data = CreateData(WishList::class,$request->all());
        if($data){
            return back()->with('success','It Items Add To Wishlisht');
        }else {
            return back()->with('error','Something went wrong');
        }

    }

    
}
