<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){

        
        if(Auth::id()){

            $user = auth()->user();
            return view('checkout');

        }else{
            return redirect('login');
        }
        
    }

    public function store(Request $request)
    {

        $checkout = new Checkout();
        $checkout->user_id = auth()->user()->id; // assuming you're using Laravel's authentication
        $checkout->name = $request->input('name');
        $checkout->email = $request->input('email');
        $checkout->address = $request->input('address');
        $checkout->phone_number = $request->input('phone_number');
        $checkout->city = $request->input('city');
        $checkout->total_price = $request->input('total_price');
        $checkout->save();

        $cart = json_decode($request->input('cart'));
       
       $user = auth()->user(); // Save the cart data to the database
    foreach ($cart as $item) {
        
        $cartItem = new Cart();
        $cartItem->checkout_id = $checkout->id;
        $cartItem->product_name = $item->product_name;
        $cartItem->selected_color = $item->selected_color;
        // $cartItem->selected_color = $item->selected_color;
        $cartItem->selected_quantity = $item->selected_quantity;
        $cartItem->price = $item->price;
        $cartItem->save();

    }

        
        
    return redirect()->route('checkout');
    
        // return redirect('/')->with('success', 'Checkout completed successfully!');
    }
    
}
