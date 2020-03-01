<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class PeliculasController extends Controller
{
    public function listaPeliculas(){
        $peliculas = Movie::all();
        return view('peliculas',compact('peliculas'));
    }
    public function detalles($id){
        $peliculaElegida = Movie::find($id);
        $generos = Genre::all();
        return view('detallePelicula',compact('peliculaElegida','generos'));
    }
    
    public function editar(Request $datos){

        $editarPelicula = Movie::find($datos->id);

        $editarPelicula->title = $datos['title'];
        $editarPelicula->rating = $datos['rating'];
        $editarPelicula->awards = $datos['awards'];
        $editarPelicula->length = $datos['length'];
        $editarPelicula->release_date = $datos['release_date'];
        $editarPelicula->genre_id = $datos['genre_id'];

        $editarPelicula->save();
        
        return redirect('/peliculas');
    }
}
