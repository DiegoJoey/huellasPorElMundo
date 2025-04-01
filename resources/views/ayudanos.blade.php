@extends('layouts/base')

@push('styles')
<link rel="stylesheet" href="{{ asset('resources/css/ayudanos.css') }}">
@endpush

@section('content')
<section class="ayudanos">
    <div class="container">
        <h2>¡Ayúdanos a mejorar la vida de los animales!</h2>
        <p>Tu apoyo es fundamental para brindarles una segunda oportunidad.</p>
        <div class="donation-options">
            <div class="donation-category">
                <h3>Donación General</h3>
                <p>Colabora con lo que más se necesita durante estos momento.</p>
                <a href="#" class="button">Donar</a>
            </div>
            <div class="donation-category">
                <h3>Alimentos</h3>
                <p>Ayuda a alimentar a nuestros peludos con comida de calidad.</p>
                <a href="#" class="button">Donar</a>
            </div>
            <div class="donation-category">
                <h3>Juguetes</h3>
                <p>Aporta juguetes para que los animales jueguen y se diviertan.</p>
                <a href="#" class="button">Donar</a>
            </div>
            <div class="donation-category">
                <h3>Comodidad</h3>
                <p>Colabora con camas, mantas y accesorios para su bienestar.</p>
                <a href="#" class="button">Donar</a>
            </div>
        </div>
        <div class="voluntariado">
            <h3>¿Quieres ser voluntario?</h3>
            <p>Únete a nuestro equipo y ayuda directamente a los animales.</p>
            <a href="#" class="button">¡Apúntate!</a>
        </div>
    </div>
</section>
@endsection