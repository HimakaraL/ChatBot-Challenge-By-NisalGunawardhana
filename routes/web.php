<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/signup', [App\Http\Controllers\UserController::class, 'createUser']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [App\Http\Controllers\UserController::class, 'loginUser']);

Route::get('/logout', [App\Http\Controllers\UserController::class, 'logoutUser']);

