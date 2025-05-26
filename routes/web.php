<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home/index');
// });

Route::resource('/', App\http\Controllers\HomeController::class);
Route::resource('/home', App\http\Controllers\HomeController::class);
Route::resource('/services', App\http\Controllers\ServicesController::class);
Route::resource('/about', App\http\Controllers\AboutController::class);
Route::resource('/contact', App\http\Controllers\ContactController::class);
Route::resource('/admin', App\http\Controllers\AdminController::class);
Route::resource('/hero', App\http\Controllers\HeroController::class);
