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
        <div class="p-4 mb-3 bg-light rounded d-grid" style="grid-template-columns: 1fr 1fr;">
            <div>
                <h2 class="h4">Sobre</h2>
                <p class="mb-0"><i class="bi bi-shop-window"></i>  Fast-food</p>
                <p class="mb-0"><i class="bi bi-geo-alt"></i>  Rua Ednaldo Pereira, 360, Bento Gonçalves, Rio Grande do Sul, Brasil</p>
                <p class="mb-0"><i class="bi bi-telephone"></i>  (55 54) 99999-9999</p>
            </div>
        </div>
    </div>
</div>
@endsection