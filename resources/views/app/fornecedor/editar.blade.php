@extends('app.layouts.basico')
@section('titulo', 'Cliente')

@section('conteudo')
<div class="conteudo-pagina">
  <div>
    <div class="titulo-pagina-2">
      <h1>
        <p>Fornecedor - Editar</p>
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

        @if (isset($msg))
        <div style="color: green;">
          {{ $msg }}
        </div>
        @endif
        <form method="post" action="{{route('app.fornecedores.update', $fornecedor->id)}}">
          @csrf
          @method('PUT')

          <input type="hidden" name="id" value="{{$fornecedor->id}}">
       
          <input type="text" name="nome" value="{{ $fornecedor->nome }}" class="borda-preta">
          @if ($errors->has('nome'))
          <div style="color: red;">
            {{ $errors->first('nome') }}
          </div>
          @endif

          <input type="text" name="site" value="{{$fornecedor->site}}" class="borda-preta">
          @if($errors->has('site'))
          <div style="color:red;">
            {{$errors->first('site')}}
          </div>
          @endif

          <input type="text" name="uf" value="{{$fornecedor->uf}}" class="borda-preta">
          @if($errors->has('uf'))
          <div style="color:red;">
            {{$errors->first('uf')}}
          </div>

          @endif

          <input type="text" name="email" value="{{$fornecedor->email}}" class="borda-preta">
          @if($errors->has('email'))
          <div style="color:red;">
            {{$errors->first('email')}}

          </div>

          @endif


          <button type="submit" class="borda-preta">Atualizar</button>
        </form>

      </div>
    </div>
  </div>
</div>


@endsection