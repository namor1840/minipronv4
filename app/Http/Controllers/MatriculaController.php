<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Curso;


class MatriculaController extends Controller
{
    public function matricular(Alumno $alumno, Curso $curso)
    {
        $curso->alumnos()->attach($alumno->id);
        return response()->json(['message' => 'Matriculado exitosamente']);
    }
}