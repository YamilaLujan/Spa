@extends('layouts.app')

@section('titulo', 'Turnos')

@section('contenido')

<section class="seccion">

    <p class="subtitulo">GESTIÓN DE RESERVAS</p>

    <h1>Turnos registrados</h1>

    <a href="{{ route('turnos.create') }}" class="boton">
        Nuevo turno
    </a>

    @if(session('success'))
        <div class="alerta exito">
            {{ session('success') }}
        </div>
    @endif

    <div class="tabla-contenedor">

        <table>
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Email</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Personas</th>
                    <th>Servicios</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>

                @forelse($turnos as $turno)

                    <tr>
                        <td>{{ $turno->nombre_cliente }}</td>
                        <td>{{ $turno->email }}</td>
                        <td>{{ $turno->fecha->format('d/m/Y') }}</td>
                        <td>{{ substr($turno->hora, 0, 5) }}</td>
                        <td>{{ $turno->cantidad_personas }}</td>

                        <td>
                            @foreach($turno->servicios as $servicio)
                                <span class="etiqueta">
                                    {{ $servicio->nombre }}
                                </span>
                            @endforeach
                        </td>

                        <td>
                            <form action="{{ route('turnos.destroy', $turno) }}"
                                  method="POST"
                                  onsubmit="return confirm('¿Querés cancelar este turno?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="boton-eliminar">
                                    Cancelar
                                </button>

                            </form>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="7">No hay turnos registrados.</td>
                    </tr>

                @endforelse

            </tbody>
        </table>

    </div>

</section>

@endsection