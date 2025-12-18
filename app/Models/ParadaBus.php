<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParadaBus extends Model
{
    protected $table = 'paradas_bus';

    protected $fillable = [
        'bus_id',
        'parada_id',
        'orden_parada',
        'duracion_minutos',
    ];

    public $timestamps = false;

    public function bus()
    {
        return $this->belongsTo(Buses::class, 'bus_id');
    }

    public function parada()
    {
        return $this->belongsTo(paradas::class, 'parada_id');
    }
}
