@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-secondary">← Volver a Detalles</a>
    </div>

    <div class="content-card" style="max-width: 700px; margin: 0 auto;">
        <h1 class="mb-4">📝 Editar Categoría</h1>

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

        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">📝 Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $categoria->nombre) }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">📖 Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required>{{ old('descripcion', $categoria->descripcion) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="activo" class="form-label">� Estado</label>
                <select name="activo" id="activo" class="form-select" required>
                    <option value="1" {{ old('activo', (string) $categoria->activo) == '1' ? 'selected' : '' }}>✅ Activo</option>
                    <option value="0" {{ old('activo', (string) $categoria->activo) == '0' ? 'selected' : '' }}>⛔ Inactivo</option>
                </select>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">✅ Actualizar Categoría</button>
                <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-secondary">✕ Cancelar</a>
            </div>
        </form>
    </div>
@endsection