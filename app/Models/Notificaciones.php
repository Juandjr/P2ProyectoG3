<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
    protected $fillable = [
        'titulo',
        'mensaje',
        'fecha_envio',
        'leida',
        'usuario_id',
    ];
}
