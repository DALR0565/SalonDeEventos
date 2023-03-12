<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquete::all();
        return view('Empleado.gerentePaquetes',compact('paquetes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paquetes.create');
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
        $paquete = new Paquete();
        $paquete->id = $request->input('id');
        $paquete->paquete = $request->input('paquete');
        $paquete->precio = $request->input('precio');
        $paquete->save();
        return redirect(route('Empleado.gerentePaquetes'));
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
        $paquete_encontrado = Paquete::find($id);
        return view('paquetes.edit', compact('paquete_encontrado'));
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
        $paquete_encontrado = Paquete::find($id);
        $paquete_encontrado->id = $request->input('id');
        $paquete_encontrado->paquete = $request->input('paquete');
        $paquete_encontrado->precio = $request->input('precio');
        $paquete_encontrado->save();
        return redirect(route('Empleado.gerentePaquetes'));
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
        $paquete_encontrado = Paquete::find($id);
        $paquete_encontrado->delete();
        return redirect(route('Empleado.gerentePaquetes'));
        //
    }
}
