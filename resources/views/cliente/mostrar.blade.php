@extends("layouts.master")

@section("principal")
    <h1>Clientes</h1>
    <table border="1" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>codigo</th>
            <th>nombres</th>
            <th>direccion</th>
            <th>email</th>
            <th>calificacion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            @if($cliente->id%2!=0)
                <tr style="background-color: #a0aec0">
            @else
                <tr>
                    @endif
                    <td>{{$usuairo->id}}</td>
                    <td>{{$usuario->codigo}}</td>
                    <td>{{$usuario->nombres}}</td>
                    <td>{{$usuario->direccion}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->calificacion}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
