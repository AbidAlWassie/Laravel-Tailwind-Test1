<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [RegisterController::class, 'index'])->name('dashboard');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/', function () {
    return view('welcome');
});
