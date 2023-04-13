<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $generate_GUID = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $product = new Product();
        $product->GUID = $generate_GUID;
        $product->image = $request->file('image')->store('product_image');
        $product->image1 = $request->file('image1')->store('product_image');
        $product->image2 = $request->file('image2')->store('product_image');
        $product->image3 = $request->file('image3')->store('product_image');
        $product->image4 = $request->file('image4')->store('product_image'); 
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->uop = $request->input('uop');

        if($product->save())
        {
             return redirect()->back()->with('success', 'product uploaded successfully.');
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
