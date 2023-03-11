@extends('plantillas.gerente')
@section('contenido')
<form action="{{route('paquetes.store')}}" method="post">
    @csrf
    <label for='id'>ID</label>
    <input type='text' name='id' id='id'>
    <br>
    <label for='nombre'>Paquete</label>
    <input type='text' name='paquete' id='paquete'>
    <br>
    <label for='edad'>Precio</label>
    <input type='text' name='precio' id='precio'>
    <br>
    <input type="submit" value="GUARDAR">
</form>
@endsection