<?php

namespace App\Http\Controllers\Carts;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


  public function checkout()
    {
         $cartdata = Cart::with(['product'])->where('user_id',UserLogin()->id)->get();
         $totalprice = Cart::where('user_id', UserLogin()->id)->sum('price');
         $shipping = 50;
         $currentPrice = $totalprice + $shipping;
         return view('pages.checkout',compact('cartdata','totalprice','shipping','currentPrice'));
    }


   public function paymentDone(Request $request)
{
    $userdata = UserLogin();

    if (!$userdata->location || !$userdata->phone || !$userdata->address) {
        return response()->json([
            'status' => false,
            'message' => 'First add your address details.'
        ]);
    }

    $tax = ($request->dtype == 'express') ? 200 : 0;

    $cartdata = Cart::with('product')
        ->where('user_id', $userdata->id)
        ->get();

    if ($cartdata->isEmpty()) {
        return response()->json([
            'status' => false,
            'message' => 'Cart is empty.'
        ]);
    }

    $subtotal = $cartdata->sum('price');
    $shipping = 50;
    $totalAmount = $subtotal + $shipping + $tax;

    DB::beginTransaction();

    try {

        $order = Order::create([
            'user_id' => $userdata->id,
            'order_number' => OrderID(),
            'subtotal' => $subtotal,
            'shipping_charge' => $shipping,
            'tax' => $tax,
            'total_amount' => $totalAmount,
            'customer_name' => $userdata->firstname . ' ' . $userdata->lastname,
            'customer_email' => $userdata->email,
            'customer_phone' => $userdata->phone,
            'shipping_address' => $userdata->address,
        ]);

        foreach ($cartdata as $cart) {

            OrderItem::create([
                'order_id'   => $order->id,
                'product_id' => $cart->product_id,
                'price'      => $cart->product->sale_price,
                'quantity'   => $cart->quantity,
                'total'      => $cart->price,
            ]);
        }

        Cart::where('user_id', $userdata->id)->delete();

        DB::commit();

        return response()->json([
            'status' => true,
            'message' => 'Order Created Successfully',
            'order_id' => $order->id,
            'order_number' => $order->order_number,
            'amount' => $totalAmount
        ]);

    } catch (\Exception $e) {

        DB::rollBack();

        return response()->json([
            'status' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}

public function deleteCart($userID,$itemId){
    // echo $userID;
    // echo $itemId;
    $cartdata = Cart::findOrFail($itemId);
    dd($cartdata);
}
}
