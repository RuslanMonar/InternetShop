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
        $result = Product::where(DB::raw('product_name'), 'like', '%'.$search.'%')->get();
        return $result ?  response()->json(['Answer' => 'Ok','search' => $result],200):  response()->json(['Answer' => 'Failed'],401);
    }
}
