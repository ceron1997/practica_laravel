<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  public function index(){
    $usuarios = Usuario::Orderby('id', 'desc')->paginate(); 
    // return $usuarios; 
    return view('usuarios.usuarios', compact('usuarios')); 
  }
  public function create(){
      return view("usuarios.create"); 
  }

  public function store(UsuarioRequest $request){
    $usu = Usuario::create($request->all()); 
    return redirect()->route('usuarios.show', $usu->id);
}

public function show(Usuario $usuario){
  return view("usuarios.show", compact('usuario')); 
}

public function update(UsuarioRequest $request, Usuario $usuario ){
  $usuario->update($request->all());
  return redirect()->route('usuarios.show', $usuario->id);
}
public function edit(Usuario $usuario){

  return view('usuarios.edit', compact('usuario'));
}

public function destroy(Usuario $usuario){
  $usuario->delete(); 
  return  redirect()->route('usuarios.index'); 
}
}
