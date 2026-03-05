@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Películas</h1>
    <a href="{{ route('peliculas.create') }}" class="btn btn-primary mb-3">Agregar Película</a>
    <a href="{{ route('categorias.index') }}" class="btn btn-secondary mb-3">Ver Categorías</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Director</th>
                <th>Año</th>
                <th>Calidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peliculas as $pelicula)
                <tr>
                    <td>{{ $pelicula->id }}</td>
                    <td>{{ $pelicula->titulo }}</td>
                    <td>{{ $pelicula->director }}</td>
                    <td>{{ $pelicula->anio }}</td>
                    <td>{{ $pelicula->calidad }}</td>
                    <td>
                        <a href="{{ route('peliculas.show', $pelicula->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta película?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection