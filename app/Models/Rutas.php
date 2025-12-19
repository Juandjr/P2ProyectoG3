<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'distancia_total',
        'tiempo_estimado',
    ];
}
