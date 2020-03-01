<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/actores', 'ActorController@mostrarActores');

Route::get('/detalleactor/{id}','ActorController@detalles');

Route::get('/agregaractor','ActorController@agregar');

Route::post('/agregaractor','ActorController@agregarActor');

Route::post('actores/{id?}/delete', 'ActorController@destroy');

Route::get('/peliculas','PeliculasController@listaPeliculas');

Route::get('/pelicula/{id}', 'PeliculasController@detalles');

Route::post('/pelicula/{id}','PeliculasController@editar');
