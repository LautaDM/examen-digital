@extends('layouts.plantilla')

    

@section('contenido')
<div class="col-xs-12 col-md-6 col-lg-6 list-unstyled ">
    <h1> {{$peliculaElegida->title}} </h1>
    <li>Raiting:  {{$peliculaElegida->rating}}  </li>
    <li>Premios:  {{$peliculaElegida->awards}}  </li>
    <li>Fecha de estreno: {{$peliculaElegida->release_date}}</li>
    <li>Duracion: {{$peliculaElegida->length}}</li>
    <li>Genero: @if ($peliculaElegida->genres)
        {{$peliculaElegida->genres->name}}
        @else No tiene genero
    @endif</li>
</div>
<div class="col-xs-12 col-md-6 col-lg-6 list-unstyled">
    <h2>Actores</h2>

        @foreach ($peliculaElegida->actors as $actor)
            <li> {{$actor->first_name . " " . $actor->last_name}} </li>
        @endforeach
</div>
    <br><br><br><br>
    <center>
    <div class="col-12">
        <h2>Editar pelicula</h2>    
        <form action="/pelicula/{{$peliculaElegida->id}}" method="post">
            @csrf
            <input type="text" placeholder="Titulo" name="title"><br><br>
            <input type="number" placeholder="Raiting" name="rating"><br><br>
            <input type="number" placeholder="Cantidad de premios" name="awards"><br><br>
            <input type="number" placeholder="Duracion" name="length"><br><br>
            <label for="release_date">Fecha estreno</label>
            <input type="date" name="release_date"><br><br>
            <label for="genre_id">Genero  </label>
            <select name="genre_id">
                @foreach ($generos as $genero)
                    <option value=" {{$genero->id}} "> {{$genero->name}} </option>
                @endforeach
            </select><br><br>
            <input type="submit" class="btn bg-info" value="Editar"><br><br>

        </form>
    </div>
    </center>

@endsection
