<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AppController::class, 'index']);
// Route::get('/contact', [AppController::class, 'contact']);
// Route::match(['get', 'post'], '/contact', [AppController::class, 'contact']);
Route::get('/contact', [AppController::class, 'contact']); 
Route::get('/about', [AppController::class, 'about']); 
Route::get('/blog', [AppController::class, 'blog']); 
Route::post('/contact', [AppController::class, 'submitContact']);

// admin view
Route::get('/admin', [AdminController::class,'index']);
