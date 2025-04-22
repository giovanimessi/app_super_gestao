<h3>Fornecedores</h3>

Fornecedor:{{$fornecedores[0]['nome']}}
<br>

Status:{{$fornecedores[0]['status']}}
<br>
@if($fornecedores[0]['status'] == 'N')

   <h3>Fornecedor Inativo</h3>

@endif

Status:{{$fornecedores[0]['status'] ? 'Inativo': 'Ativo'}}