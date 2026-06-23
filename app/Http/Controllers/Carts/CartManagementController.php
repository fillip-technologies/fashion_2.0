<?php

namespace App\Http\Controllers\Carts;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartManagementController extends Controller
{
    public function cardList(){
        $cartdata = Cart::with(['product'])->where('user_id',UserLogin()->id)->get();
       $totalprice = Cart::where('user_id', UserLogin()->id)->sum('price');
        return view('pages.bag',compact('cartdata','totalprice'));
    }

    public function addToCart(Request $request)
{
    $request->validate([
        'user_id'    => 'required|integer|exists:users,id',
        'product_id' => 'required|integer|exists:products,id',
        'price'      => 'required',
        'quantity'   => 'required|integer|min:1'
    ]);

    $cart = Cart::create([
        'user_id'    => $request->user_id,
        'product_id' => $request->product_id,
        'price'      => $request->price,
        'quantity'   => $request->quantity,
    ]);

    $fistItem = Cart::with(['product'])->where('user_id',UserLogin()->id)->first();
    return response()->json([
        'status'  => true,
        'message' => 'Product Added To Cart Successfully',
        'data'    => $fistItem
    ]);
}

public function updateQuantity(Request $request)
{
    $cart = Cart::where('user_id', UserLogin()->id)
                ->where('product_id', $request->product_id)
                ->firstOrFail();
    $unitPrice = $cart->product->sale_price;
    if ($request->action == 'plus') {
        $cart->quantity += 1;
        $cart->price += $unitPrice;

    } elseif ($request->action == 'minus' && $cart->quantity > 1) {
        $cart->quantity -= 1;
        $cart->price -= $unitPrice;
    }
    $cart->save();
    return response()->json([
        'status' => true,
        'quantity' => $cart->quantity,
        'price' => $cart->price
    ]);
}
}
