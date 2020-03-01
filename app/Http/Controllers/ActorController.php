<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;

class ActorController extends Controller
{
    public function mostrarActores(){
        $actores = Actor::all();
        return view('actores',compact('actores'));
    }
//Vista agregar Actor
    public function agregar(){
        $peliculas = Movie::all();
        return view('agregarActor',compact('peliculas'));
    }
//Funcion agregar Actor

    public function agregarActor(Request $datos){

       /* $validaciones = [
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3'
        ];

        $mensajes = [
            'required' => 'El campo :attribute es requerido',
            'min' => 'El :attribute debe de tener minimo 3 caracteres'
        ];

        $this->validate($validaciones,$mensajes, $datos);
        */

        $nuevoActor = new Actor;

        $nuevoActor->first_name = $datos['first_name'];
        $nuevoActor->last_name = $datos['last_name'];
        $nuevoActor->rating = $datos['rating'];
        $nuevoActor->favorite_movie_id = $datos['favorite_movie_id'];
        

        $nuevoActor->save();

        return redirect('/agregaractor');
    }

    public function destroy($id){
        $actor = Actor::whereId($id)->firstOrFail();
        $actor->delete();
        return redirect('/actores');
     
    }

    //detalle actor

    public function detalles($id){
        $actorElegido = Actor::find($id);
        return view('detalleActor',compact('actorElegido'));
        
    }
}
