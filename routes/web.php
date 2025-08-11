<?php

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
