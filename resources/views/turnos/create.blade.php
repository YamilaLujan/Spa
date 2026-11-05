@extends('layouts.app')

@section('titulo', 'Reservar turno')

@section('contenido')

<section class="seccion formulario-contenedor">

    <p class="subtitulo">TU MOMENTO DE BIENESTAR</p>

    <h1>Reservá tu turno</h1>

    <p>Completá tus datos y elegí los servicios que querés disfrutar.</p>

    @if($errors->any())
        <div class="alerta error">
            Revisá los datos ingresados. Hay errores en el formulario.
        </div>
    @endif

    <form action="{{ route('turnos.store') }}" method="POST">

        @csrf

        <label>Nombre completo</label>
        <input type="text" name="nombre_cliente"
               value="{{ old('nombre_cliente') }}">

        @error('nombre_cliente')
            <small>{{ $message }}</small>
        @enderror

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email') }}">

        @error('email')
            <small>{{ $message }}</small>
        @enderror

        <label>Teléfono</label>
        <input type="text" name="telefono"
               value="{{ old('telefono') }}">

        @error('telefono')
            <small>{{ $message }}</small>
        @enderror

        <label>Fecha</label>
        <input type="date" name="fecha"
               min="{{ date('Y-m-d') }}"
               value="{{ old('fecha') }}">

        @error('fecha')
            <small>{{ $message }}</small>
        @enderror

        <label>Hora</label>
        <input type="time" name="hora"
               value="{{ old('hora') }}">

        @error('hora')
            <small>{{ $message }}</small>
        @enderror

        <label>Cantidad de personas</label>
        <input type="number" name="cantidad_personas"
               min="1" max="10"
               value="{{ old('cantidad_personas', 1) }}">

        @error('cantidad_personas')
            <small>{{ $message }}</small>
        @enderror

        <label>Elegí tus servicios</label>

        <div class="servicios-opciones">

            @foreach($servicios as $servicio)

                <label class="opcion">
                    <input
                        type="checkbox"
                        name="servicios[]"
                        value="{{ $servicio->id }}"
                        {{ in_array($servicio->id, old('servicios', [])) ? 'checked' : '' }}
                    >

                    {{ $servicio->nombre }} -
                    ${{ number_format($servicio->precio, 2, ',', '.') }}
                </label>

            @endforeach

        </div>

        @error('servicios')
            <small>{{ $message }}</small>
        @enderror

        <label>Observaciones</label>

        <textarea name="observaciones">{{ old('observaciones') }}</textarea>

        @error('observaciones')
            <small>{{ $message }}</small>
        @enderror

        <button type="submit" class="boton">
            Confirmar reserva
        </button>

    </form>

</section>

@endsection