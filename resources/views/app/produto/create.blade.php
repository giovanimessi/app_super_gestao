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
          
      
               <form method="post" action="{{route('app.produtos.store')}}">
                @csrf
                <input type="text" name="nome" placeholder="Nome" class="borda-preta">
             

                <input type="text" name="descricao" placeholder="Descricao" class="borda-preta">
            

                <input type="text" name="peso" placeholder="Peso" class="borda-preta">
          

               <select name="unidade_id">
                <option>Selecione a unidade de medida </option>

                @foreach($unidade as $unidades)
                <option value="{{$unidades->id}}">{{$unidades->descricao}}</option>

                @endforeach
               </select>
        

          
                <button type="submit"  class="borda-preta">Cadastrar</button>
               </form>

           </div>
        </div>
    </div>
</div>


@endsection