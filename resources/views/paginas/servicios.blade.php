@extends('layouts.app')

@section('titulo', 'Servicios')

@section('contenido')

<section class="seccion">
    <p class="subtitulo">NUESTRAS EXPERIENCIAS</p>
    <h1>Servicios</h1>

    <div class="tarjetas">

        @foreach($servicios as $servicio)

            <article class="tarjeta">
                <span class="categoria">
                    {{ $servicio->categoria }}
                </span>

                <h3>{{ $servicio->nombre }}</h3>

                <p>{{ $servicio->descripcion }}</p>

                <strong>
                    ${{ number_format($servicio->precio, 2, ',', '.') }}
                </strong>

                <a href="{{ route('turnos.create') }}" class="boton">
                    Reservar
                </a>
            </article>

        @endforeach

    </div>
</section>

@endsection