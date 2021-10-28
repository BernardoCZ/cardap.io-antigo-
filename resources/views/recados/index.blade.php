@extends('templates.base')
@section('title', 'Recados')
@section('h1', 'Página de Recados')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de recados</p>

        <a class="btn btn-primary" href="{{route('recados.inserir')}}" role="button">Inserir Recado</a>
    </div>
</div>

<div class="row">
    {{-- os recados são colocados um a um em cards para serem mostrados --}}
    @foreach($recados as $recado)
    <div class="card" style="margin-top: 25px">
        <div class="card-body">
            <h5 class="card-title">{{$recado->nome}}</h5>
            <p class="card-text">{{$recado->comentario}}</p>
            <a href="{{ route('recados.edit', $recado) }}" class="card-link btn btn-primary btn-sm" role="button"><i class="bi bi-pencil-square"></i> Editar</a>
            {{-- só mostra o botão de apagar se o usuário estiver autenticado --}}
            @if (session('usuario'))
            <a href="{{ route('recados.remove', $recado) }}" class="card-link btn btn-danger btn-sm" role="button"><i class="bi bi-trash"></i> Apagar</a>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection