<?php
//use App\Http\controllers\profilecontroller;
//use GuzzleHttp\middleware;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\productocontroller;



///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::view('/','welcome');

//CRUD de producto
Route::resource('productos', productocontroller::class); //crea siete rutas


//Listar productos
//Route::get('/productos',[productocontroller::class, 'index'])->name('productos.index');
//Crear producto
//Route::get('/productos/create',[productocontroller::class, 'create'])->name('productos.create');
//Route::post('/productos',[productocontroller::class, 'store'])->name('productos.store');
//Listar producto
//Route::get('/productos/{producto}',[productocontroller::class, 'show'])->name('productos.show');
//Editar producto
//Route::get('/productos/{producto}/edit',[productocontroller::class, 'edit'])->name('productos.edit');
//Route::put('/productos/{producto}',[productocontroller::class, 'update'])->name('productos.update');
//Eliminar producto
//Route::delete('/productos/{producto}',[productocontroller::class, 'destroy'])->name('productos.destroy');



////////////////////////////////////////////////////////////////////////////////////////////////////////////




//layouts categoria
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

