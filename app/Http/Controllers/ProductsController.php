<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Relations\Relation;


class ProductsController extends Controller
{


    public function index(Request $request)
    {
        $products = Product::all();
        // $types = $product_types = Relation::morphMap();
        // $types = array_keys($types);
        // foreach ($types as $key => $value) {
        //     $types[$key] = ('App\Models\\'.$value);
        // }
        // $more = Product::whereHasMorph('productable', $types)->with('productable')->get();
        $price = $this->MinMaxPrice($products);
        $products = $this->EditImgPath($products);
        return response()->json(['products' => $products, 'price' => $price], 200);
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

    public function FindByCategory(Request $request)
    {
        $productClass = $request->get('name');
        $productClass = 'App\Models\\' . $productClass;
        $products = Product::whereHasMorph('productable', $productClass)->with('productable')->get();
        $price = $this->MinMaxPrice($products);
        $products = $this->EditImgPath($products);
        return response()->json(['products' => $products, 'price' => $price], 200);
    }

    public function MinMaxPrice($products){
        $price = [
            'lowerPrice' => 1000000000000,
            'higherPrice' => 1,
        ];
        foreach ($products as $pr => $value) {
            if ($value['price'] <  $price['lowerPrice']) {
                $price['lowerPrice'] = $value['price'];
            }
            if ($value['price'] >  $price['higherPrice']) {
                $price['higherPrice'] = $value['price'];
            }
        }
        return $price;
    }
    
    public function EditImgPath($products)
    {
        foreach ($products as $product) {
            $product->front_image = 'http://localhost:8000' . $product->front_image;
        }
        return $products;
    }

    public function FormatArrayOfObjects($productsArrays)
    {
        $products = [];
        foreach ($productsArrays as $key => $value) {
            foreach ($value as $key2 => $value2) {
                $products[] = $value2;
            }
        }
        return $products;
    }

    // public function FindByFilter(Request $request)
    // {
    //     $currentProduct = Phone::all();
    //     $products = [];
    //     $extra = [];
    //     $items = $request->get('filterParams');
        // foreach ($items as $key => $value) {
        //     foreach ($value as $val => $prop) {
    //             foreach ($currentProduct as $product => $productVal) {
    //                 if (!in_array($productVal[$key],$value)) {
    //                     unset($currentProduct[$product]);
    //                 }
    //             }
    //         }
    //     }

    //     //$products = [];
    //     foreach ($currentProduct as $key => $value) {
    //         $products[] = Product::where('productable_id', $value->id)->where('productable_type', 'Phone')->get();
    //     }
    //     foreach ($products as $key => $value) {
    //         $value = $this->EditImgPath($value);
    //     }
    //     return response()->json(['products' => $products], 200);
    // }

    public function FindByFilter(Request $request)
    {

        $type = $request->get('type');
        $type = 'App\Models\\' . $type;
        $query = $type::select();
        $items = $request->get('filterParams');

        foreach ($items as $key => $value) {
            $query->where(function ($query) use ($value,$key){
                foreach ($value as $val => $prop) {
                    if($key !== 'lower_price'  && $key !== 'higher_price' && $key !== 'manufacturer'){
                        if(is_array($value) &&  isset($value[0]) && $value[0] == 'Interval'){
                                $query->OrwhereBetween($key,[$prop[0] , $prop[1]]);                      
                        }
                        else{
                            $query->whereIn($key, $value);
                        }
                    }
                }
            });
        }


        $CurrentProducts = $query->get();
        $productsArrays = [];

        foreach ($CurrentProducts as $key => $value) {
            $product = Product::select();
            $product->where('productable_id', $value->id)
            ->where('productable_type', 'Phone')
            ->where('price','>=',$items['lower_price'][0])
            ->where('price','<=',$items['higher_price'][0]);
            if(!empty($items['manufacturer'])){
                $product->whereIn('manufacturer',$items['manufacturer']);
            }
           $productsArrays[] =  $product->get();
        }

        $products = $this->FormatArrayOfObjects($productsArrays);
        $products = $this->EditImgPath($products);
        $price = $this->MinMaxPrice($products);
        return response()->json(['products' => $products,'price'=>$price], 200);
    }
}
