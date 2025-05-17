<?php

namespace App\Http\Controllers\Cliente;

use App\models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function index (Request $request){

      $clientes = Cliente :: get();


        return view ('clientes.index', compact('clientes'));

    }


}