@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Asignar Parada a Bus</h4>
                </div>
                <div class="card-body">
                    <form id="pbForm" method="POST" action="{{ route('paradas_bus.store') }}">
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
                            <label for="parada_id" class="form-label">Parada</label>
                            <select class="form-select" id="parada_id" name="parada_id" required>
                                <option value="">Seleccione una parada</option>
                                @foreach($paradas as $parada)
                                    <option value="{{ $parada->id }}">{{ $parada->nombre_parada }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="orden_parada" class="form-label">Orden de Parada</label>
                            <input type="number" class="form-control" id="orden_parada" name="orden_parada" min="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="duracion_minutos" class="form-label">Duración (minutos)</label>
                            <input type="number" class="form-control" id="duracion_minutos" name="duracion_minutos" min="1" required>
                        </div>
                        <button type="submit" class="btn btn-success">Asignar</button>
                        <a href="{{ route('paradas_bus.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
document.getElementById('pbForm').addEventListener('submit', function(e) {
    let bus_id = document.getElementById('bus_id').value;
    let parada_id = document.getElementById('parada_id').value;
    let orden_parada = document.getElementById('orden_parada').value;
    let duracion_minutos = document.getElementById('duracion_minutos').value;
    if (!bus_id || !parada_id || orden_parada < 1 || duracion_minutos < 1) {
        alert('Por favor, complete todos los campos correctamente.');
        e.preventDefault();
    }
});
</script>
@endsection
