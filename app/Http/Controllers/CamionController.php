<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camion;

class CamionController extends Controller
{
    // Mostrar todos los camiones
    public function index()
    {
        $camiones = Camion::all(); // Obtiene todos los camiones

        // Verifica si se están recuperando datos
        if ($camiones->isEmpty()) {
            dd('No hay camiones en la base de datos');
        }

        return view('camiones.index', compact('camiones'));
    }




    // Mostrar un camión específico
    public function show(Camion $camion)
    {
        return view('camiones.show', compact('camion'));
    }





    // Mostrar formulario de creación
    public function create()
    {
        return view('camiones.create');
    }

    // Guardar un nuevo camión
    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|string|max:10',
            'codigo_interno' => 'required|string|max:20',
            'color' => 'required|string|max:20',
            'modelo' => 'required|string|max:50',
            'capacidad_toneladas' => 'required|numeric',
            'id_transporte' => 'required|exists:transporte,id_transporte',
            'id_marca' => 'required|exists:marca,id_marca'
        ]);

        Camion::create($request->all());
        return redirect()->route('camiones.index')->with('success', 'Camión agregado correctamente.');
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $camion = Camion::findOrFail($id);
        return view('camiones.edit', compact('camion'));
    }

    // Actualizar un camión existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'placa' => 'required|string|max:10',
            'codigo_interno' => 'required|string|max:20',
            'color' => 'required|string|max:20',
            'modelo' => 'required|string|max:50',
            'capacidad_toneladas' => 'required|numeric',
            'id_transporte' => 'required|exists:transporte,id_transporte',
            'id_marca' => 'required|exists:marca,id_marca'
        ]);

        $camion = Camion::findOrFail($id);
        $camion->update($request->all());
        return redirect()->route('camiones.index')->with('success', 'Camión actualizado correctamente.');
    }

    // Eliminar un camión
    public function destroy($id)
    {
        $camion = Camion::findOrFail($id);
        $camion->delete();
        return redirect()->route('camiones.index')->with('success', 'Camión eliminado correctamente.');
    }
}
