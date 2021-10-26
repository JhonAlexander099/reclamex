<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar Reclamo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/reclamos">
                        @csrf
                        <input type="text" name="motivo" placeholder="ingrese su motivo" value="{{old("motivo")}}">
                        <input type="text" name="fecha_recepcion" placeholder="ingrese su fecha de recepcion" value="{{old("fecha_recepcion")}}">
                        <input type="submit" name="submit" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@extends("layouts.master")

@section("principal")
    <h1>Reclamo</h1>
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

