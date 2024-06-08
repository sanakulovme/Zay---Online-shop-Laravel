<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// 
Route::get('/', [SiteController::class, 'welcome']);

// 
Route::get('/about', [SiteController::class, 'about']);

// 
Route::get('/contact', [SiteController::class, 'contact']);

// 
Route::get('/card', [SiteController::class, 'card']); 

// 
Route::get('/search?q={q}', [SiteController::class, 'search']); 

// 
Route::get('/dashboard', [SiteController::class, 'dashboard']);


?>