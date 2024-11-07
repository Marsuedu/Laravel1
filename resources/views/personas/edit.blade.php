<form action="{{ route('personas.update', $persona->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ old('nombre', $persona->nombre) }}" required>

    <label for="edad">Edad:</label>
    <input type="number" name="edad" value="{{ old('edad', $persona->edad) }}" required>

    <label for="sexo">Sexo:</label>
    <input type="radio" name="sexo" value="M" {{ $persona->sexo == 'M' ? 'checked' : '' }}> Masculino
    <input type="radio" name="sexo" value="F" {{ $persona->sexo == 'F' ? 'checked' : '' }}> Femenino

    <button type="submit">Actualizar</button>
</form>