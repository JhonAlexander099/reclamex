@extends("layouts.master")

@section("principal")
    <h1>Registrar Reclamo</h1>
    <form method="post" action="/reclamos">
        @csrf
        <input type="text" name="motivo" placeholder="ingrese su motivo" value="{{old("motivo")}}">
        <input type="text" name="fecha_recepcion" placeholder="ingrese su fecha de recepcion" value="{{old("fecha_recepcion")}}">
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

