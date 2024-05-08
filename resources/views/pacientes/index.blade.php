<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pacientes</title>
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

    <h1>Listado de Pacientes</h1>
    <a href="{{ route('pacientes.create') }}">Crear Nuevo Paciente</a>
    <ul>
        @foreach ($pacientes as $paciente)
            <li>{{ $paciente->nombre }} {{ $paciente->apellido }} - <a href="{{ route('pacientes.show', $paciente->id) }}">Ver Detalles</a></li>
        @endforeach
    </ul>

</body>
</html>

