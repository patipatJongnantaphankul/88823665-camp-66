<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/home',
    [HomeController::class, 'index']);
Route::get('/',
    [HomeController::class, 'index']);

Route::get('/login',
    [LoginController::class, 'index']);

Route::get('/register',
    [RegisterController::class, 'index']);
Route::post('/register',
    [RegisterController::class, 'create']);

Route::get('/users',
    [UserController::class, 'index']);
Route::get('/users/{id}',
    [UserController::class, 'edit']);
Route::put('/users',
    [UserController::class, 'edit_action']);
Route::delete('/users',
    [UserController::class, 'delete']);

Route::get('/multiplication',
    [MyController::class, 'back']);

Route::post('/multiplication',
    [MyController::class, 'multiplication']);
