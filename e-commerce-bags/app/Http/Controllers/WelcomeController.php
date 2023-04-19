<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $products= Product::all();
        return view('welcome',compact('products'));
    }
    public function showProduct(string $id){
        $product = Product::find($id);
        return view('product',compact('product'));
    }
}
