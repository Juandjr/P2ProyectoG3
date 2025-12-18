<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Buses;

class paradas extends Model
{
    protected $fillable = [
        'nombre_parada',
        'calle',
    ];

    public $timestamps = false;

    public function buses()
    {
        return $this->belongsToMany(Buses::class, 'paradas_bus', 'parada_id', 'bus_id')
            ->withPivot('orden_parada', 'duracion_minutos')
            ->orderBy('paradas_bus.orden_parada');
    }
}
