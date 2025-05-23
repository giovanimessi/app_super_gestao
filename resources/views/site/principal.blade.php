@extends('site.layouts.basico')
@section('titulo', 'Principal')
@section('conteudo')



<div class="conteudo-destaque">

    <div class="esquerda">
        <div class="informacoes">
            <h1>Sistema Super Gestão</h1>
            <p>Software para gestão empresarial ideal para sua empresa.<p>
            <div class="chamada">
            <img src="{{asset('assets/img/check.png')}}" alt="Check">
                <span class="texto-branco">Gestão completa e descomplicada</span>
            </div>
            <div class="chamada">
            <img src="{{asset('assets/img/check.png')}}" alt="Check">
                <span class="texto-branco">Sua empresa na nuvem</span>
            </div>
        </div>

        <div class="video">
            <img src="{{asset('assets/img/player_video.jpg')}}">
        </div>
    </div>

    <div class="direita">
        <div class="contato">
            <h1>Contato</h1>
            <p>Caso tenha qualquer duvida por favor entre em contato conosco.<p>
            @component('site.layouts._component.form_contato',['motivos_contatos' => $motivos_contatos])
            @endcomponent
             
        </div>
    </div>
</div>
@endsection