@extends('layouts/main')

@section('contenido')
    <h2>CRUD Clientes</h2>
     
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form id="modelos-form" action="{{route('storeModelos')}}" method="POST">
                        @csrf
                        @method('POST')
                        <label for="name">NOMBRE</label>
                        <input type="text" name="name" id="name" class="form-control">

                        <label for="marca">MARCA</label>
                        <input type="text" name="marca" id="marca" class="form-control">

                        <label for="fecha">FECHA DE FABRICACION</label>
                        <input type="date" name="fecha" id="fecha" class="form-control">

                        <label for="tipo">TIPO DE VEHICULO</label>
                        <input type="text" name="tipo" id="tipo" class="form-control">

                        <button id="submit-btn" class="btn btn-primary">Agregar</button>
                        <a href="{{route('indexModelos')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#modelos-form').on('submit', function(event) {
                event.preventDefault();

                var name = $('#name').val().trim();
                var marca = $('#marca').val().trim();
                var fecha = $('#fecha').val().trim();
                var tipo = $('#tipo').val().trim();

                // Imprimir los valores en consola
                console.log("Nombre: " + name);
                console.log("Marca: " + marca);
                console.log("Fecha de Fabricación: " + fecha);
                console.log("Tipo de Vehículo: " + tipo);

                // Comprobamos si todos los campos están vacíos
                if (name === '' && marca === '' && fecha === '' && tipo === '') {
                    alert('No se llenó ningún dato');
                } else {
                    var missingFields = [];

                    if (name === '') missingFields.push('Nombre');
                    if (marca === '') missingFields.push('Marca');
                    if (fecha === '') missingFields.push('Fecha de Fabricación');
                    if (tipo === '') missingFields.push('Tipo de Vehículo');

                    if (missingFields.length > 0) {
                        alert('Faltan los siguientes datos: ' + missingFields.join(', '));
                    } else {
                        var formData = {
                            _token: $('input[name="_token"]').val(),
                            name: name,
                            marca: marca,
                            fecha: fecha,
                            tipo: tipo
                        };

                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                alert('Modelo agregado con éxito');
                                window.location.href = '{{route('indexModelos')}}';
                            },
                            error: function(xhr, status, error) {
                                alert('Hubo un error al agregar el modelo. Intenta de nuevo.');
                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection
