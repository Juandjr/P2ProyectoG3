<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'licencia',
        'telefono',
        'direccion',
        'vehiculo_asignado',
    ];
}
