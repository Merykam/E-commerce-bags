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
            
            dd($product);
            $colors = $request->colors;
            // dd($product);


    
            if ($image = $request->file('image')) {
                // dd($image);
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $product['image'] = $profileImage;
            }


            // $category= category::findOrfail($request->category_id);
            // $category->Product()->create($product);

            $new_product = Product::create($product);
            
            foreach ($colors as $color) {
                
                

                $new_product->colors()->attach($color);

            }

            return redirect()->route('products.create');
        } catch (\Throwable $th) {
            //throw $th;
            return 'crap';
        }
       
        
        


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
