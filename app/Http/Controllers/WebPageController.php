<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductVariations;
use Illuminate\Http\Request;

class WebPageController extends Controller
{
    //
    public function index()
    {
        return view('webpage.webpage');
    }

    public function catalogues()
    {

        $products = Products::all();
        $uniqueColors = ProductVariations::select('color_name')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('color_name')
            ->get();
        $uniqueSizes = ProductVariations::select('size')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('size')
            ->get();

        return view('webpage.catalogue.catalogue' , [
            'products' => $products,
            'unique_colors' => $uniqueColors,
            'unique_sizes' => $uniqueSizes,
        ]);
    }


    public function viewProduct($id)
    {
        $product = Products::where('product_id' , $id)->first();
        return view('webpage.catalogue.viewproduct', [
           'product' => $product,
        ]);
    }

    public function getColorBySize(Request $request, $size, $product_id)
    {


        $product = Products::where('product_id' , $product_id)->first();

        // Fetch variations for the product and size
        $variations = ProductVariations::where('size', $size)
            ->where('product_id', $product_id)
            ->get(['color', 'color_name' , 'stock']);


        return response()->json($variations);
    }

    public function getStockByColor(Request $request, $size, $product_id, $color)
    {

        // Fetch the specific variation based on size, color, and product ID
        $variation = ProductVariations::where('size', $size)
            ->where('color_name', $color)
            ->where('product_id', $product_id)
            ->first(['stock']);



        if (!$variation) {
            return response()->json(['stock' => 0]); // Return 0 if no variation is found
        }

        return response()->json(['stock' => $variation->stock]);
    }








}
