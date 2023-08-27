<?php

// app/Http/Controllers/CursoController.php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return response()->json($cursos);
    }

    public function store(Request $request)
    {
        $curso = Curso::create($request->all());
        return response()->json($curso, 201);
    }

    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return response()->json($curso);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return response()->json($curso, 200);
    }

    public function destroy($id)
    {
        Curso::destroy($id);
        return response()->json(null, 204);
    }
}
