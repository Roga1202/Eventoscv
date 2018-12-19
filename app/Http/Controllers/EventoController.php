<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
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

    public function postagregar_evento(CreateEventRequest $request){
        $categorias= Categoria::query()->orderBy('CA_ID', 'asc')->get();
        
        $errors= [];
        $result = False;

        $date = $request->input('fecha');
        $month = (string)(substr($date,0,2));
        $day = (string)(substr($date,3,2));
        $year = (string)(substr($date,6,4));
        
        $date = "$year-$month-$day";

        $evento = Evento::create([
            'EV_ID' => null,
            'EV_name' => $request->input('name'),
            'EV_descripcion' => $request->input('descripcion'),
            'CA_ID' => $request->input('categoria'),
            'EV_lugar' => $request->input('lugar'),
            'EV_prize' => $request->input('prize'),
            'EV_date' => $date,
            ]);
        
        $result = True;
        return view('evento.agregar_evento',[
            'result' => $result,
            'categorias' => $categorias,
        ]);
    }
}
