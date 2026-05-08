<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_no',
        'subtotal',
        'tax',
        'shipping_charge',
        'grand_total',
        'payment_status',
        'order_status',
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'shipping_charge' => 'decimal:2',
        'grand_total' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function packaging()
    {
        return $this->hasOne(OrderPackaging::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
