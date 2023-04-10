<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\color;

class Product extends Model
{
    protected $fillable=['name','description','in_stock','image','price','discount_price','category_id'];
    use HasFactory;
    public function Category(){

        return $this->belongsTo(category::class, 'category_id');

    }
    public function colors()
    {
        return $this->belongsToMany(color::class,'product_color');
        // ->withPivot('quantity');
    }
}
