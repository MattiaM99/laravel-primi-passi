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

    $data = [
        'name' => 'Mattia',
        'todos' => [
            "fare spesa",
            "andare in palestra",
            "Portare fuori i cani",
            "studiare laravel"
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/profilo', function () {
    return view('profilo');
})->name('profilo');

Route::get('/impostazioni', function () {
    return view('impostazioni');
})->name('impostazioni');