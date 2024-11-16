@extends('layouts/main')

@section('contenido')
    <h2>CRUD PRODUCTOS</h2>
     
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('store')}}" method="POST">
                     @csrf
                     @method('POST')
                     <label for="name">escribe el nombre del producto</label>
                     <input type="text" name="name" id="name" class="form-control">

                     <label for="descripcion">descripcion</label>
                     <input type="text" name="descripcion" id="descripcion" class="form-control">

                     <label for="precio">Precio</label>
                     <input type="number" name="precio" id="precio" class="form-control">

                     <label for="stock">stock</label>
                     <input type="number" name="stock" id="stock" class="form-control">
                     <button class="btn btn-primary">Agregar
                        
                     </button>
                    <a href="{{route('home')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection
