@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Película: {{ $peliculas->titulo }}</h1>

    <p><strong>Descripción:</strong> {{ $peliculas->descripcion }}</p>
    <p><strong>Director:</strong> {{ $peliculas->director }}</p>
    <p><strong>Año:</strong> {{ $peliculas->anio }}</p>
    <p><strong>Sinopsis:</strong> {{ $peliculas->sinopsis }}</p>
    <p><strong>Tráiler:</strong> <a href="{{ $peliculas->trailer_url }}" target="_blank">{{ $peliculas->trailer_url }}</a></p>
    <p><strong>Calidad:</strong> {{ $peliculas->calidad }}</p>

    <a href="{{ route('peliculas.edit', $peliculas->id) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('peliculas.destroy', $peliculas->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta película?')">Eliminar</button>
    </form>
    <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Volver</a>
@endsection