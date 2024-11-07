<!DOCTYPE html>
<html>
<head>
    <title>Lista de Personas</title>
</head>
<body>
    <h1>Lista de Personas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Estado</th> <!-- Nueva columna para el estado -->
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{{ $persona->id }}</td>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->edad }}</td>
                <td>
                    <input type="radio" name="sexo{{ $persona->id }}" value="Masculino" {{ $persona->sexo == 'Masculino' ? 'checked' : '' }}> Masculino
                    <input type="radio" name="sexo{{ $persona->id }}" value="Femenino" {{ $persona->sexo == 'Femenino' ? 'checked' : '' }}> Femenino
                </td>
                <td>
                    {{ $persona->edad >= 18 ? 'Mayor de edad' : 'Menor de edad' }} <!-- Lógica para determinar el estado -->
                </td>
                <td>
                    <a href="{{ route('personas.edit', $persona->id) }}">Editar</a>
                    <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>

