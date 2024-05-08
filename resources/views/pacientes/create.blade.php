<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Paciente</title>
    <style>
        /* Estilos para la barra de navegación */
        nav {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        /* Estilos para la lista de pacientes */
        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #1a1a1a;
        }

        ul li a:hover {
            color: #0066cc;
        }
        </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('pacientes.index') }}">Inicio</a></li>
            <li><a href="{{ route('pacientes.create') }}">Crear Nuevo Paciente</a></li>
            <!-- Agrega más elementos de la barra de opciones según tus necesidades -->
        </ul>
    </nav>

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

    <!-- Agrega tus scripts JavaScript aquí -->

</body>
</html>

