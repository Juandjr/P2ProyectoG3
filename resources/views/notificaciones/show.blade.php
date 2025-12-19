@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detalle de Notificación</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Título:</strong> {{ $notificacion->titulo }}
                    </div>
                    <div class="mb-3">
                        <strong>Mensaje:</strong> {{ $notificacion->mensaje }}
                    </div>
                    <div class="mb-3">
                        <strong>Fecha de Envío:</strong> {{ $notificacion->fecha_envio }}
                    </div>
                    <div class="mb-3">
                        <strong>Leída:</strong> {{ $notificacion->leida ? 'Sí' : 'No' }}
                    </div>
                    <div class="mb-3">
                        <strong>Usuario:</strong> {{ $notificacion->usuario->name ?? '-' }}
                    </div>
                    <a href="{{ route('notificaciones.edit', $notificacion->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                    <a href="{{ route('notificaciones.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
