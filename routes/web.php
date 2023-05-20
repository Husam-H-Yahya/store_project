<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;





Route::get('products', [ProductController::class,'index']);
Route::get('products/create', [ProductController::class,'create']);
Route::get('products/store', [ProductController::class,'store']);
Route::get('products/edit/id', [ProductController::class,'edit']);
Route::get('products/delete{id}', [ProductController::class,'distroy']);
Route::get('products/update{id}', [ProductController::class,'update']);

Route::get('categories', [CategoryController::class,'index']);
Route::get('categories/create', [CategoryController::class,'create']);
Route::get('categories/store', [CategoryController::class,'store']);
Route::get('categories/edit/id', [CategoryController::class,'edit']);
Route::get('categories/delete{id}', [CategoryController::class,'distroy']);
Route::get('categories/update{id}', [CategoryController::class,'update']);

 //front page route

Route::get('/', [FrontController::class, 'index']);
