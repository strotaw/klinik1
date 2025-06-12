<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Route::get('/', function () {
//     return view('home/index');
// });

Route::resource('/', App\http\Controllers\AuthController::class);
Route::resource('/home', App\http\Controllers\HomeController::class);
Route::resource('/services', App\http\Controllers\ServicesController::class);
Route::resource('/about', App\http\Controllers\AboutController::class);
Route::resource('/contact', App\http\Controllers\ContactController::class);
Route::resource('/admin', App\http\Controllers\AdminController::class);
Route::resource('/hero', App\http\Controllers\HeroController::class);
Route::resource('/auth', App\http\Controllers\AuthController::class);

// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');

// Route untuk proses login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// Route untuk register (opsional)
Route::get('/register', [AuthController::class, 'create'])->name('auth.create');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Route untuk logout
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
