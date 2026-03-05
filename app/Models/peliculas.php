<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    protected $table = 'peliculas';
    protected $fillable = ['titulo', 'descripcion', 'director', 'anio', 'sinopsis', 'trailer_url', 'calidad', 'categoria_id'];
}
