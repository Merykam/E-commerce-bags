<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    public function ProductSize(){

        return $this->belongsTo(ProductSize::class);

    }
    public function ProductColor(){

        return $this->belongsTo(ProductColor::class);

    }
    public function OrderDetails(){

        return $this->belongsTo(OrderDetails::class);

    }


    use HasFactory;
}
