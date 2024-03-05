@extends('layouts/plantilla')

@section('title', 'show')

@section('content')
    <a href="{{ route('usuarios.index') }}"> >> Ir a Listado de usuario </a> <br>
    <a href="{{ route('usuarios.edit', $usuario) }}"> >> Ir a editar usuario </a>
    <p>nombre: {{ $usuario->nombre }} </p> <br>
    <p>Apellido: {{ $usuario->apellido }} </p>

    <form id="eliminar-usuario" action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
        @csrf
        @method('delete')
        <button type="button" onclick="confirmar()">< Eliminar ></button>
    </form>
    <script src="../js/usuarios.js"></script>
@endsection
