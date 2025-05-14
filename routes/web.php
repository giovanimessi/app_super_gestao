<?php


use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorContoller;
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
    return "Ol�,seja bem vindo ao curso";
});*/

Route::get('/', 'PrincipalController@principal')->name('site.index')->middleware('log.acesso');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contatos')->name('site.contatos');
Route::post('/contato', 'ContatoController@create')->name('site.contatos');
Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

Route::middleware('autenticacao:padrao,visitantes,p3,p4')->prefix('/app')->group(function () {
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');
    Route::get('/cliente','ClienteController@index')->name('app.clientes');

    Route::get('/fornecedore', 'FornecedorController@index')->name('app.fornecedores');

    Route::post('/fornecedore/listar', 'FornecedorController@listar')->name('app.fornecedores.listar');
     Route::get('/fornecedore/listar', 'FornecedorController@listar')->name('app.fornecedores.listar');

    Route::get('/fornecedore/adicionar', 'FornecedorController@create')->name('app.fornecedores.create');
    Route::post('/fornecedore/adicionar', 'FornecedorController@create')->name('app.fornecedores.create');

    Route::get('/fornecedore/editar/{id}', 'FornecedorController@editar')->name('app.fornecedores.edit');
    Route::put('/fornecedor/atualizar/{id}', 'FornecedorController@update')->name('app.fornecedores.update');

    Route::delete('/fornecedor/{id}', 'FornecedorController@destroy')
         ->name('app.fornecedores.destroy');

    Route::get('/produtos','ProdutoController@index')->name('app.produtos.index');
     Route::get('/produtos/create','ProdutoController@create')->name('app.produtos.create');

});




Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">clique aqui</a> para ir para página inicial';
});
