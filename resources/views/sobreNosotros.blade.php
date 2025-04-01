@extends('layouts/base')

@push('styles')
<link rel="stylesheet" href="{{ asset('resources/css/sobreNosotros.css') }}">
@endpush

@section('content')
<section class="sobre-nosotros">
    <div class="container text-center">
        
        <h1>Conoce más sobre nuestra misión, visión y valores.</h1>

    </div>
</section>

<section class="about-us">
    <div class="container">
        <h2>Nuestra Historia</h2>
        <p>
            Huellas por el Mundo nació con el propósito de rescatar, proteger y encontrar hogares para animales en situación de vulnerabilidad. 
            Desde nuestros inicios, hemos trabajado incansablemente para marcar la diferencia en la vida de miles de animales.
        </p>
    </div>
</section>

<section class="conocenos">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5">
            <div class="card border-0 text-center text-white">
                <img class="card-img-top" src="{{ asset('resources/img/sobreNosotros-01.jpg') }}" alt="">

                <div class="card-body ">
                    <h4 class="card-title ">Conoce Nuestro Propósito</h4>
                    <p class="card-text">Brindamos esperanza y una segunda oportunidad a los animales necesitados, promoviendo respeto y cuidado hacia todos los seres vivos. Nuestro compromiso es trabajar para garantizar su bienestar, educar a la comunidad sobre la importancia de la adopción y fomentar un mundo más compasivo para todos los seres vivos.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="card border-0  text-center text-white">
                <img class="card-img-top" src="{{ asset('resources/img/sobreNosotros-02.jpg') }}" alt="">
                
                <div class="card-body ">
                    <h4 class="card-title ">Nuestro Equipo</h4>
                    <p class="card-text">Nuestro equipo está compuesto por apasionados defensores de los animales, comprometidos con su bienestar y dedicados a marcar una diferencia positiva en sus vidas. Cada miembro aporta su experiencia y amor por los animales, trabajando juntos para rescatar, cuidar y encontrar hogares llenos de amor para aquellos que más lo necesitan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="values">
    <div class="container">
        <h2>Nuestros Valores</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="value-box">
                    <i class="bi bi-heart-fill"></i>
                    <h3>Compasión</h3>
                    <p>Nos mueve el amor y el respeto por todos los seres vivos.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-box">
                    <i class="bi bi-people-fill"></i>
                    <h3>Colaboración</h3>
                    <p>Trabajamos en equipo con voluntarios y comunidades.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-box">
                    <i class="bi bi-globe"></i>
                    <h3>Impacto</h3>
                    <p>Buscamos generar un cambio positivo en el mundo.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection