@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar Categoría</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categorias.update', $categorias->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $categorias->nombre) }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required>{{ old('descripcion', $categorias->descripcion) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="activo" class="form-label">Activo</label>
            <select name="activo" id="activo" class="form-select" required>
                <option value="1" {{ old('activo', (string) $categorias->activo) == '1' ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('activo', (string) $categorias->activo) == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('categorias.show', $categorias->id) }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection