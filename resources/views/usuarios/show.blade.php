@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detalle de Usuario</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Nombre:</strong> {{ $usuario->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ $usuario->email }}
                    </div>
                    <div class="mb-3">
                        <strong>Verificado:</strong> {{ $usuario->email_verified_at ? 'Sí' : 'No' }}
                    </div>
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
