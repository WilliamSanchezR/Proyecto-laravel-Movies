@extends('layouts.app')

@section('content')
    <div class="text-center mb-5" style="padding: 3rem 0;">
        <h1 style="font-size: 3.5rem; margin-bottom: 1rem;">
            🎬 Bienvenido a CineHub
        </h1>
        <p style="font-size: 1.3rem; color: var(--text-secondary); max-width: 600px; margin: 0 auto;">
            Tu plataforma para gestionar y explorar películas. Organiza tu catálogo cinematográfico de manera profesional.
        </p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="content-card" style="text-align: center; height: 100%;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🎥</div>
                <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Catálogo de Películas</h3>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    Explora nuestra colección completa de películas con información detallada, directores, sinopsis y mucho más.
                </p>
                <a href="{{ route('peliculas.index') }}" class="btn btn-primary" style="padding: 0.8rem 2rem;">
                    Ver Películas →
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="content-card" style="text-align: center; height: 100%;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🎭</div>
                <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Categorías</h3>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    Organiza tus películas por género y categoría. Gestiona clasificaciones para mantener todo ordenado.
                </p>
                <a href="{{ route('categorias.index') }}" class="btn btn-primary" style="padding: 0.8rem 2rem;">
                    Ver Categorías →
                </a>
            </div>
        </div>
    </div>

    <div class="content-card text-center" style="background: rgba(229, 9, 20, 0.05); border: 2px solid rgba(229, 9, 20, 0.2);">
        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">🚀 Comienza Ahora</h3>
        <p style="color: var(--text-secondary); font-size: 1.1rem; margin-bottom: 1.5rem;">
            Agrega tu primera película al catálogo y empieza a gestionar tu colección
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('peliculas.create') }}" class="btn btn-primary" style="padding: 0.8rem 2rem;">
                ✚ Agregar Película
            </a>
            <a href="{{ route('categorias.create') }}" class="btn btn-warning" style="padding: 0.8rem 2rem;">
                ✚ Agregar Categoría
            </a>
        </div>
    </div>
@endsection
