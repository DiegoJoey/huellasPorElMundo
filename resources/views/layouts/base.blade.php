<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Huellas por el mundo</title>
        <link rel="icon" type="image/png" href="{{ asset('resources/img/paws.png') }}">
        <!-- Bootstrap CSS -->
        <!-- Bootstrap Icons CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        <link rel="stylesheet" href="{{ asset('resources/css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('resources/css/responsive.css') }}">
        @stack('styles')
    </head>
    <body>

        <!-- Navbar -->

        <header>
            <div class="container-fluid p-0 nav-bar">
                <nav class="navbar navbar-expand-lg navbar-dark ">
                    <a href="/" class="navbar-marca">
                        <h1
                            class="m-0 display-4 font-weight-bold text-uppercase text-white"> <img src="{{ asset('resources/img/paw.jpg') }}" class="logo" /> Huellas
                            por el mundo</h1>
                    </a>
                    <button type="button" class="navbar-toggler"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse justify-content-between"
                        id="navbarCollapse">
                        <div class="navbar-nav ms-auto p-4">
                            <a href="/" class="nav-item nav-link @yield('index')">Inicio</a>
                            <a href="/sobreNosotros" class="nav-item nav-link ">Sobre
                                nosotros</a>
                            <a href="/ayudanos" class="nav-item nav-link ">Ayudanos</a>
                            <a href="/adopciones" class="nav-item nav-link ">Adopciones</a>
                            <a href="/contacto" class="nav-item nav-link ">Contacto</a>
                            <a href="/login" class="nav-item nav-link ">login</a>
                            <a href="/register" class="nav-item nav-link ">Register</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Fin Navbar -->

        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="footer-logo">
                    <h2>Huellas por el Mundo</h2>
                </div>
                <div class="footer-links">
                    <a href="#">Inicio</a>
                    <a href="#">Sobre Nosotros</a>
                    <a href="#">Adopciones</a>
                    <a href="#">Ayúdanos</a>
                    <a href="#">Contacto</a>
                </div>
                <div class="footer-social">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                </div>
                <div class="footer-info">
                    <p>&copy; 2025 Huellas por el Mundo. Todos los derechos
                        reservados.</p>
                </div>
            </div>
        </footer>

        @stack('scripts')
    </body>
</html>