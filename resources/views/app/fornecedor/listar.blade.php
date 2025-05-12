@extends('app.layouts.basico')
@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">
    <div>
        <div class="titulo-pagina-2">
            <h1>
                <p>Fornecedor - Listar</p>
            </h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedores.create') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedores') }}">Consultar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left:auto; margin-right:auto;">
                <table border="1" width= "100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>Estado</th>
                            <th>E-mail</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fornecedor as $for)
                        <tr>
                            <td>{{ $for->nome }}</td>
                            <td>{{ $for->site }}</td>
                            <td>{{ $for->uf }}</td>
                            <td>{{ $for->email }}</td>
                            <td>Excluir</td>
                         <td><a href="{{ route('app.fornecedores.edit',$for->id)}}">Editar</a></td>
                   
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

@endsection
