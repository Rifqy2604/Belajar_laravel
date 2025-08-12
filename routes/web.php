<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Get
Route::get('/halo', function () {
    return view('halo');
});

// Route Redirect
route::redirect('/youtube', '/tes');

// Login
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/login', 'dologin');
    Route::post('/logout', 'doLogout');
});