<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\paradas;

class Buses extends Model
{
    protected $fillable = [
        'matricula',
        'capacidad',
        'kilometraje',
        'compania',
    ];

    public $timestamps = false;

    public function paradas()
    {
        return $this->belongsToMany(paradas::class, 'paradas_bus', 'bus_id', 'parada_id')
            ->withPivot('orden_parada', 'duracion_minutos')
            ->orderBy('paradas_bus.orden_parada');
    }
}
