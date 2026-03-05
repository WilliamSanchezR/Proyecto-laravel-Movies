@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar Película</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peliculas.update', $peliculas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $peliculas->titulo) }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="2" required>{{ old('descripcion', $peliculas->descripcion) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" name="director" id="director" class="form-control" value="{{ old('director', $peliculas->director) }}" required>
        </div>

        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" name="anio" id="anio" class="form-control" value="{{ old('anio', $peliculas->anio) }}" required>
        </div>

        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea name="sinopsis" id="sinopsis" class="form-control" rows="3" required>{{ old('sinopsis', $peliculas->sinopsis) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="trailer_url" class="form-label">URL del tráiler</label>
            <input type="url" name="trailer_url" id="trailer_url" class="form-control" value="{{ old('trailer_url', $peliculas->trailer_url) }}" required>
        </div>

        <div class="mb-3">
            <label for="calidad" class="form-label">Calidad</label>
            <input type="text" name="calidad" id="calidad" class="form-control" value="{{ old('calidad', $peliculas->calidad) }}" required>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoría</label>
            <select name="categoria_id" id="categoria_id" class="form-select" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ old('categoria_id', $peliculas->categoria_id) == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('peliculas.show', $peliculas->id) }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection