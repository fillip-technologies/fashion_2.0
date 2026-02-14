<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderCancel;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderCancelController extends Controller
{
    public function get_cancel_order()
{
    $uid = Auth::id();
    $orderCanceldata = OrderCancel::where('user_id', $uid)->get();
    $product_ids = $orderCanceldata->pluck('product_id')->toArray();
    $product_data = Product::with(['variants', 'category'])
        ->whereIn('id', $product_ids)
        ->get();
    return view('pages.cancelorder', compact('orderCanceldata', 'product_data'));
}


    public function cancelOrder(Request $request)
    {

        $request->validate([
            'order_id'   => 'required|integer',
            'product_id' => 'required|integer',
            'user_id'    => 'required|integer',
            'reason'     => 'required|string|max:255',
        ]);

        $order = \App\Models\Order::find($request->order_id);

        if (!$order) {
            return back()->with('error', 'Order not found!');
        }

       $orderCancel= OrderCancel::create([
            'order_id'   => $request->order_id,
            'product_id' => $request->product_id,
            'user_id'    => $request->user_id,
            'reason'     => $request->reason,
        ]);

        Order::where('id',$orderCancel->order_id)->first()->delete();
        $order->status = 'Canceled';
        $order->save();

        return back()->with('success', 'Order has been canceled successfully!');
    }


}
