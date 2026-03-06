<?php

namespace App\Models;

use Database\Factories\PeliculaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    use HasFactory;

    protected $table = 'peliculas';

    protected static function newFactory()
    {
        return PeliculaFactory::new();
    }

    protected $fillable = [
        'titulo',
        'descripcion',
        'director',
        'anio',
        'sinopsis',
        'trailer_url',
        'calidad',
        'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(categorias::class, 'categoria_id');
    }
}