<?php

namespace Database\Factories;

use App\Models\categorias;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    protected $model = categorias::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('es_ES');
        
        $categorias = [
            'Acción', 'Aventura', 'Ciencia Ficción', 'Comedia', 'Drama',
            'Terror', 'Suspense', 'Romance', 'Animación', 'Documental',
            'Fantasía', 'Crimen', 'Misterio', 'Musical', 'Western'
        ];
        
        return [
            'nombre' => $faker->unique()->randomElement($categorias),
            'descripcion' => $faker->sentence(),
            'activo' => $faker->boolean(80),
        ];
    }
}
