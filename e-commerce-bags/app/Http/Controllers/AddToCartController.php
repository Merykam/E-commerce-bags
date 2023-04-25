<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AddToCart;
use App\Models\Product;







class AddToCartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $selectedColor = $request->input('selected-color');
        // $selectedQuantity = $request->input('selected-quantity');
        
        $price = $product->price;
        $product_name= $product->name;
      

            // Store the selected color and quantity in session
        $request->session()->put('selected-color', $selectedColor);
        // $request->session()->put('selected-quantity', $selectedQuantity);
        $request->session()->put('price', $price);
        $request->session()->put('product_name', $product_name);



        // Retrieve the cart data from the session
    $cart = $request->session()->get('cart', []);
    $cart[] = [
        'product_name' => $product_name,
        'selected_color' => $selectedColor,
        'selected_quantity' => 1,
        'price' => $price
    ];

    // Store the updated cart data in the session
    $request->session()->put('cart', $cart);

    // Pass the cart data to the view
    return view('card', ['cart' => $cart]);


      

        
    


    }


    public function delete(Request $request, $index)
    {
        $cart = $request->session()->get('cart', []);
        
        // Remove the item at the given index
        array_splice($cart, $index, 1);
        
        // Update the cart data in the session
        $request->session()->put('cart', $cart);
        
        // Redirect back to the cart page
        return view('card', ['cart' => $cart]);
    }

    public function update(Request $request, $index)
    {
        $cart = $request->session()->get('cart', []);
        $quantity = $request->input('quantity');
        
        // Update the quantity of the item at the given index
        $cart[$index]['selected_quantity'] = $quantity;
        
        // Update the cart data in the session
        $request->session()->put('cart', $cart);
        
        // Redirect back to the cart page
        return view('card', ['cart' => $cart]);
    }







    //     if(Auth::id()){

    //         $user = auth()->user();
    //         $AddToCart = new AddToCart;


    //         return redirect()->back();
    //     }else{
    //         return redirect('login');
    //     }

}
