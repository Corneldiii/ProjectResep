<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputResepController;
use App\Http\Controllers\StandByController;
use App\Http\Controllers\SignupController;

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/', function () {
    return view('Standby');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/t', function () {
    return view('TambahMenu');
});
Route::get('/search', function () {
    return view('search');
});



Route::get('/login', [AkunController::class, 'index'])->name('login');

Route::post('/login', [AkunController::class, 'login']);

Route::get('/SignUp',[SignupController::class, 'index'])->name('signup');

Route::post('/SignUp',[SignupController::class, 'store'])->name('signup_post');

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::post('/home',[HomeController::class, 'store'])->name('favpost');

Route::get('/TambahMenu',[InputResepController::class, 'index'])->name('inputresep');

Route::post('/TambahMenu',[InputResepController::class, 'store'])->name('inputresep_post');

Route::get('/standby', [StandByController::class, 'index'])->name('standby');


