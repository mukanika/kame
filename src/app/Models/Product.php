<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany(Product::class,'product_id', 'category_id',);
    }
}
