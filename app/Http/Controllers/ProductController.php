<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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

        // Store the uploaded file and get the path
        $path = $request->file('image')->store('public/product_images');
        $path1 = $request->file('image1')->store('public/product_images');
        $path2 = $request->file('image2')->store('public/product_images');
        $path3 = $request->file('image3')->store('public/product_images');
        $path4 = $request->file('image4')->store('public/product_images');

        // Get the filename from the path
        $filename = basename($path);
        $filename1 = basename($path1);
        $filename2 = basename($path2);
        $filename3 = basename($path3);
        $filename4 = basename($path4);

        // Save the filename to the product object
        $product->image = $filename;
        $product->image1 = $filename1;
        $product->image2 = $filename2;
        $product->image3 = $filename3;
        $product->image4 = $filename4;
        
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
