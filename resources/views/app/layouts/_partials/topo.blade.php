<div class="topo">

    <div class="logo">
        <img src="{{asset('assets/img/logo.png')}}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.home') }}">Home</a></li>
            <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
            <li><a href="{{ route('app.fornecedores') }}">Fornecedores</a></li>
            <li><a href="{{ route('app.produtos.index') }}">produtos</a></li>
            <li><a href="{{ route('app.sair') }}">Sair</a></li>
        </ul>
    </div>
</div>
