@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/register.css') }}">
@endpush

@section('content')
    <div class="center-wrapper">
        <form class="form">
            <p class="text-register">¡Regístrate!</p>

            <div class="flex-column">
                <label>Nombre</label>
            </div>
            <div class="inputForm">
                <input placeholder="Nombre" class="input" type="text">
            </div>

            <div class="flex-column">
                <label>Apellido</label>
            </div>
            <div class="inputForm">
                <input placeholder="Apellido" class="input" type="text">
            </div>

            <div class="flex-column">
                <label>Correo electrónico</label>
            </div>
            <div class="inputForm">
                <input placeholder="Correo electrónico" class="input" type="text">
            </div>

            <div class="flex-column">
                <label>Contraseña</label>
            </div>
            <div class="inputForm">
                <input placeholder="Contraseña" class="input" type="password">
            </div>

            <div class="flex-column">
                <label>Repetir contraseña</label>
            </div>
            <div class="inputForm">
                <input placeholder="Repetir contraseña" class="input" type="password">
            </div>

            <button class="button-submit">Registrarse</button>
  
            <p class="p">¿Ya tienes una cuenta? <a href="/login"><span class="span">Inicia sesión</span></a> </p>
        </form>
    </div>
    
@endsection

@push('scripts')
    <script src="{{ asset('resources/js/passwordValidation.js') }}"></script>
@endpush
