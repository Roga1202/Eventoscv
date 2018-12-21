<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriaRequest;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function getcategoria(){
        $categoria = Categoria::paginate(15);
        return view('categoria.index',[
            'categorias' => $categoria,
        ]);
    }
    
    public function getagregar_categoria(){

        return view('categoria.agregar_categoria'); 
    }

    public function postagregar_categoria(CreateCategoriaRequest $request){
        $result = "error";

        $errors= [];

        $categoria = Categoria::create([
            'CA_name' => $request->input('name'),
            'CA_descripcion' => $request->input('descripcion'),
        ]);

        $result = "ok";
        return view('categoria.agregar_categoria',[
            'result' => $result,
        ]);
    }
    
    public function geteliminar_categoria($id){

        $categoria = Categoria::find($id);
        $categoria->destroy($id);

    }


}
