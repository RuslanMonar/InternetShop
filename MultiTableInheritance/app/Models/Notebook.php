<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable =  ['memory','Graphics_card','RAM','RAM_type','OperatingSystem','Processor'];
    use HasFactory;
    public function product(){
        return $this->morphOne(Product::class, 'productable');
    }
    public static function add($fields)
    {
        $notebook = new Notebook();
        $notebook->fill($fields);
        $notebook->save(); 
        return $notebook;
    }
}
