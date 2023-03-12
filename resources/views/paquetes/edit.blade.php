@extends('plantillas.gerente')
@section('contenido')
<form action="{{route('paquetes.update', $paquete_encontrado->id)}}" method="post">
    @method('PUT')
    @csrf
    <label for='id'>ID</label>
    <input type='text' name='id' id='id' value="{{$paquete_encontrado->id}}">
    <br>
    <label for='paquete'>Paquete</label>
    <input type='text' name='paquete' id='paquete' value="{{$paquete_encontrado->paquete}}">
    <br>
    <label for='precio'>Precio</label>
    <input type='text' name='precio' id='precio' value="{{$paquete_encontrado->precio}}">
    <br>
    <input type="submit" value="ACTUALIZAR">
</form>
@endsection