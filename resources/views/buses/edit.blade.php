@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Bus</h4>
                </div>
                <div class="card-body">
                    <form id="editBusForm" method="POST" action="{{ route('buses.update', $bus->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="matricula" class="form-label">Matrícula</label>
                            <input type="text" class="form-control" id="matricula" name="matricula" value="{{ $bus->matricula }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="capacidad" class="form-label">Capacidad</label>
                            <input type="number" class="form-control" id="capacidad" name="capacidad" min="1" value="{{ $bus->capacidad }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="kilometraje" class="form-label">Kilometraje</label>
                            <input type="number" class="form-control" id="kilometraje" name="kilometraje" min="0" value="{{ $bus->kilometraje }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="compania" class="form-label">Compañía</label>
                            <input type="text" class="form-control" id="compania" name="compania" value="{{ $bus->compania }}" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                        <a href="{{ route('buses.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
document.getElementById('editBusForm').addEventListener('submit', function(e) {
    let matricula = document.getElementById('matricula').value.trim();
    let capacidad = document.getElementById('capacidad').value;
    let kilometraje = document.getElementById('kilometraje').value;
    let compania = document.getElementById('compania').value.trim();
    if (!matricula || capacidad < 1 || kilometraje < 0 || !compania) {
        alert('Por favor, complete todos los campos correctamente.');
        e.preventDefault();
    }
});
</script>
@endsection
