<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    public $table = 'cart';
    protected $fillable = ['user_id' , 'quantity' , 'total_price'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'cart_products',
            'cart_id',
            'product_id'
        );
    }

    public static function add($fields)
    {
        $cart = new static;
        $cart->fill($fields);
        $cart->user_id = Auth::user()->id; 
        $cart->save();
        return $cart;
    }

    public function setProduct($product_id)
    {
        $this->products()->sync($product_id);
    }
    
}
