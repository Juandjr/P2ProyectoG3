@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Gestión de Buses</h2>
        <a href="{{ route('buses.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Añadir Bus</a>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-responsive">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Matrícula</th>
                        <th>Capacidad</th>
                        <th>Kilometraje</th>
                        <th>Compañía</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buses as $bus)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $bus->matricula }}</td>
                        <td>{{ $bus->capacidad }}</td>
                        <td>{{ $bus->kilometraje }}</td>
                        <td>{{ $bus->compania }}</td>
                        <td>
                            <a href="{{ route('buses.show', $bus->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('buses.edit', $bus->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $bus->id }})"><i class="fa fa-trash"></i></button>
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
        ¿Está seguro que desea eliminar este bus?
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
function confirmDelete(busId) {
    const form = document.getElementById('deleteForm');
    form.action = `/buses/${busId}`;
    var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}
</script>
@endsection
