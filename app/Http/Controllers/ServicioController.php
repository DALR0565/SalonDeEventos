<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('Empleado.gerenteServicios',compact('servicios'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
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
        $servicio = new Servicio();
        $servicio->id = $request->input('id');
        $servicio->servicio = $request->input('servicio');
        $servicio->precio = $request->input('precio');
        $servicio->save();
        return redirect(route('Empleado.gerenteServicios'));
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
        $servicio_encontrado = Servicio::find($id);
        return view('servicios.edit', compact('servicio_encontrado'));
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
        $servicio_encontrado = Servicio::find($id);
        $servicio_encontrado->id = $request->input('id');
        $servicio_encontrado->servicio = $request->input('servicio');
        $servicio_encontrado->precio = $request->input('precio');
        $servicio_encontrado->save();
        return redirect(route('Empleado.gerenteServicios'));
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
        $servicio_encontrado = Servicio::find($id);
        $servicio_encontrado->delete();
        return redirect(route('Empleado.gerenteServicios'));
        //
    }
}
