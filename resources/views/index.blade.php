@extends('layouts/base')


@section('content')

    <section class="banner">

    </section>

    <section class="banner-ayudanos">
        <div class="container">
            <h2 class="text-white">Un hogar para cada huella</h2>
            <p class="text-white">Ayúdanos a proteger y encontrar familias para animales en situación de vulnerabilidad.</p>
        </div>
    </section>

    <section class="main">
        <div class="container">
            <div class="row">
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="{{ asset('resources/img/main-01.jpg') }}" alt /></a>
                        <div class="inner">
                            <h3>Adopta un amigo</h3>
                            <p>Descubre cómo puedes cambiar la vida de un animal rescatado al darle un hogar lleno de amor.
                            </p>
                        </div>
                    </div>
                </section>
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="{{ asset('resources/img/main-02.jpg') }}" alt /></a>
                        <div class="inner">
                            <h3>Conoce nuestra misión</h3>
                            <p>Trabajamos para rescatar, proteger y encontrar hogares para animales en situación de riesgo.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row">
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="{{ asset('resources/img/main-03.jpg') }}" alt /></a>
                        <div class="inner">
                            <h3>Únete como voluntario</h3>
                            <p>Forma parte de nuestro equipo y ayúdanos a marcar la diferencia en la vida de los animales.
                            </p>
                        </div>
                    </div>
                </section>
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="{{ asset('resources/img/main-04.jpg') }}" alt /></a>
                        <div class="inner">
                            <h3>Apoya con tu donación</h3>
                            <p>Tu ayuda es fundamental para continuar con nuestra labor de rescate y cuidado animal.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="banner-ayudanos">
        <div class="container">
            <h2 class="me-3">¿Estás listo para marcar la diferencia?</h2>
            <a href="ayudanos.html" class="button">Únete a nuestra causa</a>
        </div>
    </section>

@endsection
