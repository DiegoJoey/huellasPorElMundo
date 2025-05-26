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
                    <h3>Alimentos</h3>
                    <p>Ayuda a alimentar a nuestros peludos con comida de calidad.</p>
                    <img src="{{ asset('resources/img/food.png') }} " class="food">
                    @auth

                        <a href="/donar/alimentos/{{ auth()->user()->id }}" class="button">Donar</a>
                    @endauth
                    @guest
                        <a href="/login" class="button">Donar</a>
                    @endguest
                    <img src="{{ asset('resources/img/bagFood.png') }}" class="food">
                </div>
                <div class="donation-category">
                    <h3>Juguetes</h3>
                    <p>Aporta juguetes para que los animales jueguen y se diviertan.</p>
                    <img src="{{ asset('resources/img/toy1.png') }} " class="food">
                    @auth
                        <a href="/donar/juguetes/{{ auth()->user()->id }}" class="button">Donar</a>
                    @endauth
                    @guest
                        <a href="/login" class="button">Donar</a>
                    @endguest
                    <img src="{{ asset('resources/img/ball.png') }} " class="food">
                </div>
                <div class="donation-category">
                    <h3>Comodidad</h3>
                    <p>Colabora con camas, mantas y accesorios para su bienestar.</p>
                    <img src="{{ asset('resources/img/bed.png') }} " class="food">
                    @auth
                        <a href="/donar/comodidad/{{ auth()->user()->id }}" class="button">Donar</a>
                    @endauth
                    @guest
                        <a href="/login" class="button">Donar</a>
                    @endguest
                    <img src="{{ asset('resources/img/blanket.png') }} " class="food">
                </div>
                <div class="donation-category">
                    <h3>¿Quieres ser voluntario?</h3>
                    <p>Únete a nuestro equipo y ayuda directamente a los animales.</p>
                    <img src="{{ asset('resources/img/hands.png') }} " class="food">

                    <a href="/volunteer" class="button">¡Apúntate!</a>

                    <img src="{{ asset('resources/img/volunteer.png') }} " class="food">
                </div>
            </div>
        </div>
    </section>
@endsection
