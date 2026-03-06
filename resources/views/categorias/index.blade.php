@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1>🎭 Categorías</h1>
        <p style="color: var(--text-secondary); font-size: 1.1rem;">Gestiona las categorías de películas</p>
    </div>

    <div class="mb-4">
        <a href="{{ route('categorias.create') }}" class="btn btn-primary">+ Agregar Categoría</a>
        <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">🎬 Ver Películas</a>
    </div>

    <div class="content-card">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th style="width: 18%;">Nombre</th>
                        <th style="width: 37%;">Descripción</th>
                        <th style="width: 10%;">Estado</th>
                        <th style="width: 30%; min-width: 280px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td><span style="color: var(--primary-color); font-weight: 600;">#{{ $categoria->id }}</span></td>
                            <td><strong>{{ $categoria->nombre }}</strong></td>
                            <td>{{ $categoria->descripcion }}</td>
                            <td>
                                @if($categoria->activo)
                                    <span class="badge" style="background: #28a745; padding: 0.4rem 0.8rem;">✅ Activo</span>
                                @else
                                    <span class="badge" style="background: #6c757d; padding: 0.4rem 0.8rem;">⛔ Inactivo</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-2" style="min-width: 260px;">
                                    <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-info btn-sm" style="flex: 0 0 auto;">🔍 Ver</a>
                                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning btn-sm" style="flex: 0 0 auto;">📝 Editar</a>
                                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="flex: 0 0 auto;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">❌ Eliminar</button>
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