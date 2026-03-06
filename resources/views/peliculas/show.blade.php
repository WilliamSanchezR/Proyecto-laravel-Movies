@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">← Volver al Catálogo</a>
    </div>

    <div class="content-card">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-4">🎬 {{ $pelicula->titulo }}</h1>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary-color); margin-bottom: 1rem;">📝 Descripción</h5>
                    <p style="color: var(--text-secondary); line-height: 1.8;">{{ $pelicula->descripcion }}</p>
                </div>

                <div class="mb-4">
                    <h5 style="color: var(--primary-color); margin-bottom: 1rem;">📖 Sinopsis</h5>
                    <p style="color: var(--text-secondary); line-height: 1.8;">{{ $pelicula->sinopsis }}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div style="background: rgba(255, 255, 255, 0.03); padding: 1.5rem; border-radius: 12px; border: 1px solid rgba(229, 9, 20, 0.2);">
                    <h5 style="color: var(--primary-color); margin-bottom: 1.5rem;">ℹ️ Información</h5>
                    
                    <div class="mb-3">
                        <strong style="color: var(--primary-color);">🎬 Director:</strong>
                        <p style="color: var(--text-primary); margin: 0.5rem 0;">{{ $pelicula->director }}</p>
                    </div>

                    <div class="mb-3">
                        <strong style="color: var(--primary-color);">📅 Año:</strong>
                        <p style="color: var(--text-primary); margin: 0.5rem 0;">{{ $pelicula->anio }}</p>
                    </div>

                    <div class="mb-3">
                        <strong style="color: var(--primary-color);">🎥 Calidad:</strong>
                        <p style="margin: 0.5rem 0;">
                            <span class="badge" style="background: var(--primary-color); padding: 0.5rem 1rem; font-size: 0.9rem;">
                                {{ $pelicula->calidad }}
                            </span>
                        </p>
                    </div>

                    <div class="mb-3">
                        <strong style="color: var(--primary-color);">🎬 Tráiler:</strong>
                        <p style="margin: 0.5rem 0;">
                            <a href="{{ $pelicula->trailer_url }}" target="_blank" class="btn btn-sm btn-primary" style="width: 100%;">
                                ▶️ Ver Tráiler
                            </a>
                        </p>
                    </div>
                </div>

                <div class="mt-4 d-flex flex-column gap-2">
                    <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-warning">📝 Editar Película</a>
                    <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100" onclick="return confirm('¿Estás seguro de eliminar esta película?')">❌ Eliminar Película</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection