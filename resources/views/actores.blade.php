@extends('layouts.plantilla')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Actores</title>
    </head>
    <body>
        
    
@section('contenido')

    <div class="col-12 titulo-actores">
        <h1>Listado de actores</h1>
    </div>
    @foreach ($actores as $actor)
        <div class="actores">
            <li><a href="/detalleactor/{{$actor->id}}">{{ $actor->first_name . " " . $actor->last_name    }}    </a> </li>
            <form method="post" action="{!! action('ActorController@destroy', $actor->id) !!}" class="pull-left">
                {!! csrf_field() !!}
                <div >
                    <button role="button" type="submit" class="btn">Eliminar</button>
                </div>                
            </form>        
        </div>
    @endforeach 
    
@endsection

</body>
</html>