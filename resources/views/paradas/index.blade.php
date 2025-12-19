@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Gestión de Paradas</h2>
        <a href="{{ route('paradas.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Añadir Parada</a>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-responsive">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nombre de Parada</th>
                        <th>Calle</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paradas as $parada)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $parada->nombre_parada }}</td>
                        <td>{{ $parada->calle }}</td>
                        <td>
                            <a href="{{ route('paradas.show', $parada->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('paradas.edit', $parada->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $parada->id }})"><i class="fa fa-trash"></i></button>
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
        ¿Está seguro que desea eliminar esta parada?
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
function confirmDelete(paradaId) {
    const form = document.getElementById('deleteForm');
    form.action = `/paradas/${paradaId}`;
    var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}
</script>
@endsection
