@extends('app.layouts.basico')
@section('titulo', 'Cliente')

@section('conteudo')
<div class="conteudo-pagina">
    <div>
        <div class="titulo-pagina-2">
            <h1>
                <p>Produto - Adicionar</p>
            </h1>
        </div>
        <div class="menu">
            <ul>   <li><a href="{{route('cliente.index')}}">Voltar</a></li>
            <li><a href="">Consultar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
           <div style="width: 30%;margin-left:auto;margin-right:auto;">
          
      
               <form method="post" action="{{route('cliente.update',$cliente->id)}}">
                @csrf
                @method('PUT')
               <input type="hidden" name="id" value="{{ $cliente->id }}">

            

                <input type="text" name="nome"  value="{{$cliente->nome ?? old('nome')}}" placeholder="Nome" class="borda-preta">
               @if($errors->has('nome'))
               <div style="color:red">

                 {{ $errors->first('nome') }}
               </div>

               @endif
          
                <button type="submit"  class="borda-preta">Atualizar</button>
               </form>

           </div>
        </div>
    </div>
</div>


@endsection