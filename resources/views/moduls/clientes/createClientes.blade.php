@extends('layouts/main')

@section('contenido')
    <h2>CRUD Clientes</h2>
     
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('storeClientes')}}" method="POST">
                     @csrf
                     @method('POST')
                     <label for="name">NOMBRE</label>
                     <input type="text" name="name" id="name" class="form-control">

                     <label for="email">EMAIL</label>
                     <input type="text" name="email" id="email" class="form-control">

                     <label for="direccion">DIRECCION</label>
                     <input type="text" name="direccion" id="direccion" class="form-control">

                     <label for="telefono">TELEFONO</label>
                     <input type="text" name="telefono" id="telefono" class="form-control">

                     <label for="fecha">FECHA</label>
                     <input type="date" name="fecha" id="fecha" class="form-control" id="fecha" name="fecha">

                     <button class="btn btn-primary">Agregar
                        
                     </button>
                    <a href="{{route('indexClientes')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection
