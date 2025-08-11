<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/tes', function () {
    return 'Halo Ini adalah Routing /tes';
});
