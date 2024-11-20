<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ProductVariations;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function products()
    {
        $products = Products::all();


        return view('admin.products.products' , [

            'products' => $products,


        ]);
    }

    public function addProductForm()
    {

        return view('admin.products.addproductform' , [

        ]);

    }


    public function viewProduct($id)
    {
        $product = Products::find($id);
        return view('admin.products.viewproduct' , [
            'product' => $product,

        ]);
    }


    public function editVariation(Request $request, $id)
    {
        $request->validate([
           'size' => ['required'],
           'stock' => ['required'],
           'reserved' => ['required'],
           'color_name' => ['required'],
           'color' => ['required'],
        ]);

        $product_variation = ProductVariations::find($id);
        $product_variation->size = $request->input('size');
        $product_variation->stock = $request->input('stock');
        $product_variation->reserved = $request->input('reserved');
        $product_variation->color_name = $request->input('color_name');
        $product_variation->color = $request->input('color');

        $product_variation->save();

        session()->flash('success' , 'Successfully Saved');
        return back();
    }


    public function addVariation(Request $request, $product_id)
    {
        $request->validate([
            'size' => ['required'],
            'stock' => ['required'],
            'reserved' => ['required'],
            'color_name' => ['required'],
            'color' => ['required'],
        ]);

        $product = Products::find($product_id);


        ProductVariations::create([
            'product_id' => $product->product_id,
            'size' => $request->input('size'),
            'stock' => $request->input('stock'),
            'reserved' => $request->input('reserved'),
            'color_name' => $request->input('color_name'),
            'color' => $request->input('color'),
        ]);

        session()->flash('success' , 'Successfully Created');
        return back();

    }



    public function addProduct(Request $request)
    {
        // Validate the form input
        $request->validate([
            'product_id' => 'required|unique:products',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the image upload
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('product_images', 'public');
        }

        // Create the product
        $product = Products::create([
            'product_id' => $request->input('product_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image_url' => 'storage/' . $imagePath ?? null, // Save image URL if it exists
        ]);

        return redirect()->route('admin.products.viewproduct', $product->id)->with('success', 'Product created successfully!');


    }





}
