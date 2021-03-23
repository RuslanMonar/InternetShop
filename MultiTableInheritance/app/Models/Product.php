<?php

namespace App\Models;

use Phone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    
    use HasFactory;
    protected $fillable =  ['title','price','quantity','rating','preview_img'];
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

