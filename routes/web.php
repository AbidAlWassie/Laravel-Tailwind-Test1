<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');


Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/', function () {
    return view('welcome');
});
