@extends('layouts/plantilla')

@section('title', 'index')
@section('content')
<h1>Listado de Usuarios</h1>
<a href="{{route('usuarios.create')}}"> >> Ir a registro de usuario </a>
<br>
  <ul>
    @foreach ($usuarios as $usuario)
        <li>
             <a href="{{route('usuarios.show', $usuario)}}"> {{$usuario->nombre}}</a>  
        </li>
    @endforeach
  </ul>
@endsection