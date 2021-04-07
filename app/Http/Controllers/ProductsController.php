<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\Relation;

class ProductsController extends Controller
{
    

    public function index(Request $request)
    {
        $products = Product::all();
        foreach ($products as $product ) {
            $product->front_image='http://localhost:8000'.$product->front_image;
        }
        return response()->json(['products' => $products],200);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
