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
                           <td>
                                <form action="{{ route('app.fornecedores.destroy', $for->id) }}" method="POST"
                                    onsubmit="return confirm('Confirma exclusão do fornecedor {{ $for->nome }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">
                                        Excluir
                                    </button>
                                </form>
                                @if (session('success'))
                                            <div style="color: green;">{{ session('success') }}</div>
                                        @endif

                                        @if (session('error'))
                                            <div style="color: red;">{{ session('error') }}</div>
                                        @endif

                            </td>
                         <td><a href="{{ route('app.fornecedores.edit',$for->id)}}">Editar</a></td>
                        </tr>
                    
                        <tr>
                            <td colspan="6">
                                <p>Lista de Produtos</p>
                                <table border="1" style="margin:20px">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($for->produtos as $produto)
                                        <tr>
                                            <td>{{ $produto->id }}</td>
                                            <td>{{ $produto->nome }}</td> {{-- coloque o nome aqui --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                   <div class="paginacao">
                {{ $fornecedor->appends($filtros)->links() }}
                {{ $fornecedor->count() }} - Total de registros
                   </div>
            </div>
        </div>
    </div>
</div>

@endsection
