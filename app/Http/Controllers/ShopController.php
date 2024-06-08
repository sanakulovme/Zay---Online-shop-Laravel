<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $productList = Product::all();
        return view('shop', compact('productList'));
    }

    public function view($id)
    {
        $product = Product::findOrFail($id);
        $products = Product::limit(12)->get();
        return view('shop-delail', compact(['product', 'products']));
    }

    public function category($categoryName)
    {
        dd($categoryName);
    }
}
