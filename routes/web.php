<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AppController::class, 'index']);
// Route::get('/contact', [AppController::class, 'contact']);
// Route::match(['get', 'post'], '/contact', [AppController::class, 'contact']);
Route::get('/contact', [AppController::class, 'contact']); 
Route::post('/contact', [AppController::class, 'submitContact']);
