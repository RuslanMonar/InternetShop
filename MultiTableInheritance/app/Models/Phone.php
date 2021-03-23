<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    protected $fillable =  ['internet','SIM_quantity','SIM_size','OperatingSystem','Processor'];
    use HasFactory;
    public function product(){
        return $this->morphOne(Product::class, 'productable');
    }
    public static function add($fields)
    {
        $phone = new Phone();
        $phone->fill($fields);
        $phone->save(); 
        return $phone;

    }

}
