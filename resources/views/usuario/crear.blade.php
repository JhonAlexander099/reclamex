@extends("layouts.master")

@section("principal")
    <h1>Registrar Usuario</h1>
    <form method="post" action="/usuarios">
        @csrf
        <input type="text" name="nombres" placeholder="ingrese sus nombres" value="{{old("nombres")}}">
        <input type="text" name="dni" placeholder="ingrese su dni" value="{{old("dni")}}">
        <input type="text" name="email" placeholder="ingrese su email" value="{{old("email")}}">
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

