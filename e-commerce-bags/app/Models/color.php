<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class color extends Model
{
    protected $fillable=['name'];
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_color')->withPivot(['quantity']);
    }
}
