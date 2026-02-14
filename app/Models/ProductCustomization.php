<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCustomization extends Model
{
    use HasFactory;

    protected $table = 'product_customizations';
    protected $fillable = [
        'user_id',
        'product_id',
        'message',
        'images',
        'theme_color',
        'color_code',
        'notes',
        'gift_wrap',
    ];

    protected $casts = [
        'images' => 'array',
        'gift_wrap' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
