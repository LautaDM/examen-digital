@extends('layouts.plantilla')

@section('contenido')

    <center>
    <h1> {{$actorElegido->first_name . ' ' . $actorElegido->last_name}} </h1>

    <li class="list-unstyled">Raiting: {{$actorElegido->rating}}</li>
    <li class="list-unstyled">Pelicula favorita: @if ($actorElegido->movie)
         {{$actorElegido->movie->title}}
         @else No tiene pelicula favorita
        @endif </li><br><br>
    <h2>Peliculas en las cuales actuo</h2><br>
    @foreach ($actorElegido->movies as $pelicula)
    
    <li class="list-unstyled"> {{$pelicula->title}} </li>
    @endforeach
    </center>
    
@endsection