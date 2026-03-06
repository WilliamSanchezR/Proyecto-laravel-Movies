@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">← Volver al Catálogo</a>
    </div>

    <div class="content-card">
        <h1 class="mb-4">🎬 Agregar Nueva Película</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>⚠️ Errores de validación:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('peliculas.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">🎬 Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}" placeholder="Ingresa el título de la película" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">📝 Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="2" placeholder="Descripción breve de la película" required>{{ old('descripcion') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="sinopsis" class="form-label">📖 Sinopsis</label>
                        <textarea name="sinopsis" id="sinopsis" class="form-control" rows="4" placeholder="Sinopsis detallada de la película" required>{{ old('sinopsis') }}</textarea>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="director" class="form-label">🎬 Director</label>
                        <input type="text" name="director" id="director" class="form-control" value="{{ old('director') }}" placeholder="Nombre del director" required>
                    </div>

                    <div class="mb-3">
                        <label for="anio" class="form-label">📅 Año</label>
                        <input type="number" name="anio" id="anio" class="form-control" value="{{ old('anio') }}" placeholder="2024" min="1900" max="2100" required>
                    </div>

                    <div class="mb-3">
                        <label for="calidad" class="form-label">🎥 Calidad</label>
                        <select name="calidad" id="calidad" class="form-select" required>
                            <option value="">Selecciona calidad</option>
                            <option value="SD" {{ old('calidad') == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="HD" {{ old('calidad') == 'HD' ? 'selected' : '' }}>HD</option>
                            <option value="Full HD" {{ old('calidad') == 'Full HD' ? 'selected' : '' }}>Full HD</option>
                            <option value="4K" {{ old('calidad') == '4K' ? 'selected' : '' }}>4K</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="categoria_id" class="form-label">🎭 Categoría</label>
                        <select name="categoria_id" id="categoria_id" class="form-select" required>
                            <option value="">Selecciona una categoría</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                    {{ $categoria->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label for="trailer_url" class="form-label">🎬 URL del Tráiler</label>
                <input type="url" name="trailer_url" id="trailer_url" class="form-control" value="{{ old('trailer_url') }}" placeholder="https://youtube.com/watch?v=..." required>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">✅ Guardar Película</button>
                <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">✕ Cancelar</a>
            </div>
        </form>
    </div>
@endsection