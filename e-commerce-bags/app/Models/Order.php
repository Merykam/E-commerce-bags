<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function OrderDetails(){

        return $this->hasMany(OrderDetails::class);

    }
    public function User(){

        return $this->belongsTo(User::class);

    }
    use HasFactory;
}
