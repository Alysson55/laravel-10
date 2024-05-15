<h1>Rota {{$support->id}}</h1>

<form action="{{  route ('support.store')  }}" method="POST"> 
{{-- <input type="text" value="{{  csrf_token()  }}" name="token"> --}} 
    @csrf()
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body" id="" cols="30" rows="10" placeholder="descricao"> {{ $support->body }}</textarea>
    <button type="submit">Enviar</button>


</form>


