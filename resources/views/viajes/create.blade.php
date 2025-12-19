@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Registrar Nuevo Viaje</h4>
                </div>
                <div class="card-body">
                    <form id="viajeForm" method="POST" action="{{ route('viajes.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="bus_id" class="form-label">Bus</label>
                            <select class="form-select" id="bus_id" name="bus_id" required>
                                <option value="">Seleccione un bus</option>
                                @foreach($buses as $bus)
                                    <option value="{{ $bus->id }}">{{ $bus->matricula }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="conductor_id" class="form-label">Conductor</label>
                            <select class="form-select" id="conductor_id" name="conductor_id" required>
                                <option value="">Seleccione un conductor</option>
                                @foreach($conductores as $conductor)
                                    <option value="{{ $conductor->id }}">{{ $conductor->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ruta_id" class="form-label">Ruta</label>
                            <select class="form-select" id="ruta_id" name="ruta_id" required>
                                <option value="">Seleccione una ruta</option>
                                @foreach($rutas as $ruta)
                                    <option value="{{ $ruta->id }}">{{ $ruta->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hora_salida" class="form-label">Hora de Salida</label>
                            <input type="datetime-local" class="form-control" id="hora_salida" name="hora_salida" required>
                        </div>
                        <div class="mb-3">
                            <label for="hora_llegada" class="form-label">Hora de Llegada</label>
                            <input type="datetime-local" class="form-control" id="hora_llegada" name="hora_llegada">
                        </div>
                        <div class="mb-3">
                            <label for="distancia_recorrida" class="form-label">Distancia Recorrida (km)</label>
                            <input type="number" class="form-control" id="distancia_recorrida" name="distancia_recorrida" min="0">
                        </div>
                        <div class="mb-3">
                            <label for="calificacion" class="form-label">Calificación</label>
                            <input type="number" class="form-control" id="calificacion" name="calificacion" min="1" max="5">
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>
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
document.getElementById('viajeForm').addEventListener('submit', function(e) {
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
