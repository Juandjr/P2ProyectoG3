@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Registrar Nueva Parada</h4>
                </div>
                <div class="card-body">
                    <form id="paradaForm" method="POST" action="{{ route('paradas.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre_parada" class="form-label">Nombre de Parada</label>
                            <input type="text" class="form-control" id="nombre_parada" name="nombre_parada" required>
                        </div>
                        <div class="mb-3">
                            <label for="calle" class="form-label">Calle</label>
                            <input type="text" class="form-control" id="calle" name="calle" required>
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>
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
document.getElementById('paradaForm').addEventListener('submit', function(e) {
    let nombre_parada = document.getElementById('nombre_parada').value.trim();
    let calle = document.getElementById('calle').value.trim();
    if (!nombre_parada || !calle) {
        alert('Por favor, complete todos los campos obligatorios.');
        e.preventDefault();
    }
});
</script>
@endsection
