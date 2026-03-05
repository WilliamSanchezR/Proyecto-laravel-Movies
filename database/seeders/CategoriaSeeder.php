<?php

namespace Database\Seeders;
use App\Models\Categoria;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = [
            ['nombre' => 'Accion', 'Descripcion' => 'Películas de acción con emocionantes escenas y aventuras.'],
            ['nombre' => 'Comedia', 'Descripcion' => 'Películas de comedia para reír y disfrutar.'],
            ['nombre' => 'Drama', 'Descripcion' => 'Películas de drama con historias emotivas y profundas.'],
            ['nombre' => 'Terror', 'Descripcion' => 'Películas de terror para los amantes del miedo y el suspense.'],
            ['nombre' => 'Ciencia Ficción', 'Descripcion' => 'Películas de ciencia ficción con mundos futuristas y tecnología avanzada.'],
            ['nombre' => 'Animación', 'Descripcion' => 'Películas de animación para todas las edades, con personajes animados y aventuras creativas.'], 
        ];
        foreach ($generos as $genero) {
            Categoria::create($genero);
        }
    }
}
