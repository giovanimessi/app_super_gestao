@extends('app.layouts.basico')
@section('titulo', 'Produto')

@section('conteudo')
<div class="conteudo-pagina">
    <div>
        <div class="titulo-pagina-2">
            <h1>
                <p>Produto - Adicionar</p>
            </h1>
        </div>
        <div class="menu">
            <ul>   <li><a href="{{route('app.produtos.index')}}">Voltar</a></li>
            <li><a href="">Consultar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
           <div style="width: 30%;margin-left:auto;margin-right:auto;">
          
              @componenet('app.produto_detalhes_form_create_edit')
              @endcomponent

           </div>
        </div>
    </div>
</div>


@endsection