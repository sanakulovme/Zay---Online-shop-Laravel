<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
// for site (main) routes and paramets
require __DIR__.'/site.php';

// for shop(product)s routes
require __DIR__.'/shop.php';

// for authentication routes with breeze
require __DIR__.'/auth.php';
