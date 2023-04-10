<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    protected $fillable=['name','image'];
    use HasFactory;
    public function Product(){

        return $this->hasMany(Product::class, 'category_id');

    }
}
