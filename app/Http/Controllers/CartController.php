<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $reuqest)
    {
        $cart  = Cart::add($reuqest->all());
        $cart->setProduct($reuqest->get('id'));
    }
}

