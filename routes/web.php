<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorContoller;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
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
/*
Route::get('/', function () {
    return "Olá,seja bem vindo ao curso";
});*/

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobrenos', [SobreNosController::class, 'sobrenos'])->name("site.sobrenos");
Route::get('/contatos', [ContatoController::class, 'contatos'])->name('site.contatos');

Route::post('/contatos', [ContatoController::class, 'create'])->name('site.create');

Route::get('/login', function () {
    return "Login";
});

//agrupar
Route::prefix('/app')->group(function () {
//->middleware('auth')


    Route::get('/clientes', function () {
        return "clientes";
    })->name('app.clientes');

    Route::get('/fornecedores',[FornecedorContoller::class,'index'])->name('fornecedor');
    Route::get('/produtos', function () {
        return "produtos";
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}',[TesteController::class, 'teste'])->name('teste');

Route::fallback(function () {
    $url = route('site.index');
    echo "A rota acessada não existe. <a href='$url'>Clique aqui</a>";
});

/*
verbo http

get 
post 
put 
patch 
delete 
options
*/

Route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome = 'Desconhecido',
        int $categoria_id = 1 //1-informacao
    ) {
        echo "Estamos aqui: $nome - $categoria_id";
    }

)
    ->where('categoria_id', '[0-9]+')
    ->where('nome', '[A-Za-z]+');
