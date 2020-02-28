@extends('layouts.plantilla')

@section('contenido')
    
    <form action="/agregaractor" method="post">
        @csrf
        <input type="text" name="first_name" placeholder="Primer Nombre"><br><br>
        <input type="text" name="last_name" placeholder="Apellido"><br><br>
        <input type="number" name="rating" placeholder="Raiting"><br><br>
        <select name="favorite_movie_id">
            @foreach ($peliculas as $pelicula)
                <option value=" {{$pelicula->id}} "> {{$pelicula->title}} </option>
            @endforeach

        </select><br><br>
        <input type="submit" value="Agregar Actor">
        
    </form>

@endsection