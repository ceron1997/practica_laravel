@extends('layouts/plantilla')

@section('title', 'create')

@section('content')
    <form action="{{route('usuarios.update', $usuario)}}" method="POST">

        <h1>Creacion de usuarios    </h1>
        <a href="{{route('usuarios.index')}}"> >> Ir a Listado de usuario </a> <br>
        <a href="{{route('usuarios.show', $usuario)}}"> >> Volver </a>
        @csrf
        @method('put')
        <table style="margin-top: 20px">
            <tr>
                <td>
                    Nombre:
                </td>
                <td>
                    <input type="text" name="nombre" value="{{old('nombre', $usuario->nombre)}}">
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
                    <input type="text" name="apellido" value="{{old('apellido', $usuario->apellido)}}">
                    @error('apellido')
                    <span  class="text-red-600" >* {{ $message }}</span>
                @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Actualizar Formulario</button>
                </td>
            </tr>
        </table>




    </form>
@endsection
