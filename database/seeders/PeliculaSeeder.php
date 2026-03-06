<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelicula;
use App\Models\Categoria;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accion = Categoria::where('nombre', 'Acción')->first();
        $comedia = Categoria::where('nombre', 'Comedia')->first();
        $drama = Categoria::where('nombre', 'Drama')->first();  
        $terror = Categoria::where('nombre', 'Terror')->first();
        $cienciaFiccion = Categoria::where('nombre', 'Ciencia Ficción')->first();
        $animacion = Categoria::where('nombre', 'Animación')->first();

        Pelicula::create([
            'titulo' => 'John Wick 4',
            'director' => 'Chad Stahelski',
            'anio' => 2023,
            'calidad' => '4K Ultra HD',
            'sinopsis' => 'John Wick descubre un camino para derrotar a la Alta Mesa.',
            'categoria_id' => $accion->id,
        ]);

        Pelicula::create([
            'titulo' => 'The Batman',
            'director' => 'Matt Reeves',
            'anio' => 2022,
            'calidad' => '4K Ultra HD',
            'sinopsis' => 'Batman investiga una serie de asesinatos en Gotham City.',
            'categoria_id' => $accion->id,
        ]);                    

        Pelicula::create([
            'titulo' => 'The Nice Guys',
            'director' => 'Shane Black',
            'anio' => 2016,
            'calidad' => '4K Ultra HD',
            'sinopsis' => 'Dos detectives en los años 50 se embarcan en una aventura para resolver un caso.',
            'categoria_id' => $comedia->id,
        ]);                

        Pelicula::create([
            'titulo' => 'The Godfather',
            'director' => 'Francis Ford Coppola',
            'anio' => 1972,
            'calidad' => '4K Ultra HD',
            'sinopsis' => 'La historia de la familia Corleone en el mundo de la mafia.',
            'categoria_id' => $drama->id,
        ]);

        Pelicula::create([
            'titulo' => 'The Shining',
            'director' => 'Stanley Kubrick',
            'anio' => 1980,
            'calidad' => '4K Ultra HD',
            'sinopsis' => 'Un hombre se aísla en un hotel aislado y pierde la cordura.',
            'categoria_id' => $terror->id,
        ]);

        Pelicula::create([
            'titulo' => 'Inception',
            'director' => 'Christopher Nolan',
            'anio' => 2010,
            'calidad' => '4K Ultra HD',
            'sinopsis' => 'Un ladrón que roba secretos corporativos a través del uso de la tecnología de sueño.',
            'categoria_id' => $cienciaFiccion->id,
        ]);

        Pelicula::create([
            'titulo' => 'Toy Story',
            'director' => 'John Lasseter',
            'anio' => 1995,
            'calidad' => '4K Ultra HD',
            'sinopsis' => 'Un grupo de juguetes que cobran vida cuando no están siendo observados.',
            'categoria_id' => $animacion->id,
        ]);
    }
}
