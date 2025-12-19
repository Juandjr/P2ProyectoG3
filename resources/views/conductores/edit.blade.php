@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Conductor</h4>
                </div>
                <div class="card-body">
                    <form id="editConductorForm" method="POST" action="{{ route('conductores.update', $conductor->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $conductor->nombre }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $conductor->apellido }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="licencia" class="form-label">Licencia</label>
                            <input type="text" class="form-control" id="licencia" name="licencia" value="{{ $conductor->licencia }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $conductor->telefono }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $conductor->direccion }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="vehiculo_asignado" class="form-label">Vehículo Asignado</label>
                            <input type="text" class="form-control" id="vehiculo_asignado" name="vehiculo_asignado" value="{{ $conductor->vehiculo_asignado }}">
                        </div>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
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
document.getElementById('editConductorForm').addEventListener('submit', function(e) {
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
