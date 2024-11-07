<!DOCTYPE html>
<html>
<head>
    <title>Detalles de Persona</title>
</head>
<body>
    <h1>Detalles de Persona</h1>

    <p><strong>ID:</strong> {{ $persona->id }}</p>
    <p><strong>Nombre:</strong> {{ $persona->nombre }}</p>
    <p><strong>Edad:</strong> {{ $persona->edad }}</p>
    <p><strong>Sexo:</strong> {{ $persona->sexo }}</p>

    <a href="{{ route('personas.index') }}">Volver a la lista</a>
</body>
</html>
