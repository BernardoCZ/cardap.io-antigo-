<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        @font-face {
            font-family: Logo Font;
            src: url('font/nautilus-pompilius.regular.otf');
        }
        header, .navbar {
          background-color: #ff6347;
        }
        .text-logo{
            font-family: Logo Font;
        }
        .show, .collapsing{
          display: flex;
          padding: 0.5rem 0px;
        }
        .card-img-right {
          height: 100%;
          border-radius: 0 3px 3px 0;
        }
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
        .card-text {
          font-size: 0.9rem
        }
        .card-img-background {
          background-repeat: no-repeat;
          background-size: contain;
          background-position: center; 
        }
        .banner-img-background {
          background-repeat: no-repeat;
          background-size: contain;
          background-position: right center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="text-white text-logo p-2 h2 mb-0 text-decoration-none" href="#">Cardap.io</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex w-75 m-auto">
        <input class="form-control me-2" type="search" placeholder="Buscar estabelecimento..." aria-label="Buscar estabelecimento">
      </form>
      <div class="text-end">          
          {{-- @if (session('usuario')) --}}
          <div class="flex-shrink-0 dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle text-white" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../img/example.jpg" alt="Usuário" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
              <li><a class="dropdown-item" href="#">Fulano Ciclano{{-- {{ session('usuario.nome') }} --}}</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Deslogar</a></li>
            </ul>
          </div>
          {{-- @else
          <a href="{{ route('login') }}" role="button" class="btn btn-light me-2">Login</a>
          <a href="{{ route('cadastro') }}" role="button" class="btn btn-warning">Cadastro</a>
          @endif --}}
      </div>
    </div>
  </div>
</nav>     
    <header class="py-2 mb-3 border-bottom">
      <div class="container-fluid d-flex gap-3 align-items-center">
        <a href="/" class="d-flex align-items-centermb-lg-0 text-start text-decoration-none">
          <div class="text-white text-logo p-2 h2 mb-0">Cardap.io</div>
        </a>

        <form class="w-100 me-3 text-center">
            <input type="search" class="form-control" placeholder="Buscar estabelecimento..." aria-label="Buscar estabelecimento">
        </form>

        <div class="text-end">          
          {{-- @if (session('usuario')) --}}
          <div class="flex-shrink-0 dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle text-white" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../img/example.jpg" alt="Usuário" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
              <li><a class="dropdown-item" href="#">Fulano Ciclano{{-- {{ session('usuario.nome') }} --}}</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Deslogar</a></li>
            </ul>
          </div>
          {{-- @else
          <a href="{{ route('login') }}" role="button" class="btn btn-light me-2">Login</a>
          <a href="{{ route('cadastro') }}" role="button" class="btn btn-warning">Cadastro</a>
          @endif --}}
        </div>
      </div>
    </header>

    <div class="container">

        <!-- Conteúdo -->
        @yield('content')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>