@php $i = 0; @endphp

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
    @while($i < count($camiones))
        <tr>
            <td>{{ $camiones[$i]->id_camion }}</td>
            <td>{{ $camiones[$i]->placa }}</td>
            <td>{{ $camiones[$i]->codigo_interno }}</td>
            <td>{{ $camiones[$i]->color }}</td>
            <td>{{ $camiones[$i]->modelo }}</td>
            <td>{{ $camiones[$i]->capacidad_toneladas }}</td>
            <td>
                <a href="{{ route('camiones.show', $camiones[$i]->id_camion) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('camiones.edit', $camiones[$i]->id_camion) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('camiones.destroy', $camiones[$i]->id_camion) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @php $i++; @endphp
    @endwhile
    </tbody>
</table>
