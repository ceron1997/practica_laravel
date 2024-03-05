@extends('layouts/plantilla')

@section('title', 'create')

@section('content')
    <form action="{{route('usuarios.store')}}" method="POST">

        <h1>Creacion de usuarios    </h1>
        <a href="{{route('usuarios.index')}}"> >> Ir a Listado de usuario </a>
        @csrf

        <table style="margin-top: 20px">
            <tr>
                <td>
                    Nombre:
                </td>
                <td>
                    <input type="text" name="nombre" value="{{old('nombre')}}">
                    @error('nombre')
                    <span  class="text-red-600" >* {{ $message }}</span>
                @enderror
                </td>
            </tr>
            <tr>
                <td>
                    Apellido:
                </td>
                <td>
                    <input type="text" name="apellido" value="{{old('apellido')}}">
                    @error('apellido')
                    <span  class="text-red-600" >* {{ $message }}</span>
                @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Enviar Formulario</button>
                </td>
            </tr>
        </table>




    </form>
@endsection
