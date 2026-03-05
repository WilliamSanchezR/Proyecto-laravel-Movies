@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Categoría: {{ $categorias->nombre }}</h1>
    <p><strong>Descripción:</strong> {{ $categorias->descripcion }}</p>
    <p><strong>Activo:</strong> {{ $categorias->activo ? 'Sí' : 'No' }}</p>

    <a href="{{ route('categorias.edit', $categorias->id) }}" class="btn btn-warning mb-3">Editar Categoría</a>
    <form action="{{ route('categorias.destroy', $categorias->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mb-3" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">Eliminar Categoría</button>
    </form>
    <a href="{{ route('categorias.index') }}" class="btn btn-secondary mb-3">Volver a Categorías</a>

    <h3 class="mt-4">Películas de esta categoría</h3>
    @if ($peliculas->isEmpty())
        <p>No hay películas asociadas.</p>
    @else
        <ul class="list-group">
            @foreach ($peliculas as $pelicula)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $pelicula->titulo }}
                    <a href="{{ route('peliculas.show', $pelicula->id) }}" class="btn btn-sm btn-info">Ver</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection