@extends('templates.base')
@section('title', 'McDonalds')

@section('content')
<div class="row">
    <div class="col">
        <div class="d-grid p-4 mb-4 text-white rounded" style="grid-template-columns: 2fr 1fr; background-color: red;">
            <div class="col-md px-0 p-md-5">
                <h1 class="display-4 fst-italic">McDonald's</h1>
                <p class="lead my-3">McDonald's Corporation é a maior cadeia mundial de restaurantes de fast food de hambúrguer.</p>
            </div>
            <div class="banner-img-background" style="background-image: url('../img/mcdonalds_example.png');"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="p-4 mb-3 bg-light rounded d-flex">
            <div class="m-auto">
                <h2 class="h4">Sobre</h2>
                <p class="mb-0"><i class="bi bi-shop-window"></i>  Fast-food</p>
                <p class="mb-0"><i class="bi bi-geo-alt"></i>  Rua Ednaldo Pereira, 360, Bento Gonçalves, Rio Grande do Sul, Brasil</p>
                <p class="mb-0"><i class="bi bi-telephone"></i>  (55 54) 99999-9999</p>
            </div>
            <div class="m-auto" style="font-size: 2rem;">
                <span style="color: orange; font-weight: bold;">3.6</span>
                <span class="notas" style="background: linear-gradient(to right, orange 73%, #b7bdc3 0); -webkit-background-clip: text;">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="p-4 mb-3 rounded d-flex" style="background-color: red">
            <div class="m-auto">
                <h2 class="h4 text-light">Hambúrgueres</h2>
            </div>
        </div>
    </div>
</div>
<div class="row mb-2" data-masonry='{"percentPosition": true }'>
    <div class="col-md-6 card-col">
      <div class="card row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-white" style="background-color: #212529;">
        <div class="col d-lg-block p-4">
          <svg style="background-image: url('../img/bigmac_example.png')" class="bd-placeholder-img card-img-background" width="100%" height="100%" role="img" aria-label="McDonald's" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
        </div>
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-2">Big Mac</h3>
          <strong class="d-inline-block mb-2" style="color: orange">R$ 20,00</strong>
          <p class="card-text mb-auto">Não existe nada igual! Dois hambúrgueres, alface, queijo e molho especial, cebola e picles num pão com gergelim. O sabor de McDonald’s duplamente delicioso. Com dois hambúrgueres de carne 100% bovina, queijo cheddar derretido, cebola, picles e o incrível molho Big Mac.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 card-col">
      <div class="card row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-white" style="background-color: #212529;">
        <div class="col d-lg-block p-4">
          <svg style="background-image: url('../img/quarteiraocomqueijo_example.png')" class="bd-placeholder-img card-img-background" width="100%" height="100%" role="img" aria-label="McDonald's" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
        </div>
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-2">Quarterão com Queijo</h3>
          <strong class="d-inline-block mb-2" style="color: orange">R$ 25,00</strong>
          <p class="card-text mb-auto">Inigualável. Perfeito. Um hambúrguer feito com pura carne bovina, envolvida por duas fatias de queijo e temperado com ketchup, mostarda, cebola e picles.</p>
        </div>
      </div>
    </div>
</div>
@endsection