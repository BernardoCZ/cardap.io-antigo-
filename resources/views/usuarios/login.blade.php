@extends('templates.base_login')
@section('title', 'Fazer Login')

@section('content')
    <form method="post" action="{{ route('login') }}">
        @csrf
        <img class="mb-4" src="../img/logov2.png" height="100.8px" width="300px" alt="Logo do Cardap.io">
        <h1 class="h3 mb-3 fw-normal text-white">Faça login na sua conta</h1>
        <div class="form-floating">
            <input type="email" class="form-control first_input" id="email" placeholder="Email" name="email">
            <label for="email">Endereço de email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control last-input" id="senha" placeholder="Senha" name="senha">
            <label for="senha">Senha</label>
        </div>
        <button class="w-100 btn btn-lg btn-light" type="submit">Entrar</button>
        <div class="mb-3" style="margin-top: 1rem">
            <a href="{{ route('usuarios.inserir') }}" class="text-white">Ainda não está cadastrado? Cadastre-se agora!</a>
        </div>
    </form>
@endsection