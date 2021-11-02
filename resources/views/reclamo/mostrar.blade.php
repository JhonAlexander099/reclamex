@extends("layouts.master")

@section("principal")
    <h1>Reclamos</h1>
    <table border="1" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>motivo</th>
            <th>fecha_recepcion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reclamos as $reclamo)
            @if($reclamo->id%2!=0)
                <tr style="background-color: #a0aec0">
            @else
                <tr>
                    @endif
                    <td>{{$reclamo->id}}</td>
                    <td>{{$reclamo->motivo}}</td>
                    <td>{{$reclamo->fecha_recepcion}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
