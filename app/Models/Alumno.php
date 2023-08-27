<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre', 'email'];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'matriculas');
    }
}
