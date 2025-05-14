@extends('app.layouts.basico')
@section('titulo', 'Produtos')

@section('conteudo')
<div class="conteudo-pagina">
    <div>
        <div class="titulo-pagina-2">
            <h1>
                <p>Produtos - Listar</p>
            </h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('app.produtos.create')}}">Novo</a></li>
                <li><a href="">Consultar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left:auto; margin-right:auto;">
                <table border="1" width= "100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th>Peso</th>
                            <th>Unidade Id</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($produtos as $prod)
                        <tr>
                            <td>{{$prod->nome}}</td>
                            <td>{{$prod->peso}}</td>
                            <td>{{$prod->descricao}}</td>
                            <td>{{$prod->unidade_id}}</td>
                           <td>
                             

                            </td>
                         <td><a href="">Editar</a></td>
                   
                        @endforeach
                    </tbody>
                </table>
               {{$produtos->links()}}
               {{$produtos->count()}} Total Exibido.

               
            </div>
        </div>
    </div>
</div>

@endsection
''