<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/ekstra', [EkstraController::class, 'index']);