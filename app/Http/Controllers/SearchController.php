<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $result = Product::all()->where("product_name",$request->get("name"));
        return $result ?  response()->json(['Answer' => 'Ok','search' => $result],200):  response()->json(['Answer' => 'Failed'],401);
    }
}
