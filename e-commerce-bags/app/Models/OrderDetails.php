<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public function Order(){

        return $this->belongsTo(Order::class);

    }
    public function ProductColorSize(){

        return $this->belongsTo(ProductColorSize::class);

    }
    use HasFactory;
}
