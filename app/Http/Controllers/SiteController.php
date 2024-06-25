<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome()
    {
        $products = Product::limit(3)->get();
        return view('site/welcome', compact('products'));
    }

    public function contact()
    {
        return view('site/contact');
    }

    public function about()
    {
        return view('site/about');
    }

    public function card()
    {
        return view('site/card');
    }

    public function dashboard()
    {
        return view('site/dashboard');
    }

    public function search($q)
    {
        echo "Salom ".$q;
    }

}
