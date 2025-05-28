@extends('app.layouts.basico')
@section('titulo', 'Produtos')

@section('conteudo')
<div class="conteudo-pagina">
    <div>
        <div class="titulo-pagina-2">
            <h1>
                <p>Produtos - Visualizar</p>
            </h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('app.produtos.index')}}">Voltar</a></li>
                <li><a href="">Consultar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left:auto; margin-right:auto;">
                <table border="1" width= "100%">
                    <thead>
                        <tr>
                             <th>ID</th>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th>Peso</th>
                            <th>Unidade Id</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td>{{$produto->id}}</td>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->peso}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->unidade_id}}</td>
                            <td><a href="">Excluir</a></td>
                            <td><a href="">Editar</a></td>
                   
                    
                    </tbody>
                </table>
            

               
            </div>
        </div>
    </div>
</div>

@endsection
''