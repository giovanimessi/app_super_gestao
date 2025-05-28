@extends('app.layouts.basico')
@section('titulo', 'Cliente')

@section('conteudo')
<div class="conteudo-pagina">
    <div>
        <div class="titulo-pagina-2">
            <h1>
                <p>Clientes - Listar</p>
            </h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('cliente.create')}}">Novo</a></li>
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
                <!--{{$clientes->toJson()}}-->

                <table border="1" width= "100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($clientes as $clie)
                        <tr>
                            <td>{{$clie->nome}}</td>
                
                           <td>
                                <a href="">
                                    <button class="borda-preta" style="background-color: #4CAF50; color: white; padding: 5px 10px; border: none;">
                                        Visualizar
                                    </button>
                                </a>
                            </td>

                            <td>
                                <a href="{{route('cliente.edit', $clie->id)}}">
                                    <button class="borda-preta" style="background-color: #2196F3; color: white; padding: 5px 10px; border: none;">
                                        Editar
                                    </button>
                                </a>
                            </td>

                            <td>
                                <form action="" method="POST" onsubmit="return confirm('Tem certeza que deseja remover?')">
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
               {{$clientes->links()}}
               {{$clientes->count()}} Total Exibido.

               
            </div>
        </div>
    </div>
</div>

@endsection
''