<?php

use App\Models\Cliente;
use App\Http\Controllers\Cliente\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    /*$cliente = Cliente::create([
        'nombre' => 'Richar',
        'pri-ape' => 'Meza',
        'seg-ape' => 'Soto', 
        'docu_tip' => 'M',
        'docu_num' => '5289658',
    ]);
*/
   // return $cliente->nombre." ".$cliente->pri_ape;
    
    //dd($cliente);

    return view('welcome');
});

Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');