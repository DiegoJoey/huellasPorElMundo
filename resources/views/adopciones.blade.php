@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/adopciones.css') }}">
@endpush

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Mascotas en adopción</h2>
        @if (auth()->check() && auth()->user()->role === 'admin')
            <a href="/post" class="button">Publicar</a>
        @endif
        <div class="row">
            @forelse($animals as $animal)
                <div class="col-md-4 mb-4 post">
                    <div class="card h-100">
                        <img src="{{ asset($animal->image_path) }}" class="card-img-top" alt="Foto de {{ $animal->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $animal->name }}</h5>
                            <p class="card-text">
                                <strong>Tipo:</strong> {{ $animal->type }}<br>
                                <strong>Raza:</strong> {{ $animal->breed }}<br>
                                <strong>Edad:</strong> {{ $animal->age }} años<br>
                                <strong>Tiempo en refugio:</strong> {{ $animal->time_in_shelter }}<br>
                                <strong>Descripción:</strong> {{ $animal->description }}
                            </p>
                        </div>
                        <div class="d-flex gap-2">
                            @if (auth()->check() && auth()->user()->role === 'admin')
                                <form action="/destroy/{{ $animal->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" title="Eliminar"
                                        class="btn btn-danger btn-sm d-inline-flex align-items-center butn">
                                        <i class="bi bi-trash3-fill me-1"></i> Eliminar
                                    </button>
                                </form>
                            @endif
                            @auth
                                <form action="/adoptar/{{ $animal->id }}" method="GET" style="display:inline;">
                                    @csrf
                                    
                                    <button type="submit" title="Adoptar"
                                        class="btn btn-success btn-sm d-inline-flex align-items-center butn">
                                        <i class="bi bi-heart-fill me-1"></i> ¡Adóptame!
                                    </button>
                                </form>
                            @endauth
                            @guest
                                <a href="/login" class="btn btn-success btn-sm d-inline-flex align-items-center butn"
                                    title="Inicia sesión para adoptar">
                                    <i class="bi bi-heart-fill me-1"></i> ¡Adóptame!
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            @empty
                <p>No hay mascotas en adopción actualmente.</p>
            @endforelse
        </div>
    </div>
@endsection
