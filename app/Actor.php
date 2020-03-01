<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;


class Actor extends Model
{
    public $guarded = [];
    
    public function movie(){
        return $this->belongsTo(Movie::class, 'favorite_movie_id');
    }

    public function movies(){
      return  $this->belongsToMany(Movie::class, 'actor_movie', 'movie_id','actor_id');
    }


}

