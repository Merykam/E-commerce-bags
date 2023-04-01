<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    public function Product(){

        return $this->belongsTo(Product::class);

    }
    
    public function ProductColorSize(){

        return $this->hasMany(ProductColorSize::class);

    }
    use HasFactory;
}
