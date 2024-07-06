<?php
//use App\Http\controllers\profilecontroller;
//use GuzzleHttp\middleware;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\productocontroller;



Route::view('/','welcome');

Route::get('/productos',[productocontroller::class, 'index'])->name('productos.index');




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

