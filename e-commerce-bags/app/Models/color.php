<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $fillable=['name'];
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class, table:'ProductColor', foreignPivotKey:'product_id',relatedPivotKey:'color_id',parentKey:'id', relatedKey:'id');
    }
}
