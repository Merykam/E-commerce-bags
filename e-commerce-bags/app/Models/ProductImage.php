<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function ProductColorSize(){

        return $this->belongsTo(ProductColorSize::class);

    }
    use HasFactory;
}
