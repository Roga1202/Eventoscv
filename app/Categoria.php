<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    
    const CREATED_AT = 'CA_inicio';
    const UPDATED_AT = 'CA_actualizacion';
    protected $table= 'categoria';
    protected $fillable = ['CA_name','CA_descripcion'];
}
