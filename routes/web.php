<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/prova1', function () {
    return view('prova1');
});

Route::get('/prova2', function () {
    return view('prova2');
});

Route::get('/prova3', function () {
    return view('prova3');
});
