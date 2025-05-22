<?php

use App\Models\Cliente;
use App\Models\Producto;
use App\Http\Controllers\Cliente\ClienteController;
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

    return view('welcome');
});

Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::post('/cliente/update', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');
Route::post('/cliente/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');


Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');
Route::post('/producto/store', [ProductoController::class, 'store'])->name('producto.store');