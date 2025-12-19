@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detalle de la Parada</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Nombre de Parada:</strong> {{ $parada->nombre_parada }}
                    </div>
                    <div class="mb-3">
                        <strong>Calle:</strong> {{ $parada->calle }}
                    </div>
                    <a href="{{ route('paradas.edit', $parada->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                    <a href="{{ route('paradas.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
