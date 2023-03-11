@extends('plantillas.gerente')
@section('contenido')
<form action="{{route('servicios.update', $servicio_encontrado->id)}}" method="post">
    @method('PUT')
    @csrf
    <label for='id'>ID</label>
    <input type='text' name='id' id='id' value="{{$servicio_encontrado->id}}">
    <br>
    <label for='nombre'>Servicio</label>
    <input type='text' name='servicio' id='servicio' value="{{$servicio_encontrado->servicio}}">
    <br>
    <label for='edad'>Precio</label>
    <input type='text' name='precio' id='precio' value="{{$servicio_encontrado->precio}}">
    <br>
    <input type="submit" value="ACTUALIZAR">
</form>
@endsection