<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titulo') | ÉLÉA Wellness & Spa</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <div class="contenedor encabezado">
        <a href="{{ route('inicio') }}" class="logo">
            ÉLÉA <span>WELLNESS & SPA</span>
        </a>

        <nav>
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('servicios') }}">Servicios</a>
            <a href="{{ route('turnos.create') }}">Reservar</a>
            <a href="{{ route('turnos.index') }}">Turnos</a>
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>
    </div>
</header>

<main>
    @yield('contenido')
</main>

<footer>
    <p>ÉLÉA Wellness & Spa © 2026</p>
    <p>Un espacio para conectar con tu bienestar.</p>
</footer>

</body>
</html>