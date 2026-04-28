<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
        'product_id',
        'sku',
        'size',
        'color',
        'price',
        'discount_price',
        'stock'
    ];

    // Belongs To Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Final Price Helper
    public function getFinalPriceAttribute()
    {
        return $this->discount_price ?? $this->price;
    }
}
