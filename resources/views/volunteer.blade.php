{{-- filepath: resources/views/volunteer.blade.php --}}
@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/volunteer.css') }}">
@endpush

@section('content')
<div class="container mt-4">
    <h2>Formulario para ser Voluntario</h2>
    <form action="/volunteer/store" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="255">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required maxlength="255">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone" required maxlength="20">
        </div>

        <div class="mb-3">
            <label for="availability" class="form-label">Disponibilidad</label>
            <select class="form-control" id="availability" name="availability" required>
                <option value="">Selecciona una opción</option>
                <option value="mañana">Mañana</option>
                <option value="tarde">Tarde</option>
                <option value="fin de semana">Fin de semana</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">¿Por qué quieres ser voluntario?</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar solicitud</button>
    </form>
</div>
<br><br>
@endsection

@push('scripts')
    <script src="{{ asset('resources/js/volunteer-form-validation.js') }}"></script>
@endpush
