@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

<section class="hero">
    <div class="hero-contenido">
        <p class="subtitulo">ÉLÉA WELLNESS & SPA</p>

        <h1>Un momento para vos.<br>Una experiencia de bienestar.</h1>

        <p>
            Descubrí un espacio de relajación, cuidado y armonía.
            Regalate el tiempo que merecés.
        </p>

        <a href="{{ route('turnos.create') }}" class="boton">
            Reservar mi turno
        </a>
    </div>
</section>

<section class="seccion">
    <h2>Bienvenidos a ÉLÉA</h2>

    <p>
        Somos un espacio dedicado al bienestar integral.
        Ofrecemos tratamientos faciales, corporales y masajes
        pensados para renovar tu energía y cuidar de vos.
    </p>

    <a href="{{ route('servicios') }}" class="boton-secundario">
        Conocer servicios
    </a>
</section>

@endsection