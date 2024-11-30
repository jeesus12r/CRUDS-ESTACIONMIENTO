@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h2>ACTUALIZAR PRODUCTO</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form id="update-product-form" action="{{route('update', $item->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name">Escribe el nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required value="{{$item->name}}">

                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" required value="{{$item->descripcion}}">

                        <label for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" required value="{{$item->precio}}">

                        <label for="stock">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control" required value="{{$item->stock}}">

                        <button id="update-btn" class="btn btn-warning">Actualizar</button>
                        <a href="{{route('home')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#update-product-form').on('submit', function(event) {
                event.preventDefault();

                var name = $('#name').val().trim();
                var descripcion = $('#descripcion').val().trim();
                var precio = $('#precio').val().trim();
                var stock = $('#stock').val().trim();

                // Imprimir los valores en consola
                console.log("Nombre: " + name);
                console.log("Descripción: " + descripcion);
                console.log("Precio: " + precio);
                console.log("Stock: " + stock);

                // Comprobamos si todos los campos están vacíos
                if (name === '' && descripcion === '' && precio === '' && stock === '') {
                    alert('No se llenó ningún dato');
                } else {
                    var missingFields = [];

                    if (name === '') missingFields.push('Nombre');
                    if (descripcion === '') missingFields.push('Descripción');
                    if (precio === '') missingFields.push('Precio');
                    if (stock === '') missingFields.push('Stock');

                    if (missingFields.length > 0) {
                        alert('Faltan los siguientes datos: ' + missingFields.join(', '));
                    } else {
                        var formData = {
                            _token: $('input[name="_token"]').val(),
                            name: name,
                            descripcion: descripcion,
                            precio: precio,
                            stock: stock
                        };

                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                alert('Producto actualizado con éxito');
                                window.location.href = '{{route('home')}}';
                            },
                            error: function(xhr, status, error) {
                                alert('Hubo un error al actualizar el producto. Intenta de nuevo.');
                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection
