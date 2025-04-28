{{$slot}}
<form method="post" action="{{route('site.contatos')}}">
    @csrf
    <input name="nome" type="text" class="borda-preta" value="{{ old('nome') }}">
    @if($errors->has('nome'))
        {{ $errors->first('nome')}}
    @endif


    <br>
    <input type="text" name="telefone"  class="borda-preta"  value="{{ old('telefone') }}">
    {{$errors->has('telefone') ? $errors->first('telefone') : ''}}

    <br>
    <input type="text" name="email" placeholder="E-mail" class="borda-preta" value="{{ old('email') }}">
    {{$errors->has('email') ? $errors->first('email') : ''}}
    <br>
    <select name="motivo_contatos_id" class="borda-preta" >

        <option value="">Qual o motivo do contato?</option>
       @foreach($motivos_contatos as $key => $motivo)
       <option value="{{$motivo->id}}" {{old('motivo_contatos_id') == $motivo->id ? 'selected' : ''}}>{{$motivo->motivo_contatos}}</option>

       @endforeach
         
    </select>
    {{$errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}
    <br>
    <textarea class="borda-preta" name="mensagem" >
        @if(old('mensagem') != '')
          
             {{ old('mensagem') }}
        @else
        
        @endif
    </textarea>
    {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}
    <br>

    
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
<!--
@if($errors->any())
<div style="position:absolute;top:0px;width:100%;background:red">
    @foreach($errors->all() as $error)
      {{$error}}
    @endforeach
</div>
@endif-->
