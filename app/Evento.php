<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    const CREATED_AT = 'EV_inicio';
    const UPDATED_AT = 'EV_actualizacion';
    protected $table= 'evento';
    protected $fillable = ['EV_name',['EV_descripcion'],'EV_lugar','EV_prize','EV_img','EV_date','CA_ID'];

}
