@extends('templates.base_login')
@section('title', 'Cadastrar-se')

@section('content')
    <form method="post" action="#">
        @csrf
        <a href="{{ route('home') }}" class="h1 mb-4 text-white text-logo text-decoration-none">Cardap.io</a>
        <h2 class="h3 mb-3 mt-2 fw-normal text-white">Registre-se</h1>
        <select class="form-select" aria-label="Default select example">
            <option value="C">Conta Cliente</option>
            <option value="E">Conta Estabelecimento</option>
        </select>
        <div class="form-floating">
            <input type="text" class="form-control first_input" id="nome" placeholder="Nome completo" name="nome">
            <label for="nome">Nome</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control middle_input" id="email" placeholder="Email" name="email">
            <label for="email">Endereço de email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control middle_input" id="senha" placeholder="Senha" name="senha">
            <label for="senha">Senha</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control last-input" id="confirmar_senha" placeholder="Confirmar senha" name="confirmar_senha">
            <label for="confirmar_senha">Confirmar senha</label>
        </div>
        <button class="w-100 btn btn-lg btn-light" type="submit">Cadastrar-se</button>
        <div class="mb-3" style="margin-top: 1rem">
            <a href="{{ route('login') }}" class="text-white">Já tem uma conta? Logue agora mesmo!</a>
        </div>
    </form>
@endsection