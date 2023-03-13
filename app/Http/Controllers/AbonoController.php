<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use Illuminate\Http\Request;

class AbonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonos = Abono::all();
        return view('Empleado.empleadoAbonos',compact('abonos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abonos.create');
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
        $abono = new Abono();
        $abono->id = $request->input('id');
        $abono->servicio = $request->input('servicio');
        $abono->precio = $request->input('precio');
        $abono->cantidad_abonada = $request->input('cantidad_abonada');
        $abono->save();
        return redirect(route('Empleado.empleadoAbonos'));
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
        $abono_encontrado = Abono::find($id);
        return view('abonos.edit', compact('abono_encontrado'));
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
        $abono_encontrado = Abono::find($id);
        $abono_encontrado->id = $request->input('id');
        $abono_encontrado->servicio = $request->input('servicio');
        $abono_encontrado->precio = $request->input('precio');
        $abono_encontrado->cantidad_abonada = $request->input('cantidad_abonada');
        $abono_encontrado->save();
        return redirect(route('Empleado.empleadoAbonos'));
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
        $abono_encontrado = Abono::find($id);
        $abono_encontrado->delete();
        return redirect(route('Empleado.empleadoAbonos'));
        //
    }
}
