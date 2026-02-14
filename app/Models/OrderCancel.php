<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderCancel extends Model
{
    protected $table = 'order_cancels';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'product_id', 'reason', 'order_id'];

    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
