@extends('plantillas.gerente')
@section('contenido')
<form action="{{route('servicios.store')}}" method="post">
    @csrf
    <label for='id'>ID</label>
    <input type='text' name='id' id='id'>
    <br>
    <label for='servicio'>Servicio</label>
    <input type='text' name='servicio' id='servicio'>
    <br>
    <label for='precio'>Precio</label>
    <input type='text' name='precio' id='precio'>
    <br>
    <input type="submit" value="GUARDAR">
</form>
@endsection