<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AddToCart;
use App\Models\Product;

class AddToCartController extends Controller
{
    public function addToCart(Request $request,$id){


        $product = Product::find($id);
        $productcolors = $product->colors;

    //     if(Auth::id()){

    //         $user = auth()->user();
    //         $AddToCart = new AddToCart;
           

    //         return redirect()->back();
    //     }else{
    //         return redirect('login');
    //     }
        
    }
}
