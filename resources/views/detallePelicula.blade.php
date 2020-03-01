@extends('layouts.plantilla')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title> {{$peliculaElegida->title}} </title>
</head>
<body>
    

@section('contenido')

    <h1> {{$peliculaElegida->title}} </h1>
    <li>Raiting:  {{$peliculaElegida->rating}}  </li>
    <li>Premios:  {{$peliculaElegida->awards}}  </li>
    <li>Fecha de estreno: {{$peliculaElegida->release_date}}</li>
    <li>Duracion: {{$peliculaElegida->length}}</li>
    <li>Genero: @if ($peliculaElegida->genres)
        {{$peliculaElegida->genres->name}}
        @else No tiene genero
    @endif</li>
    
    <h2>Actores</h2>
        @foreach ($peliculaElegida->actors as $actor)
            <li> {{$actor->first_name . " " . $actor->last_name}} </li>
        @endforeach

    <br><br><br><br>
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

</body>
</html>