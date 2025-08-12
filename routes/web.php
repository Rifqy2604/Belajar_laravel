<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Get
route::get('/halo', function () {
    $nama = "Rifqy Fakhry Zain";
    return view ("halo", compact("nama"));
});

// Route Redirect
route::redirect('/youtube', '/tes');

// Login
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/login', 'dologin');
    Route::post('/logout', 'doLogout');
});