<?php

namespace App\Http\Controllers;

use App\Models\OredrSupport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class OrderSupportController extends Controller
{
    public function get_msg(){
     $uid = Auth::id();
      $msgs = OredrSupport::where('order_id', 101)
        ->whereIn('status', [1, 2])
        ->orderBy('created_at', 'asc')
        ->get(['order_id', 'message', 'status', 'created_at']);
    }

    public function store_msg(Request $request){

    }
}
