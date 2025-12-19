@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Ruta</h4>
                </div>
                <div class="card-body">
                    <form id="editRutaForm" method="POST" action="{{ route('rutas.update', $ruta->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $ruta->nombre }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="2">{{ $ruta->descripcion }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="distancia_total" class="form-label">Distancia Total (km)</label>
                            <input type="number" class="form-control" id="distancia_total" name="distancia_total" min="1" value="{{ $ruta->distancia_total }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="tiempo_estimado" class="form-label">Tiempo Estimado (min)</label>
                            <input type="number" class="form-control" id="tiempo_estimado" name="tiempo_estimado" min="1" value="{{ $ruta->tiempo_estimado }}" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                        <a href="{{ route('rutas.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
document.getElementById('editRutaForm').addEventListener('submit', function(e) {
    let nombre = document.getElementById('nombre').value.trim();
    let distancia_total = document.getElementById('distancia_total').value;
    let tiempo_estimado = document.getElementById('tiempo_estimado').value;
    if (!nombre || distancia_total < 1 || tiempo_estimado < 1) {
        alert('Por favor, complete todos los campos obligatorios.');
        e.preventDefault();
    }
});
</script>
@endsection
