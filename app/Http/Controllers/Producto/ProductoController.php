<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index(Request $request){

        $Productos = Producto::latest()->get();

        return view('Productos.index', compact('Productos'));
    }

        public function create() {
        $categorias = Categoria::all();
        return view('Productos.create', compact('categorias'));
    }
 

    
    public function store(Request $request) {
 
        $Producto = Producto::create($request->all());
 
        return redirect()->route('producto.index');
    }
 
    public function edit($id) {
 
        $Producto = Producto::find($id);
 
        return view('Productos.edit', compact('Producto'));
    }

    public function update(Request $request) {

      $Producto = Producto::find($request->id);

      $Producto->update($request->except('id'));

      return redirect()->route('Producto.index');
    
    }

    public function delete($id){

      $Producto = Producto::find($id);
      return view('Productos.delete', compact('Producto'));
    }

    public function destroy(Request $request){

      $Producto = Producto::find($request->id);

      $Producto->delete();
      
      return redirect()->route('Producto.index');
    }


}
