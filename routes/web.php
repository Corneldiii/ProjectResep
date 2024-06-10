<?php

use App\Http\Middleware\CheckSession;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\StandByController;
use App\Http\Controllers\InputResepController;
use App\Http\Controllers\DaftarResepController;


Route::get('/', function () {
    return view('Standby');
});


Route::get('/login', [AkunController::class, 'index'])->name('login');

Route::post('/login', [AkunController::class, 'login']);

Route::get('/SignUp',[SignupController::class, 'index'])->name('signup');

Route::post('/SignUp',[SignupController::class, 'store'])->name('signup_post');

Route::get('/home',[HomeController::class, 'index'])->middleware(CheckSession::class)->name('home');

Route::post('/home',[HomeController::class, 'store'])->name('favpost');

Route::delete('/home',[HomeController::class, 'destroy']) -> name('deletefav');

Route::get('/TambahMenu',[InputResepController::class, 'index'])->middleware(CheckSession::class)->name('tambahmenu');

Route::post('/TambahMenu',[InputResepController::class, 'store'])->name('inputresep_post');

Route::get('/HomeAdmin',[DaftarResepController::class, 'index'])->middleware(CheckSession::class)->name('homeadmin');

Route::post('/HomeAdmin', [DaftarResepController::class, 'store']) -> name('admin_post');

Route::delete('/HomeAdmin/{id}', [DaftarResepController::class, 'destroy']) -> name('admin_delete');

Route::get('/standby', [StandByController::class, 'index'])->name('standby');

Route::get('/search',[SearchController::class, 'index'])->middleware(CheckSession::class)->name('search');

Route::post('/search', [SearchController::class, 'search'])->name('search');

Route::get('/favorite', [FavController::class, 'index'])->middleware(CheckSession::class)->name('favorite');