@extends('layouts.main')

@section('contenido')

    <div class="container mt-5">
        <h2 style="">CRUD MODELOS</h2>
        <div class="row"> 
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('logout') }}" class="btn btn-primary" >Cerrar Sesión</a>

                    @if(Auth::user()->rol === 'admin')
                    <a href="{{ route('createModelos') }}" class="btn btn-primary">
                        <i class="fa-solid fa-plus"></i> Agregar Producto
                    </a>
                    @endif
                    
                    <hr>
                    <table class="table table-success table-striped text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>

                                    <form id="frmDatos-{{ $item->id }}" action="{{ route('eliminarModelos', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('showModelos', $item->id) }}" class="btn btn-info">
                                            <i class="fa-solid fa-list-ul"></i> Mostrar
                                        </a>
                                        @if(Auth::user()->rol === 'admin')
                                        <a href="{{ route('editModelos', $item->id) }}" class="btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                        </a>
                                        <button type="button" class="btn btn-danger btnEliminar" data-id="{{ $item->id }}">
                                            <i class="fa-solid fa-trash"></i> Eliminar
                                        </button>
                                        @endif
                                    </form>-
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No hay datos</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('.btnEliminar').on('click', function(e) {
            e.preventDefault(); // Previene el envío inmediato del formulario

            var formId = $(this).data('id'); // Obtiene el ID del formulario específico
            var form = $('#frmDatos-' + formId);

            Swal.fire({
                title: "¿Eliminar?",
                text: "¿Estás seguro de eliminar este producto?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Envía el formulario si se confirma la eliminación
                }
            });
        });
    });
</script>
@endsection
