<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/login', function () {
    return view('login');
})->name('login');

//Signup new user
Route::post('/signup', [App\Http\Controllers\UserController::class, 'createUser']);

//Login 
Route::post('/login', [App\Http\Controllers\UserController::class, 'loginUser']);

//Logout
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logoutUser']);

//Chat
Route::post('/admin/chat-response', [App\Http\Controllers\ChatbotController::class, 'getChatResponse']);

