<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'nombre','email','telefono','pais','id_producto','fecha'
      ];
}
