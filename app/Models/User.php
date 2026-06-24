<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'title',
        'password',
        'phone',
        'month',
        'day',
        'year',
        'location',
        'address',
        'addres_two',
        'state',
        'city',
        'pincode',
        'company',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function orders()
{
    return $this->hasMany(Order::class);
}

  public function wishlist(){
    return $this->hasMany(WishList::class);
  }
}
