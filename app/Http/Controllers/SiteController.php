<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome()
    {
        $products = Product::limit(3)->get();
        return view('welcome', compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function card()
    {
        return view('card');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function search($q)
    {
        echo "Salom ".$q;
    }

}
