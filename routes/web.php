<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/standby', function () {
    return view('Standby');
});

Route::get('/login', function () {
    return view('Login');
});