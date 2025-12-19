@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detalle de Reporte</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Tipo:</strong> {{ $reporte->tipo }}
                    </div>
                    <div class="mb-3">
                        <strong>Descripción:</strong> {{ $reporte->descripcion }}
                    </div>
                    <div class="mb-3">
                        <strong>Bus:</strong> {{ $reporte->bus->matricula ?? '-' }}
                    </div>
                    <div class="mb-3">
                        <strong>Conductor:</strong> {{ $reporte->conductor->nombre ?? '-' }}
                    </div>
                    <div class="mb-3">
                        <strong>Usuario:</strong> {{ $reporte->usuario->name ?? '-' }}
                    </div>
                    <div class="mb-3">
                        <strong>Fecha:</strong> {{ $reporte->fecha }}
                    </div>
                    <a href="{{ route('reportes.edit', $reporte->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                    <a href="{{ route('reportes.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
