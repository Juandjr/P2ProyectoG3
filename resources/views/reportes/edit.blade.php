@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Reporte</h4>
                </div>
                <div class="card-body">
                    <form id="editReporteForm" method="POST" action="{{ route('reportes.update', $reporte->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $reporte->tipo }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="2" required>{{ $reporte->descripcion }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="bus_id" class="form-label">Bus</label>
                            <select class="form-select" id="bus_id" name="bus_id">
                                <option value="">Sin asignar</option>
                                @foreach($buses as $bus)
                                    <option value="{{ $bus->id }}" {{ $reporte->bus_id == $bus->id ? 'selected' : '' }}>{{ $bus->matricula }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="conductor_id" class="form-label">Conductor</label>
                            <select class="form-select" id="conductor_id" name="conductor_id">
                                <option value="">Sin asignar</option>
                                @foreach($conductores as $conductor)
                                    <option value="{{ $conductor->id }}" {{ $reporte->conductor_id == $conductor->id ? 'selected' : '' }}>{{ $conductor->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="usuario_id" class="form-label">Usuario</label>
                            <select class="form-select" id="usuario_id" name="usuario_id">
                                <option value="">Sin asignar</option>
                                @foreach($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}" {{ $reporte->usuario_id == $usuario->id ? 'selected' : '' }}>{{ $usuario->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="datetime-local" class="form-control" id="fecha" name="fecha" value="{{ $reporte->fecha ? date('Y-m-d\TH:i', strtotime($reporte->fecha)) : '' }}" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                        <a href="{{ route('reportes.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
document.getElementById('editReporteForm').addEventListener('submit', function(e) {
    let tipo = document.getElementById('tipo').value.trim();
    let descripcion = document.getElementById('descripcion').value.trim();
    let fecha = document.getElementById('fecha').value;
    if (!tipo || !descripcion || !fecha) {
        alert('Por favor, complete todos los campos obligatorios.');
        e.preventDefault();
    }
});
</script>
@endsection
