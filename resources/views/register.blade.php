@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/register.css') }}">
@endpush

@section('content')
    <div class="center-wrapper">
        <form class="form" method="POST" action="/user/create">
            @csrf
            <p class="text-register">¡Regístrate!</p>

            <div class="flex-column">
                <label>Nombre</label>
            </div>
            <div class="inputForm">
                <input name="name" placeholder="Nombre" class="input" type="text">
            </div>

            <div class="flex-column">
                <label>Apellido</label>
            </div>
            <div class="inputForm">
                <input name="last_name" placeholder="Apellido" class="input" type="text">
            </div>

            <div class="flex-column">
                <label>Correo electrónico</label>
            </div>
            <div class="inputForm">
                <input name="email" placeholder="Correo electrónico" class="input" type="email">
            </div>

            <div class="flex-column">
                <label>Contraseña</label>
            </div>
            <div class="inputForm">
                <input name="password" placeholder="Contraseña" class="input" type="password">
            </div>

            <button class="button-submit">Registrarse</button>
  
            <p class="p">¿Ya tienes una cuenta? <a href="/login"><span class="span">Inicia sesión</span></a> </p>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('resources/js/passwordValidation.js') }}"></script>
@endpush