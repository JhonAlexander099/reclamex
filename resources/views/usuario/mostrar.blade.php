@extends("layouts.master")

@section("principal")
    <h1>Usuarios</h1>
    <table border="1" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>dni</th>
            <th>nombres</th>
            <th>categoria</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            @if($usuario->id%2!=0)
                <tr style="background-color: #a0aec0">
            @else
                <tr>
                    @endif
                    <td>{{$usuairo->id}}</td>
                    <td>{{$usuario->dni}}</td>
                    <td>{{$usuario->nombres}}</td>
                    <td>{{$usuario->categoria}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
