<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public $productList = false;
    public $products = false;

    public function __construct()
    {
        $this->productList = Product::all();
        $this->products = Product::limit(12)->get();
    }

    public function index()
    {
        $productList = Product::all();
        return view('site/shop', compact('productList'));
    }

    public function view($id)
    {
        return view('site/shop-delail', [
            'product' => Product::findOrFail($id),
            'products' => $this->products
        ]);
    }

    public function category($categoryName)
    {
        return view('category/index', [
            'categoryName' => $categoryName,
            'productList' => $this->productList
        ]);
    }
}
