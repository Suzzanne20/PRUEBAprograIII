<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('tituloPagina')</title>

    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #5ED8EB;">@yield('navbar')
        <div class="container-fluid">
          <img src="https://www.pngall.com/wp-content/uploads/5/Vector-Truck.png" height="40">
          <h3 class="col-2">Neko Transporte</h3> 
          <a class="navbar-brand" href="resource/views/home.blade.php" >Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('transporte.index') }}">Transportes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('camion.index') }}">Camiones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('camion.index') }}">Camiones</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Realizar Registro
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('transporte.create') }}">Transporte</a></li>
                  <li><a class="dropdown-item" href="{{ route('camion.create') }}">Camion</a></li>
                  <li><a class="dropdown-item" href="{{ route('transporte.create') }}">Predio</a></li>
                  <li><a class="dropdown-item" href="{{ route('transporte.create') }}">Mercancia</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>




  </head>


  <body>
    
        <div class="container">
            @yield('contenido')
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>