<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    protected $fillable = [
        'bus_id',
        'conductor_id',
        'ruta_id',
        'hora_salida',
        'hora_llegada',
        'distancia_recorrida',
        'calificacion',
    ];
}
