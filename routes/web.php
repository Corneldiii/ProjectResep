<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\StandByController;
use App\Http\Controllers\InputResepController;
use App\Http\Controllers\DaftarResepController;

Route::get('/Home', function () {
    return view('Home');
});
Route::get('/HomeAdmin', function () {
    return view('HomeAdmin');
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

Route::get('/HomeAdmin',[DaftarResepController::class, 'index'])->name('homeadmin');

Route::post('/HomeAdmin', [DaftarResepController::class, 'store']) -> name('admin_post');

Route::delete('/HomeAdmin/{id}', [DaftarResepController::class, 'destroy']) -> name('admin_delete');

Route::get('/standby', [StandByController::class, 'index'])->name('standby');

Route::get('/search',[SearchController::class, 'index'])->name('search');

