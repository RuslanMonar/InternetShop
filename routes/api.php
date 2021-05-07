<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::middleware('auth:sanctum')->post('/logout',[AuthController::class,'logout']);
Route::middleware('auth:sanctum')->get('/username',[UserController::class,'username']);


Route::post('/search',[SearchController::class,'search']);
Route::post('/products',[ProductsController::class,'index']);
Route::post('/category',[ProductsController::class,'FindByCategory']);
Route::post('/filter',[ProductsController::class,'FindByFilter']);

Route::middleware('auth:sanctum')->post('/add-to-cart',[CartController::class,'addToCart']);
Route::middleware('auth:sanctum')->post('/load-cart',[CartController::class,'loadCard']);
Route::middleware('auth:sanctum')->post('/delete-from-cart',[CartController::class,'deleteFromCart']);
Route::middleware('auth:sanctum')->post('/increase-quantity',[CartController::class,'increasQuantity']);
Route::middleware('auth:sanctum')->post('/decrease-quantity',[CartController::class,'decreasQuantity']);
Route::middleware('auth:sanctum')->post('/change-quantity-value',[CartController::class,'ChangeQuantityValue']);

Route::middleware('auth:sanctum')->post('/count-products-in-cart',[CartController::class,'CountProductInCart']);

