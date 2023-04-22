<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class AddToCart extends Model
{
    use HasFactory;

    protected $fillable=['product_id','user_id','color','quantity','price'];

    public function Product(){

        return $this->hasMany(Product::class, 'product_id');

    }
}
