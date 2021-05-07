<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable =  ['product_name','price','quantity','rating','front_image'];

    public function productable(){
        return $this->morphTo();
    }
    
    public function users()
    {
        return $this->belongsToMany(
            Cart::class,
            'cart_products',
            'product_id',
            'cart_id'
        );
    }

    public static function add($fields)
    {
        $product = new Product();
        $product->fill($fields);
        return $product;
    }
}
