<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Actor extends Model
{
    public $guarded = [];
    
    public function movie(){
        return $this->belongsTo(Movie::class, 'favorite_movie_id');
    }
    
/*   
    No funciona la relacion

public function movies(){
        return $this->belongsToMany(Movie::class, 'actor_movie', 'actor_id', 'movie_id');
    }
*/

}

