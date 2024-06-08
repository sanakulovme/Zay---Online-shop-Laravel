<?php
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopController;

// [shop] controller/route index page (products) - route
Route::get('/shop', [ShopController::class, 'index']);

// [shop] controller/route product page (product) - route
Route::get('/shop/product/{id}', [ShopController::class, 'view']);

// [shop] controller/route category page (shop/category) - route
Route::get('/shop/category/{categoryName}', [ShopController::class, 'category']);