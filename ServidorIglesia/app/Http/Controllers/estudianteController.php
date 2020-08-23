<?php

namespace App\Http\Controllers;
use App\estudiante;
use Illuminate\Http\Request;

class estudianteController extends Controller
{
    public function index()
    {
    	 $estudiante=estudiante::all()->toArray();
        return response()->json($estudiante);
    }

    public function show($idEstudiante)
    {
    	$estudiante = estudiante::where('idEstudiante', $idEstudiante)->get(['nombre','apellidos','idMetodoCompartirPalabra','idEstadoCivil','edad']);
    	return response()->json($estudiante);
 
    }

    public function store(Request $request)
    {
       $this->validate(request(),[
           'nombre'=>'required|max:255',
           'apellidos'=>'required|max:255',
           'edad'=>'required'
       ]);
        $estudiante = estudiante::create($request->all());
        $estudiante->save();
        return response()->json("Success");
       
    }

     public function update($idEstudiante, Request $request)
    {
    	$estudiante = estudiante::find($idEstudiante);
    	$estudiante->nombre=$request->nombre;
    	$estudiante->apellidos=$request->apellidos;
        $estudiante->idMetodoCompartirPalabra=$request->idMetodoCompartirPalabra;
        $estudiante->idEstadoCivil=$request->idEstadoCivil;
        $estudiante->edad=$request->edad;
		$estudiante->save();
         return response()->json("success");
       }

    public function delete($idEstudiante)
    {
    	$estudiante = estudiante::find($idEstudiante);

		$estudiante->delete();
         return response()->json("success");
       }
}
