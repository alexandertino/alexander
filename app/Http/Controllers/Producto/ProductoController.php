<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Muestra la lista de productos
    public function index(Request $request)
    {
        $productos = Producto::get();
        return view('productos.index', compact('productos'));
    }

    // Guarda un nuevo producto
    public function store(Request $request)
    {
        // Validación (opcional pero recomendable)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'categoria' => 'nullable|string|max:100',
        ]);

        // Crear producto
        Producto::create($request->all());

        // Redirigir a la vista de productos
        return redirect()->route('producto.index');
    }
}
