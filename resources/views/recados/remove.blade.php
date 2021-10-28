@extends('templates.base')
@section('title', 'Remover Recado')
@section('h1', 'Remover Recado')

@section('content')
<div class="row">
    <div class="col">
        {{-- mensagem para confirmar a exclusão do recado --}}
        <div class="alert alert-danger" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <strong>Cuidado!</strong> Você está prestes a remover o recado!
        </div>

        {{-- dados do recado a ser apagado --}}
        <p>Nome: {{$recado->nome}}</p>
        <p>Comentário: {{$recado->comentario}}</p>
        <p>Você tem certeza que deseja apagar este recado para sempre?</p>

        {{-- formulário para confirmar a exclusão do recado --}}
        <form method="post" action="{{ route('recados.delete', $recado) }}">
            @csrf
            @method('delete')
            
            <input type="submit" class="btn btn-danger" value="Pode apagar sem medo">
            <a href="{{ route('recados.index') }}" class="btn btn-secondary">Desculpa, eu cliquei errado!</a>
        </form>

        

    </div>
</div>
@endsection