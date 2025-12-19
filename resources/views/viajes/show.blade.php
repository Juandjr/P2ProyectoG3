@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detalle de Viaje</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Bus:</strong> {{ $viaje->bus->matricula ?? 'N/A' }}
                    </div>
                    <div class="mb-3">
                        <strong>Conductor:</strong> {{ $viaje->conductor->nombre ?? 'N/A' }}
                    </div>
                    <div class="mb-3">
                        <strong>Ruta:</strong> {{ $viaje->ruta->nombre ?? 'N/A' }}
                    </div>
                    <div class="mb-3">
                        <strong>Hora de Salida:</strong> {{ $viaje->hora_salida }}
                    </div>
                    <div class="mb-3">
                        <strong>Hora de Llegada:</strong> {{ $viaje->hora_llegada ?? '-' }}
                    </div>
                    <div class="mb-3">
                        <strong>Distancia Recorrida (km):</strong> {{ $viaje->distancia_recorrida ?? '-' }}
                    </div>
                    <div class="mb-3">
                        <strong>Calificación:</strong> {{ $viaje->calificacion ?? '-' }}
                    </div>
                    <a href="{{ route('viajes.edit', $viaje->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                    <a href="{{ route('viajes.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
