<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\StandByController;
use App\Http\Controllers\SignupController;

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/', function () {
    return view('Standby');
});

Route::get('/login', [AkunController::class, 'index'])->name('login');

Route::post('/login', [AkunController::class, 'login']);

Route::get('/SignUp',[SignupController::class, 'index'])->name('signup');

Route::get('/home',[SignupController::class, 'index'])->name('home');

Route::get('/standby', [StandByController::class, 'index'])->name('standby');

Route::post('/register', [SignupController::class, 'register'])->name('register');
