<?php
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Brand\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts');
});

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('brands', BrandController::class);
