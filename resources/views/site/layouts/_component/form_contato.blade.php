{{$slot}}
<form method="post" action="{{route('site.contatos')}}">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="borda-preta" >
    <br>
    <input type="text" name="telefone" placeholder="Telefone" class="borda-preta">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="borda-preta">
    <br>
    <select name="motivo_contato" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="0">DÃºvida</option>
        <option value="1">Elogio</option>
        <option value="3">Reclamacão</option>
    </select>
    <br>
    <textarea class="borda-preta" name="mensagem">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

<div style="position:absolute;top:0px;width:100%;background:red">
<pre>
    {{print_r($errors)}}
</pre>

</div>
