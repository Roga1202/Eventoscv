<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'IndexController@gethome');

Route::get('evento/agregar', 'EventoController@getagregar_evento');
Route::post('evento/agregar', 'EventoController@postagregar_evento');

Route::get('prueba', 'IndexController@prueba');
