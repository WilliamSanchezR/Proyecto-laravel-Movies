<?php

namespace App\Models;

use Database\Factories\CategoriaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected static function newFactory()
    {
        return CategoriaFactory::new();
    }

    protected $fillable = [
        'nombre',
        'descripcion',
        'activo',
    ];

    public function peliculas()
    {
        return $this->hasMany(peliculas::class, 'categoria_id');
    }
}