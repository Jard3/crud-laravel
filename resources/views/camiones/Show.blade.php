<h1>Detalles del Camión</h1>
<p>ID: {{ $camion->id_camion }}</p>
<p>Placa: {{ $camion->placa }}</p>
<p>Modelo: {{ $camion->modelo }}</p>
<a href="{{ route('camiones.index') }}">Volver</a>
