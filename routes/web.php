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
    $productos = [
        ['nombre' => 'proteina gold standart 5lb 1', 'precio' => 292000],
        ['nombre' => 'creatina platinum cretine 400g 2', 'precio' => 148000],
        ['nombre' => 'proteina iso 100 5lb 3', 'precio' => 348000],
        ['nombre' => 'quemador de grasa lipodrene 90 cap 4', 'precio' => 120000],
        ['nombre' => 'testabolic xtreme 120 cap 5', 'precio' => 128000],
    ];
    return view('welcome', ['productos' => $productos]); 
});


