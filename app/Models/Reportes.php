<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    protected $fillable = [
        'tipo',
        'descripcion',
        'bus_id',
        'conductor_id',
        'usuario_id',
        'fecha',
    ];
}
