<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =  ['product_name','price','quantity','rating','front_image'];

    public function productable(){
        return $this->morphTo();
    }
    
    public static function add($fields)
    {
        $product = new Product();
        $product->fill($fields);
        return $product;
    }
}
