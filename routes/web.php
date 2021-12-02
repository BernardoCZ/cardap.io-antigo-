<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('produtos.search');
})->name('home');

Route::get('/buscar', [ProdutosController::class, 'buscar'])->name('produtos.buscar');

Route::get('/login', [UsuariosController::class, 'login'])->name('login');
Route::post('/login', [UsuariosController::class, 'login']);

Route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');

Route::get('/cadastro', [UsuariosController::class, 'create'])->name('cadastro');

Route::get('/{estabelecimento}/cardapio', [ProdutosController::class, 'cardapio'])->name('cardapio');