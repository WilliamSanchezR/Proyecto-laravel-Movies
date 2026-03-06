<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Pelicula extends Model
{
    protected $table = 'peliculas';

    protected $fillable = [
        'titulo',    
        'director',
        'anio',
        'calidad',
        'sinopsis',
        'trailer_url',
        'descripcion',
        'categoria_id',        
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    
}
