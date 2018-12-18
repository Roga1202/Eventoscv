<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    //
    public function getagregar_evento(){
        return view('evento.agregar_evento');
    }

    public function postagregar_evento(){
        $errors= [];
        $ID= null;
        dd($_POST);
        return view('evento.agregar_evento');
    }
}
