<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function shop()
    {
        return view('shop');
    }
    public function components()
    {
        $regions = ['Toshkent', 'Fargana', 'Andijon', 'Samarqand'];

        return view('components', compact('regions'));
    }
}
