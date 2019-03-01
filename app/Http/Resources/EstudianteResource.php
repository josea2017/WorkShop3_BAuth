<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class EstudianteResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_estudiante' => $this->id_estudiante,
            'nombre' => $this->nombre,
            'carrera' => $this->carrera,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}


