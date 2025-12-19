@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Parada</h4>
                </div>
                <div class="card-body">
                    <form id="editParadaForm" method="POST" action="{{ route('paradas.update', $parada->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nombre_parada" class="form-label">Nombre de Parada</label>
                            <input type="text" class="form-control" id="nombre_parada" name="nombre_parada" value="{{ $parada->nombre_parada }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="calle" class="form-label">Calle</label>
                            <input type="text" class="form-control" id="calle" name="calle" value="{{ $parada->calle }}" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                        <a href="{{ route('paradas.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
document.getElementById('editParadaForm').addEventListener('submit', function(e) {
    let nombre_parada = document.getElementById('nombre_parada').value.trim();
    let calle = document.getElementById('calle').value.trim();
    if (!nombre_parada || !calle) {
        alert('Por favor, complete todos los campos obligatorios.');
        e.preventDefault();
    }
});
</script>
@endsection
