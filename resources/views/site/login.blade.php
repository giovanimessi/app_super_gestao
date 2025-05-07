@extends('site.layouts.basico')

@section('titulo', $titulo)


@section('conteudo')


<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h2>Formulario de Login</h2>

    </div>


    <div class="Informacao-pagina">
        <div style="width: 30%;margin-left:auto;margin-right:auto">
            <form method="POST" action="{{ route('site.login') }}">
                @csrf

                <div>
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" value="{{ old('usuario') }}" class="borda-preta">
                    @if ($errors->has('usuario'))
                    <div style="color: red;">
                        {{ $errors->first('usuario') }}
                    </div>
                    @endif
                </div>

                <div>
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="borda-preta">
                    @if ($errors->has('senha'))
                    <div style="color: red;">
                        {{ $errors->first('senha') }}
                    </div>
                    @endif
                </div>
                <div style="color: red;">
                {{isset($erro) && $erro != '' ? $erro : ' '}}
                </div>

                @if($erro != '')
                   <!--limpar o erro ao atulizar a pagina-->
               
                    <script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.pathname);
                        }
                    </script>
                @endif

                <button type="submit">Enviar</button>

            </form>
           

        </div>
    </div>


</div>

<div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src="{{asset('assets/img/facebook.png')}}">
        <img src="{{asset('assets/img/linkedin.png')}}">
        <img src="{{asset('assets/img/youtube.png')}}">
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <img src="{{asset('assets/img/mapa.png')}}">
    </div>
</div>

@endsection