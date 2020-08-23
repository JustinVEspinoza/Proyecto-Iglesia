<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\unidad;
class unidadController extends Controller
{
    public function index()
    {
    	 $unidades=unidad::all()->toArray();
        return response()->json($unidades);
    }

    public function show($idUnidad)
    {
    	$unidad = unidad::where('idUnidad', $idUnidad)->get(['nombreUnidad','puntajeMaximo','fechaCreacionUnidad','idEstudio']);
    	 
    	return response()->json($unidad);
    }

    public function store(Request $request)
    {
       $this->validate(request(),[
           'nombreUnidad'=>'required|max:255'
       ]);
       $unidad = unidad::create($request->all());
        $unidad->save();
        return response()->json("Success");
       
    }

     public function update($idUnidad, Request $request)
    {
    	$unidad = unidad::find($idUnidad);
    	$unidad->nombreGrupo=$request->nombreGrupo;
		$unidad->save();
         return response()->json("success");
       }

    public function delete($idUnidad)
    {
    	$unidad = unidad::find($idUnidad);

		$unidad->delete();
         return response()->json("success");
       }
}
