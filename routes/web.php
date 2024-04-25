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
        ['nombre' => 'proteina 1', 'precio'=> 290000],
        ['nombre' => 'proteina 2', 'precio'=> 290000],
        ['nombre' => 'proteina 3', 'precio'=> 290000],
    ];
    return view('welcome',['proteina'=> $productos]); 
});


