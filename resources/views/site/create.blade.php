<h1>Nova Rota</h1>


<form action="{{  route ('support.store')  }}" method="POST">
    {{-- <input type="text" value="{{  csrf_token()  }}" name="token"> --}}

    @csrf
    <input type="text"  value="{{ old('subject') }}" name="subject">
    <textarea name="body" id="" cols="30" rows="10" placeholder="descricao"> {{ old('body') }}</textarea>
    <button type="submit">Enviar</button>


</form>

jnbd
