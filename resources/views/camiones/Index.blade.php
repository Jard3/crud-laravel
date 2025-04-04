@extends('layout')

@section('content')
    <div class="container mt-4">
        <h2>Lista de Camiones</h2>

        {{-- Verifica si la variable $camiones está definida --}}
        @if(!isset($camiones))
            <p style="color: red;">Error: La variable $camiones no está definida.</p>
        @else
            <p>Se encontraron {{ $camiones->count() }} camiones.</p>
        @endif

        {{-- Verifica si hay elementos en $camiones antes de recorrerlos --}}
        @if(isset($camiones) && $camiones->count() > 0)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Placa</th>
                    <th>Código Interno</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad (Ton)</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($camiones as $camion)
                    <tr>
                        <td>{{ $camion->id_camion }}</td>
                        <td>{{ $camion->placa }}</td>
                        <td>{{ $camion->codigo_interno }}</td>
                        <td>{{ $camion->color }}</td>
                        <td>{{ $camion->modelo }}</td>
                        <td>{{ $camion->capacidad_toneladas }}</td>
                        <td>
                            <a href="{{ route('camiones.show', $camion->id_camion) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('camiones.edit', $camion->id_camion) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('camiones.destroy', $camion->id_camion) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No hay camiones registrados.</p>
        @endif
    </div>
@endsection


