@extends('app.layouts.basico')
@section('titulo', 'Cliente')

@section('conteudo')
<div class="conteudo-pagina">
    <div>
        <div class="titulo-pagina-2">
            <h1>
                <p>Fornecedor - Adicionar</p>
            </h1>
        </div>
        <div class="menu">
            <ul>   <li><a href="{{route('app.fornecedores.create')}}">Novo</a></li>
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
               <form method="post" action="{{route('app.fornecedores.create')}}">
                @csrf
                <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                @if ($errors->has('nome'))
                    <div style="color: red;">
                        {{ $errors->first('nome') }}
                    </div>
                 @endif

                <input type="text" name="site" placeholder="Site" class="borda-preta">
                @if($errors->has('site'))
                   <div style="color:red;">
                     {{$errors->first('site')}}
                   </div>
                @endif

                <input type="text" name="uf" placeholder="UF" class="borda-preta">
                @if($errors->has('uf'))
                  <div style="color:red;">
                    {{$errors->first('uf')}}
                  </div>

                @endif

                <input type="text" name="email"  placeholder="E-mail" class="borda-preta">
                @if($errors->has('email'))
                  <div style="color:red;">
                    {{$errors->first('email')}}

                  </div>

                @endif

                @if($msg != '')
                   <!--limpar o erro ao atulizar a pagina-->
               
                    <script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.pathname);
                        }
                    </script>
                @endif
                <button type="submit"  class="borda-preta">Cadastrar</button>
               </form>

           </div>
        </div>
    </div>
</div>


@endsection