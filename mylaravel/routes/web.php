<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('layouts.default');
});

Route::get('/login',
    [LoginController::class, 'index']);

Route::get('/register',
    [RegisterController::class, 'index']);

Route::get('/home', function () {
    return view('layouts.default');
});



Route::get('/multiplication',
    [MyController::class, 'back']);

Route::post('/multiplication',
    [MyController::class, 'multiplication']);
