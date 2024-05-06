<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
    <link rel="stylesheet" href="/css/style_edit.css">
</head>
<body>
    <h1>Editar Paciente</h1>
    <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $paciente->nombre }}" required>
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" value="{{ $paciente->apellido }}" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" value="{{ $paciente->telefono }}" required>
        </div>
        <div>
            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" value="{{ $paciente->correo }}">
        </div>
        <div>
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento }}" required>
        </div>
        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" value="{{ $paciente->direccion }}">
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
