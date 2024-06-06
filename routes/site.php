<?php
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/card', function () {
    return view('card');
});


// shop's


Route::get('/shop', function () {
    $productList = Product::all();
    return view('shop', compact('productList'));
});

Route::get('/shop/product/{id}', function ($id) {
    $product = Product::findOrFail($id);

    return view('shop-delail', compact('product'));
});

?>