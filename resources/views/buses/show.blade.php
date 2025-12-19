@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detalle del Bus</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Matrícula:</strong> {{ $bus->matricula }}
                    </div>
                    <div class="mb-3">
                        <strong>Capacidad:</strong> {{ $bus->capacidad }}
                    </div>
                    <div class="mb-3">
                        <strong>Kilometraje:</strong> {{ $bus->kilometraje }}
                    </div>
                    <div class="mb-3">
                        <strong>Compañía:</strong> {{ $bus->compania }}
                    </div>
                    <a href="{{ route('buses.edit', $bus->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                    <a href="{{ route('buses.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
