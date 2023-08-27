<?php


namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function registrarAsistencia(Request $request)
    {
        $data = $request->validate([
            'alumno_id' => 'required|exists:alumnos,id',
            'curso_id' => 'required|exists:cursos,id',
            'fecha' => 'required|date',
            'asistencia' => 'required|in:A,T,F',
        ]);

        Asistencia::create($data);
        return response()->json(['message' => 'Asistencia registrada']);
    }
}
