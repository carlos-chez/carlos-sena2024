<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/oferta', function () {
    $productos = [
        ['nombre' => 'TNT mega Mass Gainer 10lb', 'precio' => 196000],
        ['nombre' => 'Nitro tech 5lb', 'precio' => 266000],
        ['nombre' => 'Legacy 50 servicios', 'precio' => 110000],
        ['nombre' => 'C4 original 60 servicios', 'precio' => 146000],
        ['nombre' => 'Creactor', 'precio' => 116000],
        ['nombre' => 'Amino X 70 servicios', 'precio' => 168000],
        ['nombre' => 'Monster test 120 cap', 'precio' => 84000],
        ['nombre' => 'creatomic', 'precio' => 90000],
    ];
    return view('oferta', ['productos' => $productos]); 
});
Route::view('/mi-cuenta','mi-cuenta') -> name ('mi-cuenta');
Route::view('/categoria','categoria') -> name ('categoria');

