@extends('templates.base')
@section('title', 'Buscar Estabelecimento')

@section('content')
<div class="row">
    <h1>Resultados:</h1>
    <hr>
</div>
<div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">Fast-food</strong>
          <h3 class="mb-0">McDonald's</h3>
          <div class="mb-1 text-success">Nota 8</div>
          <p class="card-text mb-auto">McDonald's Corporation é a maior cadeia mundial de restaurantes de fast food de hambúrguer.</p>
          <a href="#" class="stretched-link">Ver cardápio</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg style="background-image: url('img/mcdonalds_example.png'); background-color: red;" class="bd-placeholder-img card-img-background" width="200" height="250" role="img" aria-label="McDonald's" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">Fast-food</strong>
          <h3 class="mb-0">Subway</h3>
          <div class="mb-1 text-success">Nota 9</div>
          <p class="card-text mb-auto">O franchise Subway é especializado em sanduíches ao gosto dos consumidores, com diferentes tipos de pães cozidos ​​diariamente e terminados com seletos molhos.</p>
          <a href="#" class="stretched-link">Ver cardápio</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg style="background-image: url('img/subway_example.png'); background-color: white;" class="bd-placeholder-img card-img-background" width="200" height="250" role="img" aria-label="McDonald's" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
        </div>
      </div>
    </div>
</div>
@endsection