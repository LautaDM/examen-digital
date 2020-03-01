@extends('layouts.plantilla')
 
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Peliculas</title>

        
</body>
</html>

@section('contenido')
<div class="col-12 caja-peliculas">
        <div class="col-12 titulo-peliculas">
                <h1>Listado de Peliculas</h1>
        </div>
        
                @foreach ($peliculas as $pelicula)
                   <div class="peliculas">
                        <li><a href="/pelicula/{{$pelicula->id}}"> {{$pelicula->title}} </a></li>
                   </div>
                @endforeach
</div>
@endsection

</head>
<body>