@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Registrar Nuevo Bus</h4>
                </div>
                <div class="card-body">
                    <form id="busForm" method="POST" action="{{ route('buses.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="matricula" class="form-label">Matrícula</label>
                            <input type="text" class="form-control" id="matricula" name="matricula" required>
                        </div>
                        <div class="mb-3">
                            <label for="capacidad" class="form-label">Capacidad</label>
                            <input type="number" class="form-control" id="capacidad" name="capacidad" min="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="kilometraje" class="form-label">Kilometraje</label>
                            <input type="number" class="form-control" id="kilometraje" name="kilometraje" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="compania" class="form-label">Compañía</label>
                            <input type="text" class="form-control" id="compania" name="compania" required>
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>
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
document.getElementById('busForm').addEventListener('submit', function(e) {
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
