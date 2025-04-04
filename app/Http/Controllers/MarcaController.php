<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
public function index()
{
$marcas = Marca::all();
return view('marca.index', compact('marcas'));
}

public function create()
{
return view('marca.create');
}

    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marca.edit', compact('marca'));
    }


}
