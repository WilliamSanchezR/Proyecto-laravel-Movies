@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">← Volver a Categorías</a>
    </div>

    <div class="content-card" style="max-width: 700px; margin: 0 auto;">
        <h1 class="mb-4">🎭 Agregar Nueva Categoría</h1>

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

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">📝 Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Ingresa el nombre de la categoría" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">📖 Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="4" placeholder="Describe la categoría" required>{{ old('descripcion') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="activo" class="form-label">� Estado</label>
                <select name="activo" id="activo" class="form-select" required>
                    <option value="1" {{ old('activo', '1') == '1' ? 'selected' : '' }}>✅ Activo</option>
                    <option value="0" {{ old('activo') == '0' ? 'selected' : '' }}>⛔ Inactivo</option>
                </select>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">✅ Guardar Categoría</button>
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">✕ Cancelar</a>
            </div>
        </form>
    </div>
@endsection