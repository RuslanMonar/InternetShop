<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Products;

class Image extends Model
{
    use HasFactory;

    public function product()
  {
    return $this->belongsTo(Products::class , 'id' , 'product_id');
  }
}
