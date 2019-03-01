<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Estudiante;
 use App\Http\Resources\EstudianteResource;

class EstudianteController extends Controller
{
    public function index()
    {
    	return EstudianteResource::collection(Estudiante::all());
      //return EstudianteResource::collection(Estudiante);
      //return BookResource::collection(Book::with('ratings')->paginate(25));
    }

    public function store(Request $request)
    {
    	//http://localhost:8000/api/estudiantes/{"id_estudiante":"206694","nombre":"Jose","carrera":"ISW"}
      //return Article::create($request->all());
      $estudiante = Estudiante::create([
        'id_estudiante' => $request->id_estudiante,
        'nombre' => $request->nombre,
        'carrera' => $request->carrera,
      ]);

      return new EstudianteResource($estudiante);
    }

    public function show(Estudiante $estudiante)
    {
      return new EstudianteResource($estudiante);
    }

    public function update(Request $request, Estudiante $estudiante)
    {
      $estudiante->update($request->only(['nombre', 'carrera']));

      return new EstudianteResource($estudiante);
    }

    public function destroy(Estudiante $estudiante)
    {
      $estudiante->delete();

      return response()->json(null, 204);
    }

}
