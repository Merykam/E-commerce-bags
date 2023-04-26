<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   
    use HasFactory;
    protected $fillable=['checkout_id','product_name','selected_color','selected_quantity ','price'];
}
