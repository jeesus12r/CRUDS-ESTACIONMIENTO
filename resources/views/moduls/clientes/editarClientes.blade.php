@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h2>ACTUALIZAR CLIENTES</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('updateClientes', $item->id)}}" method="POST">
                     @csrf
                     @method('PUT')
                     <label for="name">NOMBRE </label>
                     <input type="text" name="name" id="name" class="form-control" required value="{{$item->name}} ">

                     <label for="email">TIPO DE AFILIACION</label>
                     <input type="text" name="email" id="email" class="form-control" required value="{{$item->email}} ">

                     <label for="direccion">FECHA</label>
                     <input type="text" name="direccion" id="direccion" class="form-control" required value="{{$item->direccion}} ">

                     <label for="telefono">TELEFONO</label>
                     <input type="text" name="telefono" id="telefono" class="form-control" required value="{{$item->telefono}} ">

                     <label for="fecha">FECHA</label>
                     <input type="date" name="fecha" id="fecha" class="form-control" required value="{{$item->fecha}} ">

                     <button class="btn btn-warning">Actualizar</button>
                     <a href="{{route('indexClientes')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection