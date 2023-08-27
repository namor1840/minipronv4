<?php


namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return response()->json($docentes);
    }

    public function store(Request $request)
    {
        $docente = Docente::create($request->all());
        return response()->json($docente, 201);
    }

    public function show($id)
    {
        $docente = Docente::findOrFail($id);
        return response()->json($docente);
    }

    public function update(Request $request, $id)
    {
        $docente = Docente::findOrFail($id);
        $docente->update($request->all());
        return response()->json($docente, 200);
    }

    public function destroy($id)
    {
        Docente::destroy($id);
        return response()->json(null, 204);
    }
}
