@extends('app.layouts.basico')

@section('titulo', 'Pedido')

@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de Pedidos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>ID Pedido</th>
                            <th>Cliente</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </head>

                    <tbody>
                        @foreach($pedido as $pedidos)
                            <tr>
                                <td>{{ $pedidos->id }}</td>
                                <td>{{ $pedidos->cliente_id }}</td>
                                <td><a href="{{route('pedido_produto_create', ['pedido' => $pedidos->id ])}}">Adicionar Pedidos</a></td>
                                <td><a href="{{ route('pedido.show', ['pedido' => $pedidos->id ]) }}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$pedidos->id}}" method="post" action="{{ route('pedido.destroy', ['pedido' => $pedidos->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <!--<button type="submit">Excluir</button>-->
                                        <a href="#" onclick="document.getElementById('form_{{$pedidos->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('pedido.edit', ['pedido' => $pedidos->id ]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
               {{$pedido->links()}}

    
                <br>
                Exibindo {{ $pedido->count() }} pedidos de {{ $pedido->total() }} (de {{ $pedido->firstItem() }} a {{ $pedido->lastItem() }})
            </div>
        </div>

    </div>

@endsection

