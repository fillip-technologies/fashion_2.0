<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }

    // Parent Category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Child Categories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
