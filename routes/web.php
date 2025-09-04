<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GerenteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return view('login/form');
});
Route::get('index', [SiteController::class, 'index'])->name('index');
Route::resource('gerentes', GerenteController::class);
Route::resource('products', ProductController::class);
Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');