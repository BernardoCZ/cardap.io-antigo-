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
        header {
          background-color: #ff6347;
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
    </style>
</head>
<body>

    <header class="py-2 mb-3 border-bottom">
      <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr 1fr;">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-start">
            <img src="../img/logov2.png" height="50px" alt="Logo do Cardap.io" style="margin-top: 4px;">
        </a>

        <form class="w-100 me-3 text-center">
            <input type="search" class="form-control" placeholder="Buscar estabelecimento..." aria-label="Buscar estabelecimento">
        </form>

        <div class="d-grid text-end" style="grid-template-columns: 2fr 1fr;">
          <div></div>
          
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