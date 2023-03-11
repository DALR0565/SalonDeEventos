<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('Empleado.gerenteUsuarios',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->id = $request->input('id');
        $usuario->nombre = $request->input('nombre');
        $usuario->edad = $request->input('edad');
        $usuario->sexo = $request->input('sexo');
        $usuario->save();
        return redirect(route('Empleado.gerenteUsuarios'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        //
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $usuario_encontrado = Usuario::find($id);
        return view('usuarios.edit', compact('usuario_encontrado'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $usuario_encontrado = Usuario::find($id);
        $usuario_encontrado->id = $request->input('id');
        $usuario_encontrado->nombre = $request->input('nombre');
        $usuario_encontrado->edad = $request->input('edad');
        $usuario_encontrado->sexo = $request->input('sexo');
        $usuario_encontrado->save();
        return redirect(route('Empleado.gerenteUsuarios'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario_encontrado = Usuario::find($id);
        $usuario_encontrado->delete();
        return redirect(route('Empleado.gerenteUsuarios'));
        //
    }
}
