<?php

namespace App\Http\Controllers;
use App\unidad_estudiante;
use Illuminate\Http\Request;

class unidad_estudianteController extends Controller
{
    public function index()
    {
    	 $unidad_estudiante=unidad_estudiante::all()->toArray();
        return response()->json($unidad_estudiante);
    }

    public function show($idUnidad_Estudiante)
    {
    	$unidad_estudiante = unidad_estudiante::where('idUnidad', $idUnidad_Estudiante)->get(['idEstudiante', 'puntajeEstudiante','fecha_Inicio']);
    	return response()->json($unidad_estudiante);
 
    }

    public function store(Request $request)
    {
       $this->validate(request(),[
            'puntajeEstudiante'=>'required',
            'fecha_Inicio'=>'required'
           
       ]);
        $unidad_estudiante = unidad_estudiante::create($request->all());
        $unidad_estudiante->save();
        return response()->json("Success");
       
    }

     public function update($idUnidad_Estudiante, Request $request)
    {
    	$unidad_estudiante = unidad_estudiante::find($idUnidad);
    	$unidad_estudiante->idEstudiante=$request->idEstudiante;
    	$unidad_estudiante->puntajeEstudiante=$request->puntajeEstudiante;
        $unidad_estudiante->fecha_Inicio=$request->fecha_Inicio;

		$unidad_estudiante->save();
         return response()->json("success");
       }

    public function delete($idUnidad_Estudiante)
    {
    	$unidad_estudiante = unidad_estudiante::find($idUnidad_Estudiante);

		$unidad_estudiante->delete();
         return response()->json("success");
       }
}
