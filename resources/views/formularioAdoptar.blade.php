@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/adopciones.css') }}">
@endpush

@section('content')
<div class="container mt-4">
    <h2>Formulario de Adopción</h2>
    <form action="{{ route('adoptar.update', $animal->id) }}" method="POST">
        @csrf

        <input type="hidden" name="animal_id" value="{{ $animal->id }}">

        <div class="mb-3">
            <label for="name" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">¿Por qué quieres adoptar?</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>

        <input type="hidden" name="id" value="{{ $animal->id }}">
        <button type="submit" class="btn btn-success">Enviar solicitud</button>
    </form>
</div>
@endsection