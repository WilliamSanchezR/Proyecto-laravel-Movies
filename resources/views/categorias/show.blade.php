@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">← Volver a Categorías</a>
    </div>

    <div class="content-card">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-4">🎭 {{ $categoria->nombre }}</h1>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary-color); margin-bottom: 1rem;">📝 Descripción</h5>
                    <p style="color: var(--text-secondary); line-height: 1.8;">{{ $categoria->descripcion }}</p>
                </div>

                <div class="mb-4">
                    <h5 style="color: var(--primary-color); margin-bottom: 1rem;">� Estado</h5>
                    <p>
                        @if($categoria->activo)
                            <span class="badge" style="background: #28a745; padding: 0.6rem 1.2rem; font-size: 1rem;">✅ Activo</span>
                        @else
                            <span class="badge" style="background: #6c757d; padding: 0.6rem 1.2rem; font-size: 1rem;">⛔ Inactivo</span>
                        @endif
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">📝 Editar Categoría</a>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">❌ Eliminar Categoría</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="content-card mt-4">
        <h3 class="mb-4" style="color: var(--primary-color);">🎬 Películas de esta categoría ({{ $peliculas->count() }})</h3>
        
        @if ($peliculas->isEmpty())
            <div style="text-align: center; padding: 3rem; color: var(--text-secondary);">
                <p style="font-size: 1.2rem;">No hay películas asociadas a esta categoría.</p>
            </div>
        @else
            <div class="row g-3">
                @foreach ($peliculas as $pelicula)
                    <div class="col-md-6">
                        <div style="background: rgba(255, 255, 255, 0.03); padding: 1.5rem; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.05); transition: all 0.3s ease;" 
                             onmouseover="this.style.background='rgba(229, 9, 20, 0.05)'; this.style.borderColor='rgba(229, 9, 20, 0.3)';" 
                             onmouseout="this.style.background='rgba(255, 255, 255, 0.03)'; this.style.borderColor='rgba(255, 255, 255, 0.05)';">
                            <h5 style="color: var(--text-primary); margin-bottom: 0.5rem;">🎬 {{ $pelicula->titulo }}</h5>
                            <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 0.8rem;">
                                <strong>Director:</strong> {{ $pelicula->director }} | <strong>Año:</strong> {{ $pelicula->anio }}
                            </p>
                            <a href="{{ route('peliculas.show', $pelicula->id) }}" class="btn btn-sm btn-info">� Ver Detalles</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection