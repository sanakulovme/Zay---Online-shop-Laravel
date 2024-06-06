<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserConreoller extends Controller
{
    public function user($username = false)
    {
        return view('user', compact('username'));
    }
}
