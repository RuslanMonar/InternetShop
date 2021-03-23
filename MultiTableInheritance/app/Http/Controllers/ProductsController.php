<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Notebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Relations\Relation;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $product_types = Relation::morphMap();
        /*$product_types_db = DB::table('products')
            ->distinct()
            ->pluck('productable_type')
            ->groupBy('productable_type');

        $product_types = new ArrayObject();
        foreach ($product_types_db as $product_type_db) {
            foreach ($product_type_db as $value) {
                $value = $value . 's';
                $product_types->append($value);
            }
        }
        */

        return view('pages.create', ['product_types' => array_keys($product_types)]);
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');

        $columns = DB::getSchemaBuilder()->getColumnListing($value.'s');
        $output = Null;
        foreach ($columns as $column) {
            if ($column != 'created_at' and $column != 'updated_at' and $column != 'id')
                $output .= '<label>' . $column . '</label>
                            <input name = "' . $column . '" class="form-control" >';
        }
        //return response()->json($columns);
        echo $output;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $type = $request->select; 
        $type = 'App\Models\\'.$type;
        $item = $type::add($request->all()); 
        
        $product = new Product();
        $product_item = $product::add($request->all());

        $item->product()->save($product_item);
        return redirect('/');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
