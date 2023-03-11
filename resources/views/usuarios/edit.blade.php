@extends('plantillas.gerente')
@section('contenido')
<form action="{{route('usuarios.update', $usuario_encontrado->id)}}" method="post">
    @method('PUT')
    @csrf
    <label for='id'>ID</label>
    <input type='text' name='id' id='id' value="{{$usuario_encontrado->id}}">
    <br>
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre' value="{{$usuario_encontrado->nombre}}">
    <br>
    <label for='edad'>Edad</label>
    <input type='text' name='edad' id='edad' value="{{$usuario_encontrado->edad}}">
    <br>
    <label for='sexo'>Sexo</label>
    <input type='text' name='sexo' id='sexo' value="{{$usuario_encontrado->sexo}}">
    <br>
    <input type="submit" value="ACTUALIZAR">
</form>
@endsection