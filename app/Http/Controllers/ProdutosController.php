<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function buscar()
    {
        return view('produtos.search');
    }

    public function cardapio()
    {
        return view('produtos.cardapio');
    }

}
