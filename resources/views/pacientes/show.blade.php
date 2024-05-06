<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Paciente</title>
    <link rel="stylesheet" href="/css/style_show.css">
</head>
<body>
    <h1>Detalles del Paciente</h1>
    <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $paciente->apellido }}</p>
    <p><strong>Teléfono:</strong> {{ $paciente->telefono }}</p>
    <p><strong>Correo:</strong> {{ $paciente->correo }}</p>
    <p><strong>Fecha de Nacimiento:</strong> {{ $paciente->fecha_nacimiento }}</p>
    <p><strong>Dirección:</strong> {{ $paciente->direccion }}</p>
    <a href="{{ route('pacientes.edit', $paciente->id) }}">Editar</a>
    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
