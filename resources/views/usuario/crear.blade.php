<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar Usuarios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/usuarios">
                        @csrf
                        <input type="text" name="nombres" placeholder="ingrese sus nombres" value="{{old("nombres")}}">
                        <input type="text" name="dni" placeholder="ingrese su dni" value="{{old("dni")}}">
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
    <h1>Usuario</h1>
    <table border="1" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>nombres</th>
            <th>dni</th>
            <th>email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            @if($usuario->id%2!=0)
                <tr style="background-color: #a0aec0">
            @else
                <tr>
                    @endif
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nombres}}</td>
                    <td>{{$usuario->dni}}</td>
                    <td>{{$usuario->email}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
@extends("layouts.master")

@section("principal")
    <h1>Registrar Usuario</h1>
    <form method="post" action="/usuario">
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

