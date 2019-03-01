<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['id_estudiante', 'nombre', 'carrera'];

    
}