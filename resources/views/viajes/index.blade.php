@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Gestión de Viajes</h2>
        <a href="{{ route('viajes.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Añadir Viaje</a>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-responsive">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Bus</th>
                        <th>Conductor</th>
                        <th>Ruta</th>
                        <th>Hora Salida</th>
                        <th>Hora Llegada</th>
                        <th>Distancia Recorrida</th>
                        <th>Calificación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($viajes as $viaje)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $viaje->bus->matricula ?? 'N/A' }}</td>
                        <td>{{ $viaje->conductor->nombre ?? 'N/A' }}</td>
                        <td>{{ $viaje->ruta->nombre ?? 'N/A' }}</td>
                        <td>{{ $viaje->hora_salida }}</td>
                        <td>{{ $viaje->hora_llegada ?? '-' }}</td>
                        <td>{{ $viaje->distancia_recorrida ?? '-' }}</td>
                        <td>{{ $viaje->calificacion ?? '-' }}</td>
                        <td>
                            <a href="{{ route('viajes.show', $viaje->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('viajes.edit', $viaje->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $viaje->id }})"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal de confirmación -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirmar eliminación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Está seguro que desea eliminar este viaje?
      </div>
      <div class="modal-footer">
        <form id="deleteForm" method="POST" action="">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
function confirmDelete(viajeId) {
    const form = document.getElementById('deleteForm');
    form.action = `/viajes/${viajeId}`;
    var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}
</script>
@endsection
