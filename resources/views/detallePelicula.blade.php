@extends('layouts.plantilla')

@section('contenido')
    <h1> {{$peliculaElegida->title}} </h1>
    <li>Raiting:  {{$peliculaElegida->rating}}  </li>
    <li>Premios:  {{$peliculaElegida->awards}}  </li>
    <li>Fecha de estreno: {{$peliculaElegida->release_date}}</li>
    <li>Duracion: {{$peliculaElegida->length}}</li>
    <li>Genero: @if ($peliculaElegida->genres)
        {{$peliculaElegida->genres->name}}
        @else No tiene genero
    @endif</li><br><br><br><br>
    <center>
    <div class="formulario">
        <h2>Editar pelicula</h2>
        <form action="/pelicula/{{$peliculaElegida->id}}" method="post">
            @csrf
            <input type="text" placeholder="Titulo" name="title"><br><br>
            <input type="number" placeholder="Raiting" name="rating"><br><br>
            <input type="number" placeholder="Cantidad de premios" name="awards"><br><br>
            <input type="number" placeholder="Duracion" name="length"><br><br>
            <label for="release_date">Fecha estreno</label>
            <input type="date" name="release_date"><br><br>
            <select name="genre_id">
                @foreach ($generos as $genero)
                    <option value=" {{$genero->id}} "> {{$genero->name}} </option>
                @endforeach
            </select><br><br>
            <input type="submit">

        </form>
    </div>
    </center>
@endsection