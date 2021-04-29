<?php

use App\Http\Controllers\CartController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Relations\Relation;

use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});



