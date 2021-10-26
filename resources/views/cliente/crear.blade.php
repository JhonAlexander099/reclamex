@extends("layouts.master")

@section("principal")
    <h1>Registrar Cliente</h1>
    <form method="post" action="/clientes">
        @csrf
        <input type="text" name="nombres" placeholder="ingrese sus nombres" value="{{old("nombres")}}">
        <input type="text" name="codigo" placeholder="ingrese su codigo" value="{{old("codigo")}}">
        <input type="text" name="email" placeholder="ingrese su email" value="{{old("email")}}">
        <input type="text" name="contraseña" placeholder="ingrese su contraseña" value="{{old("contraseña")}}">
        <input type="submit" name="submit" value="Guardar">
    </form>
    @if($errors->any())
        <div style="color:red">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif
@endsection
