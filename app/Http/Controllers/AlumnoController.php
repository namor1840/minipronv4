<?php


namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return response()->json($alumnos);
    }

    public function store(Request $request)
    {
        $alumno = Alumno::create($request->all());
        return response()->json($alumno, 201);
    }

    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        return response()->json($alumno);
    }

    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->update($request->all());
        return response()->json($alumno, 200);
    }

    public function destroy($id)
    {
        Alumno::destroy($id);
        return response()->json(null, 204);
    }
}
