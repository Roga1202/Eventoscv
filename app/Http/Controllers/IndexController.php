<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function gethome(){
        return view('index');
    }

    public function prueba(){
        return view('prueba');
    }

}
