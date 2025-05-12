@extends('app.layouts.basico')
@section('titulo', 'Cliente')

@section('conteudo')
<div class="conteudo-pagina">
    <div>
        <div class="titulo-pagina-2">
            <h1>
                <p>Fornecedor</p>
            </h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedores.create')}}">Novo</a></li>
                <li><a href="{{route('app.fornecedores')}}">Consultar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
           <div style="width: 30%;margin-left:auto;margin-right:auto;">
               <form method="post" action="{{route('app.fornecedores.listar')}}">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                    <input type="text" name="site" placeholder="Site" class="borda-preta">
                    <input type="text" name="uf" placeholder="UF" class="borda-preta">
                    <input type="text" name="email"  placeholder="E-mail" class="borda-preta">

                    <button type="submit"  class="borda-preta">Pesquisar</button>
               </form>

           </div>
        </div>
    </div>
</div>


@endsection