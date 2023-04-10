<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','in_stock','image','price','discount_price','category_id'];
    use HasFactory;
    public function Category(){

        return $this->belongsTo(Category::class, 'category_id');

    }
    public function colors()
    {
        return $this->belongsToMany(Color::class, table:'ProductColor', foreignPivotKey:'product_id',relatedPivotKey:'color_id',parentKey:'id', relatedKey:'id');
    }
}
