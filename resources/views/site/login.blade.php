@extends('site.layouts.basico')

@section('titulo', $titulo)


@section('conteudo')


<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h2>Formulario de Login</h2>

    </div>

    <div class="Informacao-pagina">
        <div style="width: 30%;margin-left:auto;margin-right:auto">
            <form action="{{ route('site.login') }}" method="POST">
                @csrf

                <div>

                    <input type="text" id="usuario" name="usuario" value="{{ old('usuario') }}" class="borda-preta">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : ''}}

                    <div>

                        <input type="password" id="senha" value="{{old('senha')}}" name="senha" class="borda-preta">
                        {{ $errors->has('senha') ? $errors->first('senha') : ''}}
                    </div>

                    <div>
                        <button type="submit" class="borda-preta">Acessar</button>
                    </div>
                </div>
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