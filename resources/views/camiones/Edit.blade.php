<!DOCTYPE html>
<html>
<head>
    <title>Editar Camión</title>
</head>
<body>
<h1>Editar Camión</h1>
<form action="{{ route('camiones.update', $camion->id_camion) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Placa:</label>
    <input type="text" name="placa" value="{{ $camion->placa }}" required>
    <label>Modelo:</label>
    <input type="text" name="modelo" value="{{ $camion->modelo }}" required>
    <button type="submit">Actualizar</button>
</form>
</body>
</html>
