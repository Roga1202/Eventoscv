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

Route::get('categoria/agregar', 'CategoriaController@getagregar_categoria');
Route::post('categoria/agregar', 'CategoriaController@postagregar_categoria');


Route::get('prueba', 'IndexController@prueba');




    // Schema::create('evento', function (Blueprint $table) {
    //     $table->increments('EV_ID')->nullable(false)->change();
    //     $table->timestamps();

    //     $table->string('EV_name',45);
    //     $table->string('EV_descripcion',45);
    //     $table->string('EV_lugar',45);
    //     $table->string('EV_img',255);
    //     $table->float('EV_prize',11,2);
    //     $table->date('EV_date');
    //     $table->integer('CA_ID');

    //     $table->primary('EV_ID','CA_ID');
    //     $table->foreign('CA_ID')->references('CA_ID')->on('categoria');
