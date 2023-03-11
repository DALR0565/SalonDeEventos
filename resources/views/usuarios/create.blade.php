@extends('plantillas.gerente')
@section('contenido')
<form action="{{route('usuarios.store')}}" method="post">
    @csrf
    <label for='id'>ID</label>
    <input type='text' name='id' id='id'>
    <br>
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre'>
    <br>
    <label for='edad'>Edad</label>
    <input type='text' name='edad' id='edad'>
    <br>
    <label for='sexo'>Sexo</label>
    <input type='text' name='sexo' id='sexo'>
    <br>
    <input type="submit" value="GUARDAR">
</form>
@endsection