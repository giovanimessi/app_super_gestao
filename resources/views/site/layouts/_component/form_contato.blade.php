{{$slot}}
<form method="post" action="{{route('site.contatos')}}">
    @csrf
    <input name="nome" type="text" class="borda-preta" value="{{ old('nome') }}">

    <br>
    <input type="text" name="telefone" placeholder="Telefone" class="borda-preta"  value="{{ old('telefone') }}">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="borda-preta" value="{{ old('email') }}">
    <br>
    <select name="motivo_contatos_id" class="borda-preta" >

        <option value="">Qual o motivo do contato?</option>
       @foreach($motivos_contatos as $key => $motivo)
       <option value="{{$motivo->id}}" {{old('motivo_contatos_id') == $motivo->id ? 'selected' : ''}}>{{$motivo->motivo_contatos}}</option>

       @endforeach
         
    </select>
    <br>
    <textarea class="borda-preta" name="mensagem" >
        @if(old('mensagem') != '')
          
             {{ old('mensagem') }}
        @else
        
           Preencha aqui a sua mensagem
        @endif
    </textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

<div style="position:absolute;top:0px;width:%;background:red">
<pre>
    {{print_r($errors)}}
</pre>

</div>
