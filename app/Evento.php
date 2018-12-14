<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $fillable = [
        'nombre','descripcion', 'fecha_curso', 'fecha_inscripcion', 'costo', 'imagen'
      ];
}
