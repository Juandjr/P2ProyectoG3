@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detalle de Conductor</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Nombre:</strong> {{ $conductor->nombre }}
                    </div>
                    <div class="mb-3">
                        <strong>Apellido:</strong> {{ $conductor->apellido }}
                    </div>
                    <div class="mb-3">
                        <strong>Licencia:</strong> {{ $conductor->licencia }}
                    </div>
                    <div class="mb-3">
                        <strong>Teléfono:</strong> {{ $conductor->telefono }}
                    </div>
                    <div class="mb-3">
                        <strong>Dirección:</strong> {{ $conductor->direccion }}
                    </div>
                    <div class="mb-3">
                        <strong>Vehículo Asignado:</strong> {{ $conductor->vehiculo_asignado ?? 'Sin asignar' }}
                    </div>
                    <a href="{{ route('conductores.edit', $conductor->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                    <a href="{{ route('conductores.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
