<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\color;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        $colors = color::all();
        return view('products.create',compact('categories','colors'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
           
        ]);

        try {
          
            $product = $request->all();
            
            $colors = $request->colors;
            $quantities = $request->quantity;

            $array_size = count($quantities);
       


    
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $product['image'] = $profileImage;
            }



            $new_product = Product::create($product);
            
            // foreach ($colors as $color) {
                
                

            //     $new_product->colors()->attach($color);

            // }
            for ($i=0; $i < $array_size; $i++) { 
               
                $new_product->colors()->attach($colors[$i],[
                    'quantity' => $quantities[$i]
                ]);
            }

            return redirect()->route('products.create');
        } catch (\Throwable $th) {
        
            return 'crap';
        }
       
        
        


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $product = Product::find($id);
        $productcolors = $product->colors;
        // dd( $productcolors);
        // foreach($productcolors as $m){
        //     echo 'name'. $m->name;
        //     echo 'q'. $m->pivot->quantity;
        //     echo '<br>';
        // }
        // return;
        return view('products.show', compact('product','productcolors'));
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = category::all();
        $colors = color::all();
        return view('products.edit',compact('product','categories','colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
       
        try {
          
            $productItems=$request->all();
         
           
            
                $colors = $request->colors;
                $quantities = $request->quantity;

                // Combine the colors and quantities into an associative array
                $data = [];
                foreach ($colors as $index => $colorId) {
                    $data[$colorId] = ['quantity' => $quantities[$index]];
                }
            
                dd($data);


    
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $product['image'] = $profileImage;
            }else{
                unset($product['image']);
            }

           $product->update($productItems);
        //    $associativeArray = array_combine($keys, $quantities);
            // dd($result);
            $product->colors()->sync($data);
         

            return redirect()->route('home');
        } catch (\Throwable $th) {
        
            return 'crap';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
