<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\distrito;
class distritoController extends Controller
{
    public function index()
    {
    	 $distritos=distrito::all()->toArray();
        return response()->json($distritos);
    }

    public function show($idDistrito)
    {
    	$distrito = distrito::where('idDistrito', $idDistrito)->get(['nombreDistrito','ubicacion','usuarioDistrito','contraDistrito','idRegion']);
    	return response()->json($distrito);
 
    }

    public function store(Request $request)
    {
       $this->validate(request(),[
           'nombreDistrito'=>'required|max:255',
           'ubicacion'=>'required|max:255',
           'usuarioDistrito'=>'required|max:255',
           'contraDistrito'=>'required|max:255'
       ]);
       $distrito = distrito::create($request->all());
        $distrito->save();
        return response()->json("Success");
       
    }

     public function update($idDistrito, Request $request)
    {
    	$distrito = distrito::find($idDistrito);
    	$distrito->nombreDistrito=$request->nombreDistrito;
    	$distrito->ubicacion=$request->ubicacion;
    	$distrito->usuarioDistrito=$request->usuarioDistrito;
    	$distrito->contraDistrito=$request->contraDistrito;
		$distrito->save();
         return response()->json("success");
       }

    public function delete($idDistrito)
    {
    	$distrito = distrito::find($idDistrito);

		$distrito->delete();
         return response()->json("success");
       }
}
