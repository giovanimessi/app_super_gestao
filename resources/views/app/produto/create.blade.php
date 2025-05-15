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
                <input type="text" name="nome"  value="{{old('nome')}}" placeholder="Nome" class="borda-preta">
               @if($errors->has('nome'))
               <div style="color:red">

                 {{ $errors->first('nome') }}
               </div>
               

               @endif

                <input type="text" name="descricao" value="{{old('descricao')}}" placeholder="Descricao" class="borda-preta">
                @if($errors->has('descricao'))
                 <div style="color:red">
                    {{ $errors->first('descricao') }}

                 </div>
                @endif

               <input type="text" name="peso" value="{{old('peso')}}" placeholder="Peso" class="borda-preta">
               @if($errors->has('peso'))
               <div style="color:red">
                  {{$errors->first('peso')}}
               </div>
               @endif
          

               <select name="unidade_id">
                <option>Selecione a unidade de medida </option>

                @foreach($unidade as $unidades)
                <option value="{{$unidades->id}}" {{old('unidade_id') == $unidades->id ? 'selected ': ''}}>{{$unidades->descricao}}</option>

                @endforeach

               </select>
                @if($errors->has('unidade_id'))

                <div style="color:red">
                    {{$errors->first('unidade_id')}}
                </div>
                @endif
        

          
                <button type="submit"  class="borda-preta">Cadastrar</button>
               </form>

           </div>
        </div>
    </div>
</div>


@endsection