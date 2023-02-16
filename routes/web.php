<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

// ROUTE PER HEADER
Route::get('/header', function () {
    // recupero array menu
    $menu = config('comics.menu');
    return view('header', compact('menu'));
});

// ROUTE PER MAIN
Route::get('/main', function () {
    // recupero array fumetti
    $fumetti = config('comics.fumetti');
    return view('main', compact('fumetti'));
});

// ROUTE PER FOOTER
Route::get('/footer', function () {
    // recupero array icone
    $icone = config('comics.icone');
    // recupero array social
    $social = config('comics.social');
    return view('footer', compact('icone','social'));
});

