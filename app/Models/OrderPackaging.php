<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderPackaging extends Model
{
    protected $fillable = [
        'order_id',
        'shopping_bag',
        'gift_order',
        'empty_envelope',
        'hide_price_bill',
        'box_packaging',
        'dust_bag',
    ];

    protected $casts = [
        'shopping_bag' => 'boolean',
        'gift_order' => 'boolean',
        'empty_envelope' => 'boolean',
        'hide_price_bill' => 'boolean',
        'box_packaging' => 'boolean',
        'dust_bag' => 'boolean',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
