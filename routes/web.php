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
    return view('index');
});

Route::get('Restaurant-Shangai', function () {
    return view('restaurant_shangai');
});

Route::get('Restaurant-Figueres', function () {
    return view('restaurant_figueres');
});

Route::get('Restaurant-Pomodoro', function () {
    return view('restaurant_pomodoro');
});

Route::get('Nosotros', function () {
    return view('nosotros');
});

Route::get('Terminos', function () {
    return view('terminos');
});

Route::get('Politicas', function () {
    return view('politicas');
});