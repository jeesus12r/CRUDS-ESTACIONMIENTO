@extends('layouts/main')

@section('contenido')
    <h2>CRUD DE Registros</h2>
     
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('registrar')}}" method="POST">
                     @csrf
                     @method('POST')
                     <label for="name">ESCRIBE TU NOMBRE</label>
                     <input type="text" name="name" id="name" class="form-control">

                     <label for="email">CORREO</label>
                     <input type="text" name="email" id="email" class="form-control">

                     <label for="password">CONTRASEÑA</label>
                     <input type="text" name="password" id="password" class="form-control">

                     
                     <button class="btn btn-primary">Agregar
                        
                     </button>
                    <a href="{{route('login')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection
