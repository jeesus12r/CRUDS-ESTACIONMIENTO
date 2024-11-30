@extends('layouts/main')

@section('contenido')
    <h2>CRUD CREACION DE MULTAS</h2>
     
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form id="multas-form" action="{{route('storeMultas')}}" method="POST">
                        @csrf
                        @method('POST')
                        <label for="name">NOMBRE</label>
                        <input type="text" name="name" id="name" class="form-control">

                        <label for="tipo">TIPO DE PAGO</label>
                        <input type="text" name="tipo" id="tipo" class="form-control">

                        <label for="fecha">FECHA DE PAGO</label>
                        <input type="date" name="fecha" id="fecha" class="form-control">

                        <label for="hora">HORA DEL PAGO</label>
                        <input type="text" name="hora" id="hora" class="form-control">

                        <label for="metodo">METODO DEL PAGO</label>
                        <input type="text" name="metodo" id="metodo" class="form-control">

                        <label for="estado">ESTADO DEL PAGO</label>
                        <input type="text" name="estado" id="estado" class="form-control">

                        <label for="empleado">EMPLEADO QUE LO REALIZA</label>
                        <input type="text" name="empleado" id="empleado" class="form-control">

                        <button id="submit-btn" class="btn btn-primary">Agregar</button>
                        <a href="{{route('indexMultas')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#multas-form').on('submit', function(event) {
                event.preventDefault();

                var name = $('#name').val().trim();
                var tipo = $('#tipo').val().trim();
                var fecha = $('#fecha').val().trim();
                var hora = $('#hora').val().trim();
                var metodo = $('#metodo').val().trim();
                var estado = $('#estado').val().trim();
                var empleado = $('#empleado').val().trim();

                // Imprimir los valores en consola
                console.log("Nombre: " + name);
                console.log("Tipo de Pago: " + tipo);
                console.log("Fecha de Pago: " + fecha);
                console.log("Hora del Pago: " + hora);
                console.log("Método del Pago: " + metodo);
                console.log("Estado del Pago: " + estado);
                console.log("Empleado: " + empleado);

                // Comprobamos si todos los campos están vacíos
                if (name === '' && tipo === '' && fecha === '' && hora === '' && metodo === '' && estado === '' && empleado === '') {
                    alert('No se llenó ningún dato');
                } else {
                    var missingFields = [];

                    if (name === '') missingFields.push('Nombre');
                    if (tipo === '') missingFields.push('Tipo de Pago');
                    if (fecha === '') missingFields.push('Fecha de Pago');
                    if (hora === '') missingFields.push('Hora del Pago');
                    if (metodo === '') missingFields.push('Método del Pago');
                    if (estado === '') missingFields.push('Estado del Pago');
                    if (empleado === '') missingFields.push('Empleado');

                    if (missingFields.length > 0) {
                        alert('Faltan los siguientes datos: ' + missingFields.join(', '));
                    } else {
                        var formData = {
                            _token: $('input[name="_token"]').val(),
                            name: name,
                            tipo: tipo,
                            fecha: fecha,
                            hora: hora,
                            metodo: metodo,
                            estado: estado,
                            empleado: empleado
                        };

                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                alert('Multa agregada con éxito');
                                window.location.href = '{{route('indexMultas')}}';
                            },
                            error: function(xhr, status, error) {
                                alert('Hubo un error al agregar la multa. Intenta de nuevo.');
                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection
