@extends('layouts.plantilla')

@section('contenido')

    <center>
    <h1> {{$actorElegido->first_name . ' ' . $actorElegido->last_name}} </h1>

    <li>Raiting: {{$actorElegido->rating}}</li>
    <li>Pelicula favorita: @if ($actorElegido->movie)
         {{$actorElegido->movie->title}}
         @else No tiene pelicula favorita
        @endif </li>
    </center>
    
@endsection