@extends('templates.base')
@section('title', 'Buscar Estabelecimento')

@section('content')
<div class="row">
    <div class="col">
        <div class="p-4 mb-3 bg-light rounded d-flex">
            <div class="m-auto">
                <h2 class="h4">Resultados</h2>
            </div>
        </div>
    </div>
</div>
<div class="row mb-2" data-masonry='{"percentPosition": true }'>
    <div class="col-md-6 card-col">
      <div class="card card_busca row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-white" style="background-color: red;">
        <div class="col d-lg-block p-4">
          <svg style="background-image: url('img/mcdonalds_example.png')" class="bd-placeholder-img card-img-background" width="100%" height="100%" role="img" aria-label="McDonald's" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
        </div>
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2">Fast-food</strong>
          <h3 class="mb-0">McDonald's</h3>
          <div class="mb-1">
            <span style="color: orange; font-weight: bold;">3.6</span>
            <span class="notas" style="background: linear-gradient(to right, orange 73%, #f8f9fa 0); -webkit-background-clip: text;">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
          </div>
          <p class="card-text mb-auto">McDonald's Corporation é a maior cadeia mundial de restaurantes de fast food de hambúrguer.</p>
          <a href="{{ route('cardapio', 'mcdonalds') }}" class="stretched-link text-white">Ver cardápio</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 card-col">
      <div class="card card_busca row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-white" style="background-color: #212529;">
        <div class="col d-lg-block p-4">
          <svg style="background-image: url('img/subway_example.png')" class="bd-placeholder-img card-img-background" width="100%" height="100%" role="img" aria-label="McDonald's" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
        </div>
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2">Fast-food</strong>
          <h3 class="mb-0">Subway</h3>
          <div class="mb-1">
            <span style="color: orange; font-weight: bold;">4.5</span>
            <span class="notas" style="background: linear-gradient(to right, orange 90%, #f8f9fa 0); -webkit-background-clip: text;">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
          </div>
          <p class="card-text mb-auto">O franchise Subway é especializado em sandes ao gosto dos consumidores, com diferentes tipos de pães cozidos ​​diariamente e terminados com seletos molhos.</p>
          <a href="{{ route('cardapio', 'subway') }}" class="stretched-link text-white">Ver cardápio</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 card-col">
      <div class="card card_busca row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-white" style="background-color: #198754;">
        <div class="col d-lg-block p-4">
          <svg style="background-image: url('img/starbucks_example.png')" class="bd-placeholder-img card-img-background" width="100%" height="100%" role="img" aria-label="McDonald's" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
        </div>
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2">Cafeteria</strong>
          <h3 class="mb-0">Starbucks</h3>
          <div class="mb-1">
            <span style="color: orange; font-weight: bold;">4.3</span>
            <span class="notas" style="background: linear-gradient(to right, orange 86%, #f8f9fa 0); -webkit-background-clip: text;">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
          </div>
          <p class="card-text mb-auto">Independente do seu gosto ou paladar, encontrará um café Starbucks® perfeito para você.</p>
          <a href="{{ route('cardapio', 'starbucks') }}" class="stretched-link text-white">Ver cardápio</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 card-col">
      <div class="card card_busca row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-white" style="background-color: #ff5a5a;">
        <div class="col d-lg-block p-4">
          <svg style="background-image: url('img/pizzahut_example.png')" class="bd-placeholder-img card-img-background" width="100%" height="100%" role="img" aria-label="McDonald's" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
        </div>
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2">Pizzaria</strong>
          <h3 class="mb-0">Pizza Hut</h3>
          <div class="mb-1">
            <span style="color: orange; font-weight: bold;">2.5</span>
            <span class="notas" style="background: linear-gradient(to right, orange 50%, #f8f9fa 0); -webkit-background-clip: text;">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </span>
          </div>
          <p class="card-text mb-auto">Pizza Hut é uma cadeia de restaurantes e franquias especializada em pizzas e massas. É a maior cadeia de pizzarias do mundo.</p>
          <a href="{{ route('cardapio', 'pizzahut') }}" class="stretched-link text-white">Ver cardápio</a>
        </div>
      </div>
    </div>
</div>
@endsection