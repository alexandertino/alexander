<?php

use App\Models\{Cliente,Categoria,Producto};
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Categoria\CategoriaController;
use App\Http\Controllers\Producto\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

/*
    $cliente = Cliente::create([
        'nombre' => 'Richar',
        'pri_ape' => 'Meza',
        'seg_ape' => 'Soto', 
        'docu_tip' => 'M',
        'docu_num' => '5289658',
    ]);

   return $cliente->nombre." ".$cliente->pri_ape;
    
    $producto = Producto::create([
        'nombre' => 'Camiseta Azul',
        'descripcion' => 'Camiseta de algodón color azul, talla M.',
        'precio' => 49.99,
        'categoria' => 'Ropa',
    ]);

    return $producto->nombre." ".$producto->precio;
*/

    //return view('welcome');
    /*
    $categoria = Categoria::create([
        'nombre' => 'ELECTRONICA',
        'descripcion'=> 'Categoria Electronica',
    ]);

    $categoria->productos()->create([
        'codigo'=> '101',
        'nombre'=> 'Mesa',
        'descripcion'=> 'Hermosa mesa de buna calidad',
    ]);

    
    return $categoria;

    */
    return view('welcome');
    

});

Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::post('/cliente/update', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');
Route::post('/cliente/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::get('/categoria/index', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria/store', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/categoria/edit/{id}', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
Route::get('/categoria/delete/{id}', [CategoriaController::class, 'delete'])->name('categoria.delete');
Route::post('/categoria/destroy', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto/store', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/producto/edit/{id}', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/producto/{id}', [ProductoController::class, 'update'])->name('producto.update');
Route::get('/producto/delete/{id}', [ProductoController::class, 'delete'])->name('producto.delete');
Route::post('/producto/destroy', [ProductoController::class, 'destroy'])->name('producto.destroy');
