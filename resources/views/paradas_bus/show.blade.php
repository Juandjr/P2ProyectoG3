@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detalle de Asignación</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Bus:</strong> {{ $paradasBus->bus->matricula ?? 'N/A' }}
                    </div>
                    <div class="mb-3">
                        <strong>Parada:</strong> {{ $paradasBus->parada->nombre_parada ?? 'N/A' }}
                    </div>
                    <div class="mb-3">
                        <strong>Orden de Parada:</strong> {{ $paradasBus->orden_parada }}
                    </div>
                    <div class="mb-3">
                        <strong>Duración (minutos):</strong> {{ $paradasBus->duracion_minutos }}
                    </div>
                    <a href="{{ route('paradas_bus.edit', $paradasBus->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                    <a href="{{ route('paradas_bus.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
