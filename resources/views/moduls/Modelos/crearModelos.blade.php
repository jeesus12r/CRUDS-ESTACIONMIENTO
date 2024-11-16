@extends('layouts/main')

@section('contenido')
    <h2>CRUD Clientes</h2>
     
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('storeModelos')}}" method="POST">
                     @csrf
                     @method('POST')
                     <label for="name">NOMBRE</label>
                     <input type="text" name="name" id="name" class="form-control">

                     <label for="marca">MARCA</label>
                     <input type="text" name="marca" id="marca" class="form-control">

                     <label for="fecha">FECHA DE FABRICACION</label>
                     <input type="date" name="fecha" id="fecha" class="form-control" id="fecha" name="fecha">

                     <label for="tipo">TIPO DE VEHICULO</label>
                     <input type="text" name="tipo" id="tipo" class="form-control">


                     <button class="btn btn-primary">Agregar
                        
                     </button>
                    <a href="{{route('indexModelos')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection
