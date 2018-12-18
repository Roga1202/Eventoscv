<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Categoria;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    //
    public function getagregar_evento(){
        $categorias= Categoria::query()->orderBy('CA_ID', 'asc')->get();
        return view('evento.agregar_evento',[
            'categorias'=>$categorias,
        ]);
    }

    public function postagregar_evento(Request $request){
        $errors= [];
        $this->validate($request,[
            'name' => 'required | alpha_num | max:45',
            'descripcion' => 'required | max:45',
            'categoria' => 'required | numeric | digits_between:1,11 | exists:categoria,CA_ID',
            'lugar' => 'required | max:45',
            'prize' => 'required | max:45',
            'fecha' => 'required | date',
        ]);
        return view('evento.agregar_evento');
    }
}
