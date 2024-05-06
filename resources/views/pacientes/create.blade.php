<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Paciente</title>
    <link rel="stylesheet" href="/css/style_create.css">
</head>
<body>

<h1>Crear Nuevo Paciente</h1>
<form action="{{ route('pacientes.store') }}" method="POST">
    @csrf
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>
    <div>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
    </div>
    <div>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" required>
    </div>
    <div>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo">
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
    </div>
    <div>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion">
    </div>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
