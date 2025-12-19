@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Viaje</h4>
                </div>
                <div class="card-body">
                    <form id="editViajeForm" method="POST" action="{{ route('viajes.update', $viaje->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="bus_id" class="form-label">Bus</label>
                            <select class="form-select" id="bus_id" name="bus_id" required>
                                <option value="">Seleccione un bus</option>
                                @foreach($buses as $bus)
                                    <option value="{{ $bus->id }}" {{ $viaje->bus_id == $bus->id ? 'selected' : '' }}>{{ $bus->matricula }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="conductor_id" class="form-label">Conductor</label>
                            <select class="form-select" id="conductor_id" name="conductor_id" required>
                                <option value="">Seleccione un conductor</option>
                                @foreach($conductores as $conductor)
                                    <option value="{{ $conductor->id }}" {{ $viaje->conductor_id == $conductor->id ? 'selected' : '' }}>{{ $conductor->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ruta_id" class="form-label">Ruta</label>
                            <select class="form-select" id="ruta_id" name="ruta_id" required>
                                <option value="">Seleccione una ruta</option>
                                @foreach($rutas as $ruta)
                                    <option value="{{ $ruta->id }}" {{ $viaje->ruta_id == $ruta->id ? 'selected' : '' }}>{{ $ruta->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hora_salida" class="form-label">Hora de Salida</label>
                            <input type="datetime-local" class="form-control" id="hora_salida" name="hora_salida" value="{{ $viaje->hora_salida ? date('Y-m-d\TH:i', strtotime($viaje->hora_salida)) : '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="hora_llegada" class="form-label">Hora de Llegada</label>
                            <input type="datetime-local" class="form-control" id="hora_llegada" name="hora_llegada" value="{{ $viaje->hora_llegada ? date('Y-m-d\TH:i', strtotime($viaje->hora_llegada)) : '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="distancia_recorrida" class="form-label">Distancia Recorrida (km)</label>
                            <input type="number" class="form-control" id="distancia_recorrida" name="distancia_recorrida" min="0" value="{{ $viaje->distancia_recorrida }}">
                        </div>
                        <div class="mb-3">
                            <label for="calificacion" class="form-label">Calificación</label>
                            <input type="number" class="form-control" id="calificacion" name="calificacion" min="1" max="5" value="{{ $viaje->calificacion }}">
                        </div>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                        <a href="{{ route('viajes.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
document.getElementById('editViajeForm').addEventListener('submit', function(e) {
    let bus_id = document.getElementById('bus_id').value;
    let conductor_id = document.getElementById('conductor_id').value;
    let ruta_id = document.getElementById('ruta_id').value;
    let hora_salida = document.getElementById('hora_salida').value;
    if (!bus_id || !conductor_id || !ruta_id || !hora_salida) {
        alert('Por favor, complete todos los campos obligatorios.');
        e.preventDefault();
    }
});
</script>
@endsection
