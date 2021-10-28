<?php

namespace App\Http\Controllers;

use App\Models\Recado;
use Illuminate\Http\Request;

class RecadosController extends Controller
{
    public function index()
    {
        // passa os valores e redireciona para a página onde mostra os recados
        //ordena por id descrescente para mostra os mais novos primeiro
        $recados = Recado::orderBy('id', 'desc')->get();

        return view('recados.index', ['recados' => $recados, 'pagina' => 'recados']);
    }

    public function create()
    {
        // redireciona para o formulário de inserção de recado
        return view('recados.create', ['pagina' => 'recados']);
    }

    public function insert(Request $form)
    {
        // salva o recado no banco e redireciona para a página onde mostra os recados
        $recado = new Recado();

        $recado->nome = $form->nome;
        $recado->comentario = $form->comentario;

        $recado->save();

        return redirect()->route('recados.index');
    }

    public function edit(Recado $recado)
    {
        // redireciona para o formulário de edição de recado
        return view('recados.edit', ['recado' => $recado, 'pagina' => 'recados']);
    }

    public function update(Request $form, Recado $recado)
    {
        // salva o recado atualizado no banco e redireciona para a página onde mostra os recados
        $recado->nome = $form->nome;
        $recado->comentario = $form->comentario;

        $recado->save();

        return redirect()->route('recados.index');
    }

    public function remove(Recado $recado)
    {
        // redireciona para a página de confirmação de exclusão de recado
        return view('recados.remove', ['recado' => $recado, 'pagina' => 'recados']);
    }

    public function delete(Recado $recado)
    {
        // exclui o recado no banco e redireciona para a página onde mostra os recados
        $recado->delete();

        return redirect()->route('recados.index');
    }
}
