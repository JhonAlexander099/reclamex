<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar Cliente
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/clientes">
                        @csrf
                        <input type="text" name="nombres" placeholder="ingrese sus nombres" value="{{old("nombres")}}">
                        <input type="text" name="codigo" placeholder="ingrese su codigo" value="{{old("codigo")}}">
                        <input type="text" name="email" placeholder="ingrese su email" value="{{old("email")}}">
                        <input type="text" name="contraseña" placeholder="ingrese su contraseña" value="{{old("contraseña")}}">
                        <input type="submit" name="submit" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@extends("layouts.master")

@section("principal")
    <h1>Cliente</h1>
    <table border="1" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>nombres</th>
            <th>codigo</th>
            <th>email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            @if($cliente->id%2!=0)
                <tr style="background-color: #a0aec0">
            @else
                <tr>
                    @endif
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombres}}</td>
                    <td>{{$cliente->codigo}}</td>
                    <td>{{$cliente->email}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
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
