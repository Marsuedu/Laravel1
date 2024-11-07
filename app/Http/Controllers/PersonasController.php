<?php

namespace App\Http\Controllers;

use App\Models\personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Personas::all();
        return view('personas.index',compact('personas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retorna la vista para crear una persona
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar la entrada
        $request->validate([
        'nombre' => 'required|string|max:100',
        'edad' => 'required|integer|min:0',
        'sexo' => 'required|in:Masculino,Femenino',
    ]);

    // Crear la nueva persona en la base de datos
        Personas::create([
        'nombre' => $request->nombre,
        'edad' => $request->edad,
        'sexo' => $request->sexo,
    ]);

    // Redirigir al listado de personas
    return redirect()->route('personas.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $persona = Personas::findOrFail($id);

    // Pasar la persona a la vista
        return view('personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Retorna la vista para editar una persona
        $persona = Personas::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'sexo' => 'required|in:M,F', // Solo acepta 'M' o 'F'
        ]);

        // Buscar la persona por ID
        $persona = Personas::findOrFail($id);

        // Actualizar los datos de la persona
        $persona->nombre = $request->nombre;
        $persona->edad = $request->edad;
        $persona->save(); // Asegúrate de guardar los cambios

        // Redirigir con un mensaje de éxito
        return redirect()->route('personas.index')->with('success', 'Persona actualizada correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         // Eliminar la persona
         $persona = Personas::findOrFail($id);
         $persona->delete();

    // Redirigir al listado de personas
        return redirect()->route('personas.index');
    }

    
}
