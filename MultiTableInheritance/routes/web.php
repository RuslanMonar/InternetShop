<?php

use App\Models\Phone;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/create', [ProductsController::class, 'index']);
Route::post('/store', [ProductsController::class, 'store'])->name('store');
Route::get('/show/{type}/{id}', [HomeController::class, 'show'])->name('show.type.id');
Route::get('/show/{category}', [HomeController::class, 'category'])->name('show.category');
Route::get('/create/loadtypes', [ProductsController::class, 'create'])->name('create.loadtypes');
