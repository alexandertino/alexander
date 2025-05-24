<?php

namespace App\Http\Controllers\Categoria;

use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Request $request){

        $categorias = Categoria::latest()->get();

        return view('categorias.index', compact('categorias'));
    }

        public function create() {
 
        return view('categorias.create');
    }
 

    
    public function store(Request $request) {
 
        $categoria = categoria::create($request->all());
 
        return redirect()->route('categoria.index');
    }
 
    public function edit($id) {
 
        $categoria = categoria::find($id);
 
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request) {

      $categoria = categoria::find($request->id);

      $categoria->update($request->except('id'));

      return redirect()->route('categoria.index');
    
    }

    public function delete($id){

      $categoria = categoria::find($id);
      return view('categorias.delete', compact('categoria'));
    }

    public function destroy(Request $request){

      $categoria = categoria::find($request->id);

      $categoria->delete();
      
      return redirect()->route('categoria.index');
    }
}
