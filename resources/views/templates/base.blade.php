<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        header {
          background-color: #ff6347;
        }
    </style>
</head>
<body>

    <header class="py-3 mb-3 border-bottom">
      <div class="container d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr 1fr;">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-start">
            <img src="../img/logov2.png" height="10.08px" width="30px" alt="Logo do Cardap.io">
        </a>

        <form class="w-100 me-3 text-center">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          
          @if (session('usuario'))
          <div class="flex-shrink-0 dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="#" alt="Usuário" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
              <li><a class="dropdown-item" href="#">{{ session('usuario.nome') }}</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Deslogar</a></li>
            </ul>
          </div>
          @else
          <a href="{{ route('login') }}" role="button" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('usuarios.inserir') }}" role="button" class="btn btn-warning">Cadastro</a>
          @endif
        </div>
      </div>
    </header>

    <div class="container">
        <div class="row">
            <h1>@yield('h1')</h1>
            <hr>
        </div>

        <!-- Conteúdo -->
        @yield('content')

    </div>
</body>
</html>