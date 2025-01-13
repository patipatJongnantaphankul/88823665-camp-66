<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});



Route::get('/multiplication', [MyController::class, 'index'])->name('multiplication.index');
Route::post('/multiplication', [MyController::class, 'show'])->name('multiplication.show');
