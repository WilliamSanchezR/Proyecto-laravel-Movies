@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1>🎬 Catálogo de Películas</h1>
        <p style="color: var(--text-secondary); font-size: 1.1rem;">Explora nuestra colección completa</p>
    </div>

    <div class="mb-4 d-flex gap-2 flex-wrap">
        <a href="{{ route('peliculas.create') }}" class="btn btn-primary">+ Agregar Película</a>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">🎭 Ver Categorías</a>
    </div>

    <div class="content-card">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th style="width: 25%;">Título</th>
                        <th style="width: 20%;">Director</th>
                        <th style="width: 10%;">Año</th>
                        <th style="width: 10%;">Calidad</th>
                        <th style="width: 30%; min-width: 280px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $pelicula)
                        <tr>
                            <td><span style="color: var(--primary-color); font-weight: 600;">#{{ $pelicula->id }}</span></td>
                            <td><strong>{{ $pelicula->titulo }}</strong></td>
                            <td>{{ $pelicula->director }}</td>
                            <td>{{ $pelicula->anio }}</td>
                            <td>
                                <span class="badge" style="background: var(--primary-color); padding: 0.4rem 0.8rem;">
                                    {{ $pelicula->calidad }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2" style="min-width: 260px;">
                                    <a href="{{ route('peliculas.show', $pelicula->id) }}" class="btn btn-info btn-sm" style="flex: 0 0 auto;">🔍 Ver</a>
                                    <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-warning btn-sm" style="flex: 0 0 auto;">📝 Editar</a>
                                    <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" style="flex: 0 0 auto;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta película?')">❌ Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection