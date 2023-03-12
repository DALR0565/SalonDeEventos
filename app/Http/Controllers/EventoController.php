<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('Cliente.clienteEventos',compact('eventos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->id = $request->input('id');
        $evento->evento = $request->input('evento');
        $evento->precio = $request->input('precio');
        $evento->descripcion = $request->input('descripcion');
        //$evento->imagen = $request->input('imagen');
        
        $request->validate([
            'imagen' => 'required|image|max:2048'
        ]);
        $img = $request->file('imagen')->store('public/imagenes');
        $evento->imagen = Storage::url($img);
        //
        $evento->save();
        return redirect(route('Cliente.clienteEventos'));
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
    public function edit($id)
    {
        $evento_encontrado = Evento::find($id);
        return view('eventos.edit', compact('evento_encontrado'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $evento_encontrado = Evento::find($id);
        $evento_encontrado->id = $request->input('id');
        $evento_encontrado->evento = $request->input('evento');
        $evento_encontrado->precio = $request->input('precio');
        $evento_encontrado->descripcion = $request->input('descripcion');
        //
        $request->validate([
            'imagen' => 'required|image|max:2048'
        ]);
        //
        $img = $request->file('imagen')->store('public/imagenes');
        $evento_encontrado->imagen = Storage::url($img);

        $evento_encontrado->save();
        return redirect(route('Cliente.clienteEventos'));
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
        $evento_encontrado = Evento::find($id);
        $evento_encontrado->delete();
        return redirect(route('Cliente.clienteEventos'));
        //
    }
}
