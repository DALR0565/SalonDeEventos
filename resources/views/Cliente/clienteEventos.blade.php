@extends('plantillas.cliente')
@section('contenido')
{{--@dump($eventos)--}}
@foreach($eventos as $evento)         {{-- Recorremos los arreglos creados en el arreglo--}}
@if(!empty($evento))               {{-- Verificamos que el array no este vacio--}}
        <div class="card__perfil">
            <div class="card__nombre">
                <img src="{{$evento[4]}}" alt="">
                <h2>{{$evento[1]}}</h2>
                <p>{{$evento[2]}}</p>
            </div>
            <hr>
            <div class="card__descripcion">
                <p>{{$evento[3]}}</p>
            </div>
            <hr>
            <div class="card__button">
                <a href="{{route('eventos.edit', $evento[0])}}" class="enlace">Actualizar</a>
                <br>
                <br>
                <form action="{{route('eventos.destroy', $evento[0])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input class="enlace" type="submit" value="BORRAR">
                </form>
            </div>
        </div>
@endif
@endforeach
<section>
    <a class="btn" href="{{route('eventos.create')}}">Agregar nuevo evento</a>
    <br>
    <a class="btn" href="{{route('login')}}">Cerrar sesion</a>
</section>
@endsection