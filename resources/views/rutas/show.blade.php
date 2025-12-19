@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detalle de Ruta</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Nombre:</strong> {{ $ruta->nombre }}
                    </div>
                    <div class="mb-3">
                        <strong>Descripción:</strong> {{ $ruta->descripcion }}
                    </div>
                    <div class="mb-3">
                        <strong>Distancia Total (km):</strong> {{ $ruta->distancia_total }}
                    </div>
                    <div class="mb-3">
                        <strong>Tiempo Estimado (min):</strong> {{ $ruta->tiempo_estimado }}
                    </div>
                    <a href="{{ route('rutas.edit', $ruta->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                    <a href="{{ route('rutas.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
