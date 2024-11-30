@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h2>ACTUALIZAR CLIENTES</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form id="update-afiliacion-form" action="{{route('updateAfiliacion', $itemm->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="nombree">NOMBRE</label>
                        <input type="text" name="nombree" id="nombree" class="form-control" required value="{{$itemm->nombree}}">

                        <label for="tipo">TIPO DE AFILIACION</label>
                        <input type="text" name="tipo" id="tipo" class="form-control" required value="{{$itemm->tipo}}">

                        <label for="fecha">FECHA DE REGISTRO</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" required value="{{$itemm->fecha}}">

                        <label for="estado">ESTADO DE LA AFILIACION</label>
                        <input type="text" name="estado" id="estado" class="form-control" required value="{{$itemm->estado}}">

                        <button id="update-btn" class="btn btn-warning">Actualizar</button>
                        <a href="{{route('indexAfiliacion')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#update-afiliacion-form').on('submit', function(event) {
                event.preventDefault();

                var nombree = $('#nombree').val().trim();
                var tipo = $('#tipo').val().trim();
                var fecha = $('#fecha').val().trim();
                var estado = $('#estado').val().trim();

                // Imprimir los valores en consola
                console.log("Nombre: " + nombree);
                console.log("Tipo de Afiliación: " + tipo);
                console.log("Fecha de Registro: " + fecha);
                console.log("Estado de la Afiliación: " + estado);

                // Comprobamos si todos los campos están vacíos
                if (nombree === '' && tipo === '' && fecha === '' && estado === '') {
                    alert('No se llenó ningún dato');
                } else {
                    var missingFields = [];

                    if (nombree === '') missingFields.push('Nombre');
                    if (tipo === '') missingFields.push('Tipo de Afiliación');
                    if (fecha === '') missingFields.push('Fecha de Registro');
                    if (estado === '') missingFields.push('Estado de la Afiliación');

                    if (missingFields.length > 0) {
                        alert('Faltan los siguientes datos: ' + missingFields.join(', '));
                    } else {
                        var formData = {
                            _token: $('input[name="_token"]').val(),
                            nombree: nombree,
                            tipo: tipo,
                            fecha: fecha,
                            estado: estado
                        };

                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                alert('Afiliación actualizada con éxito');
                                window.location.href = '{{route('indexAfiliacion')}}';
                            },
                            error: function(xhr, status, error) {
                                alert('Hubo un error al actualizar la afiliación. Intenta de nuevo.');
                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection
