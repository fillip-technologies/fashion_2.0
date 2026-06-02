<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
protected $primaryKey = 'id';
protected $table = "product_prices";
protected $fillable = ['product_id','price','country'];


public function product(){
    return $this->belongsTo(Product::class);
}


}
