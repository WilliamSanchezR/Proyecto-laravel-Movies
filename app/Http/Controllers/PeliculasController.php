<?php

namespace App\Http\Controllers;

use App\Models\peliculas;
use Illuminate\Http\Request;
use App\Models\categorias;


class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = peliculas::all();
        return view('peliculas.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = categorias::all();
        return view('peliculas.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'director' => 'required',
            'anio' => 'required|integer',
            'sinopsis' => 'required',
            'trailer_url' => 'required|url',
            'calidad' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        peliculas::create($request->all());
        return redirect()->route('peliculas.index')->with('success', 'Película creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(peliculas $pelicula)
    {
        return view('peliculas.show', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peliculas $pelicula)
    {
        $categorias = categorias::all();
        return view('peliculas.edit', compact('pelicula', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peliculas $pelicula)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'director' => 'required',
            'anio' => 'required|integer',
            'sinopsis' => 'required',
            'trailer_url' => 'required|url',
            'calidad' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $pelicula->update($request->all());
        return redirect()->route('peliculas.index')->with('success', 'Película actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peliculas $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('peliculas.index')->with('success', 'Película eliminada exitosamente.');
    }
}
