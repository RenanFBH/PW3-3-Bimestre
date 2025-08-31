<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GerenteController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('gerentes', GerenteController::class);