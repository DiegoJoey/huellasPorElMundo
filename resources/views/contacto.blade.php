@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/contacto.css') }}">
@endpush

@section('content')
<div class="center-wrapper">
    <form class="form">
      <p class="contact">¡Contáctanos!</p>

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
        <input placeholder="Correo electrónico" class="input" type="email">
      </div>

      <div class="flex-column">
        <label>Número de teléfono</label>
      </div>
      <div class="inputForm">
        <input placeholder="Número de teléfono" class="input" type="phone">
      </div>

      <div class="flex-column">
        <label>Mensaje</label>
      </div>
      <div class="inputForm">
        <textarea placeholder="Escribe tu mensaje aquí" class="input text"></textarea>
      </div>

      <button class="button-submit">Enviar</button>
    </form>
  </div>
<br><br>
@endsection

@push('scripts')
    <script src="{{ asset('resources/js/contacto-form-validation.js') }}"></script>
@endpush
