<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTROL DE ASISTENCIA</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<title>CONTROL DE ASISTENCIA</title>
<!-- Favicon-->
<link rel="icon" type="asis" href="assets/icon/asis.ico" />
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">BIENVENIDOS</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                @if (Route::has('login'))
                <ul class="navbar-nav ms-auto">
                    @auth
                    <li>
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            ACCEDER
                        </a>
                    </li>
                    @else
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">Log in</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('register') }}">Registrar</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">DOCENTE</a>
                    </li>
                    @endif
                    @endauth
                </ul>
                @endif
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/img/insignia.png" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">CONTROL DE ASISTENCIA DE ESTUDIANTES</h1>
            <br>
            <h1 class="masthead-heading text-uppercase mb-0">----------------- NIVEL PRIMARIA -----------------</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0"
                style="font-family: 'Montserrat', sans-serif;; font-size: 1.5em; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                "María de los Ángeles", más que un colegio... una gran familia"
            </p>
        </div>
    </header>

    <footer class="copyright py-4 text-center text-white">
        <div class="container">
            <p class="text-muted">&copy; {{ date('Y') }} Control de Asistencia. Todos los derechos reservados.
            </p>
        </div>
        </div>
    </footer>
</body>

</html>