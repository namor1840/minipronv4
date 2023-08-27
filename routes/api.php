<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\AsistenciaController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('docentes', [DocenteController::class, 'index']);
Route::post('docentes', [DocenteController::class, 'store']);
Route::get('docentes/{id}', [DocenteController::class, 'show']);
Route::put('docentes/{id}', [DocenteController::class, 'update']);
Route::delete('docentes/{id}', [DocenteController::class, 'destroy']);

Route::get('alumnos', [AlumnoController::class, 'index']);
Route::post('alumnos', [AlumnoController::class, 'store']);
Route::get('alumnos/{id}', [AlumnoController::class, 'show']);
Route::put('alumnos/{id}', [AlumnoController::class, 'update']);
Route::delete('alumnos/{id}', [AlumnoController::class, 'destroy']);

Route::get('cursos', [CursoController::class, 'index']);
Route::post('cursos', [CursoController::class, 'store']);
Route::get('cursos/{id}', [CursoController::class, 'show']);
Route::put('cursos/{id}', [CursoController::class, 'update']);
Route::delete('cursos/{id}', [CursoController::class, 'destroy']);

Route::post('matricular/{alumno}/{curso}', [MatriculaController::class, 'matricular']);

Route::post('asistencia/registrar', [AsistenciaController::class, 'registrarAsistencia']);