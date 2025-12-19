@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Registrar Nuevo Conductor</h4>
                </div>
                <div class="card-body">
                    <form id="conductorForm" method="POST" action="{{ route('conductores.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="licencia" class="form-label">Licencia</label>
                            <input type="text" class="form-control" id="licencia" name="licencia" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                        <div class="mb-3">
                            <label for="vehiculo_asignado" class="form-label">Vehículo Asignado</label>
                            <input type="text" class="form-control" id="vehiculo_asignado" name="vehiculo_asignado">
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>
                        <a href="{{ route('conductores.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
document.getElementById('conductorForm').addEventListener('submit', function(e) {
    let nombre = document.getElementById('nombre').value.trim();
    let apellido = document.getElementById('apellido').value.trim();
    let licencia = document.getElementById('licencia').value.trim();
    let telefono = document.getElementById('telefono').value.trim();
    let direccion = document.getElementById('direccion').value.trim();
    if (!nombre || !apellido || !licencia || !telefono || !direccion) {
        alert('Por favor, complete todos los campos obligatorios.');
        e.preventDefault();
    }
});
</script>
@endsection
