<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Hello, world!</title>
  </head>
  <body style="  background-size: cover; background-image: url(https://images.pexels.com/photos/1323550/pexels-photo-1323550.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
    
  <!-- resources/views/navigation.blade.php -->

 
<style>
  .navbar {
      display: flex;
      justify-content: space-between;
      background-color: rgba(64, 223, 255, 0.815);
      padding: 10px;
  }

  .nav-link {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
  }

  .nav-link:hover {
      background-color: rgba(58, 220, 253, 0.448);
  }
</style>
</head>

<nav class="navbar">

  <a href="{{ route('home') }}" class="nav-link">productos</a>
  <a href="{{ route('indexClientes') }}" class="nav-link">clientes</a>
  <a href="{{ route('indexAfiliacion') }}" class="nav-link">afiliaciones</a>
  <a href="{{ route('indexModelos') }}" class="nav-link">Modelos</a>
  <a href="{{ route('indexMultas') }}" class="nav-link">Multas</a>
</nav>



    @yield('contenido')
   
           
        
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @yield('scripts')
  </body>
</html>