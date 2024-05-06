<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style1.css">
</head>
<body>

<h1>Listado de Pacientes</h1>
<a href="{{ route('pacientes.create') }}">Crear Nuevo Paciente</a>
<ul>
    @foreach ($pacientes as $paciente)
        <li>{{ $paciente->nombre }} {{ $paciente->apellido }} - <a href="{{ route('pacientes.show', $paciente->id) }}">Ver Detalles</a></li>
    @endforeach
</ul>

</body>
</html>
