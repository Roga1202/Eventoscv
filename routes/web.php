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

Route::get('evento/', 'EventoController@getevento');
Route::get('evento/agregar', 'EventoController@getagregar_evento');
Route::post('evento/agregar', 'EventoController@postagregar_evento');
Route::get('evento/eliminar/{id}', 'EventoController@geteliminar_evento')->where('id', '[0-9]+');



Route::get('categoria/', 'CategoriaController@getcategoria');
Route::get('categoria/agregar', 'CategoriaController@getagregar_categoria');
Route::post('categoria/agregar', 'CategoriaController@postagregar_categoria');
Route::delete('categoria/eliminar/{id}', 'CategoriaController@geteliminar_categoria')->where('id', '[0-9]+');

Route::get('prueba', 'IndexController@prueba');