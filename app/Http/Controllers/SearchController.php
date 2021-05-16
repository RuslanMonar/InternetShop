<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->get("name");
        // $result = Product::all()->where("product_name",$request->get("name"));
        $result = Product::where(DB::raw('product_name'), 'like', '%'.$search.'%')->paginate(12);
        $result = $this->EditImgPath($result);
        return $result ?  response()->json(['Answer' => 'Ok','search' => $result],200):  response()->json(['Answer' => 'Failed'],401);
    }
    public function EditImgPath($products)
    {
        foreach ($products as $product) {
            $product->front_image = 'http://localhost:8000' . $product->front_image;
        }
        return $products;
    }

}
