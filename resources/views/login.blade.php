<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página de login">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
    <style>
        body {
            background-color: #ff6347;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        .form-signin {
            max-width: 400px;
        }
    </style>
  </head>
  <body class="text-center">
    <main class="form-signin">

        @if (session('erro'))
        
        <!-- Erro -->
        <div class="alert alert-danger" role="alert">
        {{ session('erro') }}
        </div>

        @endif

        <form method="post" action="{{ route('login') }}">
            @csrf
            <img class="mb-4" src="img/logov2.png" height="100.8px" width="300px" alt="Logo do Cardap.io">
            <h1 class="h3 mb-3 fw-normal text-white">Faça seu login</h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
                <label for="floatingInput">Endereço de email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha">
                <label for="floatingPassword">Senha</label>
            </div>
            <button class="w-100 btn btn-lg btn-light" type="submit">Entrar</button>
            <div class="mb-3" style="margin-top: 1rem">
                <a href="#" class="text-white">Ainda não está cadastrado? Cadastre-se agora!</a>
            </div>
        </form>
    </main>
  </body>
</html>