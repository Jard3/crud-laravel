<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Marcas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Lista de Marcas</h1>
    <a href="{{ route('marca.create') }}" class="btn btn-primary mb-3">Agregar Marca</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($marcas as $marca)
            <tr>
                <td>{{ $marca->id_marca }}</td>
                <td>{{ $marca->descripcion }}</td>
                <td>
                    <a href="{{ route('marca.edit', $marca->id_marca) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('marca.destroy', $marca->id_marca) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
