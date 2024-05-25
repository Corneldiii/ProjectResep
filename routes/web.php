<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\StandByController;

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/', function () {
    return view('Standby');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/Standby',[StandByController::class,'index'])->name('standby');

Route::get('/login', [AkunController::class, 'index']) -> name('login');

Route::post('/login', [AkunController::class, 'login']);