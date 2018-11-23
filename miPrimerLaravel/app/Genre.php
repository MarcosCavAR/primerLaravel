<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres'; //porque le cambie el nombre a la tabla si fuese en ingles laravel lo pone en plural solo
    protected $guarded = ['created_at', 'updated_at', 'id'];

    public function movies()
    {
      return $this->hasMany(Movie::class,'id', 'genre_id');
    }
}
