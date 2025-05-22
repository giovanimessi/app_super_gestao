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
               @if(session('success'))
                    <div style="background-color: #d4edda; color:rgb(87, 21, 51); border: 1px solid #c3e6cb; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
                        {{ session('success') }}
                    </div>
                @endif
            <div style="width: 90%; margin-left:auto; margin-right:auto;">
                {{$produtos->toJson()}}
                <table border="1" width= "100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th>Peso</th>
                            <th>Unidade Id</th>
                            <th>Comprimento</th>
                            <th>Altura</th>
                            <th>Largura</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($produtos as $prod)
                        <tr>
                            <td>{{$prod->nome}}</td>
                            <td>{{$prod->descricao}}</td>
                            <td>{{$prod->peso}}</td>
                            <td>{{$prod->unidade_id}}</td>
                            <td>{{$prod->itemDetalhe->comprimento ?? ''}}</td>
                            <td>{{$prod->itemDetalhe->altura ?? ''}}</td>
                            <td>{{$prod->itemDetalhe->largura ?? ''}}</td>
                           <td>
                                <a href="{{ route('app.produtos.show', $prod->id) }}">
                                    <button class="borda-preta" style="background-color: #4CAF50; color: white; padding: 5px 10px; border: none;">
                                        Visualizar
                                    </button>
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('app.produtos.edit', $prod->id) }}">
                                    <button class="borda-preta" style="background-color: #2196F3; color: white; padding: 5px 10px; border: none;">
                                        Editar
                                    </button>
                                </a>
                            </td>

                            <td>
                                <form action="{{ route('app.produtos.destroy', $prod->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="borda-preta" style="background-color: #f44336; color: white; padding: 5px 10px; border: none;">
                                        Excluir
                                    </button>
                                </form>
                            </td>

                   
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