<!DOCTYPE html>
<html>
<head>
    <title>Crear Persona</title>
</head>
<body>
    <h1>Crear Persona</h1>

    <form action="{{ route('personas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <br>

        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="Masculino" required> Masculino
        <input type="radio" name="sexo" value="Femenino" required> Femenino
        <br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
