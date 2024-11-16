@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h2>ACTUALIZAR PRODUCTO</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('update', $item->id)}}" method="POST">
                     @csrf
                     @method('PUT')
                     <label for="name">escribe el nombre </label>
                     <input type="text" name="name" id="name" class="form-control" required value="{{$item->name}} ">

                     <label for="descripcion">Descrippcion</label>
                     <input type="text" name="descripcion" id="descripcion" class="form-control" required value="{{$item->descripcion}} ">

                     <label for="precio">Precio</label>
                     <input type="number" name="precio" id="precio" class="form-control" required value="{{$item->precio}} ">

                     <label for="stock">stock</label>
                     <input type="number" name="stock" id="stock" class="form-control" required value="{{$item->stock}} ">
                     <button class="btn btn-warning">Actualizar</button>
                     <a href="{{route('home')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection