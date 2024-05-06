<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacientesController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'correo' => 'nullable|email|max:255',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'nullable|string|max:255',
        ]);

        // Crear un nuevo paciente con los campos asignables masivamente
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->telefono = $request->telefono;
        $paciente->correo = $request->correo;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->direccion = $request->direccion;
        $paciente->save();
        
        return redirect()->route('pacientes.index')->with('success', 'Paciente creado exitosamente');
    }


    public function show(Paciente $paciente)
    {
        return view('pacientes.show', compact('paciente'));
    }

    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(Request $request, Paciente $paciente)
{
    // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'telefono' => 'required|string|max:255',
        'correo' => 'nullable|email|max:255',
        'fecha_nacimiento' => 'required|date',
        'direccion' => 'nullable|string|max:255',
    ]);

    // Asignar los datos del formulario al paciente existente
    $paciente->nombre = $request->nombre;
    $paciente->apellido = $request->apellido;
    $paciente->telefono = $request->telefono;
    $paciente->correo = $request->correo;
    $paciente->fecha_nacimiento = $request->fecha_nacimiento;
    $paciente->direccion = $request->direccion;
    $paciente->save();
    
    // Redirigir a la página de índice de pacientes con un mensaje de éxito
    return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado exitosamente');
}


    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado exitosamente');
    }
}
