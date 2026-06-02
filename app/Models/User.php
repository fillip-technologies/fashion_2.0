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
        'company'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
