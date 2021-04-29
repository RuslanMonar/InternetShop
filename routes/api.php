<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::middleware('auth:sanctum')->post('/logout',[AuthController::class,'logout']);
Route::middleware('auth:sanctum')->get('/username',[UserController::class,'username']);

Route::post('/search',[SearchController::class,'search']);
Route::post('/products',[ProductsController::class,'index']);
Route::post('/category',[ProductsController::class,'FindByCategory']);
Route::post('/filter',[ProductsController::class,'FindByFilter']);