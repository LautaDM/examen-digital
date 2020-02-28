@extends('layouts.plantilla')

@section('contenido')
        <h1>Listado de Peliculas:</h1>
        @foreach ($peliculas as $pelicula)
        <li><a href="/pelicula/{{$pelicula->id}}"> {{$pelicula->title}} </a></li>
        @endforeach
@endsection