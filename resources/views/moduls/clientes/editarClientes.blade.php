@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h2>ACTUALIZAR CLIENTES</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form id="update-client-form" action="{{route('updateClientes', $item->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name">NOMBRE</label>
                        <input type="text" name="name" id="name" class="form-control" required value="{{$item->name}}">

                        <label for="email">EMAIL</label>
                        <input type="email" name="email" id="email" class="form-control" required value="{{$item->email}}">

                        <label for="direccion">DIRECCION</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" required value="{{$item->direccion}}">

                        <label for="telefono">TELEFONO</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" required value="{{$item->telefono}}">

                        <label for="fecha">FECHA</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" required value="{{$item->fecha}}">

                        <button id="update-btn" class="btn btn-warning">Actualizar</button>
                        <a href="{{route('indexClientes')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#update-client-form').on('submit', function(event) {
                event.preventDefault();

                var name = $('#name').val().trim();
                var email = $('#email').val().trim();
                var direccion = $('#direccion').val().trim();
                var telefono = $('#telefono').val().trim();
                var fecha = $('#fecha').val().trim();

                // Imprimir los valores en consola
                console.log("Nombre: " + name);
                console.log("Email: " + email);
                console.log("Dirección: " + direccion);
                console.log("Teléfono: " + telefono);
                console.log("Fecha: " + fecha);

                // Comprobamos si todos los campos están vacíos
                if (name === '' && email === '' && direccion === '' && telefono === '' && fecha === '') {
                    alert('No se llenó ningún dato');
                } else {
                    var missingFields = [];

                    if (name === '') missingFields.push('Nombre');
                    if (email === '') missingFields.push('Email');
                    if (direccion === '') missingFields.push('Dirección');
                    if (telefono === '') missingFields.push('Teléfono');
                    if (fecha === '') missingFields.push('Fecha');

                    if (missingFields.length > 0) {
                        alert('Faltan los siguientes datos: ' + missingFields.join(', '));
                    } else {
                        var formData = {
                            _token: $('input[name="_token"]').val(),
                            name: name,
                            email: email,
                            direccion: direccion,
                            telefono: telefono,
                            fecha: fecha
                        };

                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                alert('Cliente actualizado con éxito');
                                window.location.href = '{{route('indexClientes')}}';
                            },
                            error: function(xhr, status, error) {
                                alert('Hubo un error al actualizar el cliente. Intenta de nuevo.');
                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection
