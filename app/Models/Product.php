<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'product_name',
        'product_SKU',
        'product_category',
        'product_description',
        'product_image'
    ];

    public function product(){
        return $this->hasMany(Post::class)->latest();
    }
}
