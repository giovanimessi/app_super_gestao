
    <form method="post" action="{{ route('pedido_produto.store',['pedido' => $pedido]) }}">
        @csrf


    <select name="produto_id">
    

          <option value="" disabled selected>-- Selecione um Produto --</option>
    @foreach($produtos as $produto)
        <option value="{{ $produto->id }}" {{ old('produto_id') == $produto->id ? 'selected' : '' }}>
            {{ $produto->nome }}
        </option>
    @endforeach
    @if ($errors->has('produto_id'))
    <div class="text-danger">
        {{ $errors->first('produto_id') }}
    </div>
@endif

    </select>
    {{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}

    <button type="submit" class="borda-preta">Cadastrar</button>
</form>
