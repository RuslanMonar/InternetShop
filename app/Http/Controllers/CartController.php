<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Auth;
use DB;

class CartController extends Controller
{
	public function addToCart(Request $reuqest)
	{
		$user_id = Auth::user()->id;  

    	//Array with id of order Items which has user [1 ,2 ,4 , 12 ...]
		$cartIds = DB::table('cart')
		->select('id')
		->where('user_id' , $user_id)
		->get()
		->map(function($cart) {
			return $cart->id;
		})->toArray();

    	//Find record in cart if product already exists
		$result = DB::table('cart_products')
		->whereIn('cart_id', $cartIds)
		->where('product_id', $reuqest->get('id'))
		->get();

        // If array is emprty it`s mean that we can add product to db
		if(!$result->count()){
			$cart  = Cart::add($reuqest->all());
			$cart->setProduct($reuqest->get('id'));
		}
	}
	public function loadCard()
	{
		$user_id = Auth::user()->id;  
		$cartWhereUser = Cart::where('user_id', '=', $user_id)->get();
		$test = [];
		foreach ($cartWhereUser as $key ) {
			$cartWhereProduct[] = $key->products->all();
		}
		foreach ($cartWhereUser as $key => $value) {
			$image_path = $value->products[0]->front_image;
			$value->products[0]->front_image = 'http://localhost:8000'.$image_path;
		}
		return response()->json(['cart' => $cartWhereUser], 200);
	}
	public function deleteFromCart(Request $reuqest)
	{
		$id = $reuqest->get('id');
		$cart = Cart::findOrFail($id);
		$cart->deleteProduct();
		$cart->delete();
	}

	public function increasQuantity(Request $reuqest)
	{
		$id = $reuqest->get('id');
		$cart = Cart::findOrFail($id);
		$cart->quantity = $cart->quantity+1;
		$cart->total_price = $cart->products[0]->price * $cart->quantity;
		$cart->save();
	}
	public function decreasQuantity(Request $reuqest)
	{
		$id = $reuqest->get('id');
		$cart = Cart::findOrFail($id);
		if($cart->quantity > 1){
			$cart->quantity = $cart->quantity-1;
		}
		$cart->total_price = $cart->products[0]->price * $cart->quantity;
		$cart->save();
	}
	public function ChangeQuantityValue(Request $request)
	{
		$id = $request->get('id');
		$quantity = $request->get('quantity');
		$cart = Cart::findOrFail($id);
		if($quantity > 0) $cart->quantity = $quantity;
		$cart->total_price = $cart->products[0]->price * $cart->quantity;
		$cart->save();
	}
	public function CountProductInCart()
	{
		$user_id = $user_id = Auth::user()->id;  

    	//Array with id of order Items which has user [1 ,2 ,4 , 12 ...]
    	$quantity_total = 0;
		$quantity = DB::table('cart')
		->select('quantity')
		->where('user_id' , $user_id)
		->get()
		->map(function($cart) {
			return $cart->quantity;
		})->toArray();
		foreach ($quantity as $val) {
			$quantity_total += $val;
		}
		return response()->json(['quantity' => $quantity_total], 200);
	}
}

