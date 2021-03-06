
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Sigmar+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&family=Montserrat&family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.css"> <!--Acá linkeas los estilos del estilos del SweetAlart-->
    <title>@yield('titulo')</title> 
  </head>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <a class="navbar-brand" href="/home">RedSo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        @auth
        <a class="nav-link link-menu" href="/">Inicio</a>
        @endauth
        @guest
        <a class="nav-link link-menu" href="/">Inicio</a>
        @endguest
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="/perfil"> Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="/contacto">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="/faq">F.A.Q</a>
      </li>

      @auth
        <li class="nav-item">
          <a class="nav-link link-menu" href="/logout"><button class="btn-logout">Logout</button></a>
        </li>
      @endauth

      @guest
        <li class="nav-item  ">
          <a class="nav-link link-menu" href="/login"> <button class="btn-logreg">Login</button> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-menu" href="/register"> <button class="btn-logreg">Registrarse</button></a>
        </li>
      @endguest 
      
    </ul>
    @auth
    <form class="form-inline my-2 my-lg-0" action="/busquedaUser" method="POST"> 
      @csrf
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar usuario" aria-label="Search" id="buscar" name="buscar">
      <button class="btn-busqueda" type="submit">Buscar</button> 
    </form> 
    @endauth
  </div>
</nav>
<section>
  @yield('contenido')
</section>
@yield('scripts')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

