@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <h2 class="fw-bold mb-4">Dashboard Administrativo</h2>
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card text-bg-primary shadow h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <i class="fa fa-bus fa-2x mb-2"></i>
                    <h5 class="card-title">Buses</h5>
                    <h3>{{ $busesCount ?? 0 }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-success shadow h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <i class="fa fa-location-dot fa-2x mb-2"></i>
                    <h5 class="card-title">Paradas</h5>
                    <h3>{{ $paradasCount ?? 0 }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-warning shadow h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <i class="fa fa-users fa-2x mb-2"></i>
                    <h5 class="card-title">Usuarios</h5>
                    <h3>{{ $usuariosCount ?? 0 }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-info shadow h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <i class="fa fa-road fa-2x mb-2"></i>
                    <h5 class="card-title">Asignaciones</h5>
                    <h3>{{ $paradasBusCount ?? 0 }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">Resumen General</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Total de Buses: <strong>{{ $busesCount ?? 0 }}</strong></li>
                        <li class="list-group-item">Total de Paradas: <strong>{{ $paradasCount ?? 0 }}</strong></li>
                        <li class="list-group-item">Total de Usuarios: <strong>{{ $usuariosCount ?? 0 }}</strong></li>
                        <li class="list-group-item">Total de Asignaciones: <strong>{{ $paradasBusCount ?? 0 }}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-success text-white">Bienvenido Administrador</div>
                <div class="card-body">
                    <p class="lead">Gestiona y visualiza la información clave del sistema de transporte público desde este panel centralizado.</p>
                    <ul>
                        <li>Acceso rápido a módulos principales.</li>
                        <li>Estadísticas y resúmenes en tiempo real.</li>
                        <li>Interfaz moderna y responsiva.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
