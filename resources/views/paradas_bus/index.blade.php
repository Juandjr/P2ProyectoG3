@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Asignación de Paradas a Buses</h2>
        <a href="{{ route('paradas_bus.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Asignar Parada</a>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-responsive">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Bus</th>
                        <th>Parada</th>
                        <th>Orden de Parada</th>
                        <th>Duración (min)</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paradasBus as $pb)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pb->bus->matricula ?? 'N/A' }}</td>
                        <td>{{ $pb->parada->nombre_parada ?? 'N/A' }}</td>
                        <td>{{ $pb->orden_parada }}</td>
                        <td>{{ $pb->duracion_minutos }}</td>
                        <td>
                            <a href="{{ route('paradas_bus.show', $pb->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('paradas_bus.edit', $pb->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $pb->id }})"><i class="fa fa-trash"></i></button>
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
        ¿Está seguro que desea eliminar esta asignación?
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
function confirmDelete(pbId) {
    const form = document.getElementById('deleteForm');
    form.action = `/paradas_bus/${pbId}`;
    var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}
</script>
@endsection
