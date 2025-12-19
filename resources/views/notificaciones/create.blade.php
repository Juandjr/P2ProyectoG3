@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Registrar Nueva Notificación</h4>
                </div>
                <div class="card-body">
                    <form id="notificacionForm" method="POST" action="{{ route('notificaciones.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="2" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_envio" class="form-label">Fecha de Envío</label>
                            <input type="datetime-local" class="form-control" id="fecha_envio" name="fecha_envio" required>
                        </div>
                        <div class="mb-3">
                            <label for="usuario_id" class="form-label">Usuario</label>
                            <select class="form-select" id="usuario_id" name="usuario_id">
                                <option value="">Sin asignar</option>
                                @foreach($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>
                        <a href="{{ route('notificaciones.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
document.getElementById('notificacionForm').addEventListener('submit', function(e) {
    let titulo = document.getElementById('titulo').value.trim();
    let mensaje = document.getElementById('mensaje').value.trim();
    let fecha_envio = document.getElementById('fecha_envio').value;
    if (!titulo || !mensaje || !fecha_envio) {
        alert('Por favor, complete todos los campos obligatorios.');
        e.preventDefault();
    }
});
</script>
@endsection
