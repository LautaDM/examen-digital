@extends('layouts.plantilla')
    
@section('contenido')

    <h1>Listado de actores</h1>
    @foreach ($actores as $actor)
        <li><a href="/detalleactor/{{$actor->id}}">{{ $actor->first_name . " " . $actor->last_name    }}    </a>  </li>        
    @endforeach 
    
@endsection