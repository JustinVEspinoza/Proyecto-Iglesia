<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\grupo;
class GrupoController extends Controller
{
     public function index()
    {
    	 $grupos=grupo::all()->toArray();
        return response()->json($grupos);
    }

    public function show($idGrupo)
    {
    	$grupo = grupo::where('idGrupo', $idGrupo)->get(['nombreGrupo','idIglesia']);
    	return response()->json($grupo);
    }

    public function store(Request $request)
    {
       $this->validate(request(),[
           'nombreGrupo'=>'required|max:255'
       ]);
       $grupo = grupo::create($request->all());
        $grupo->save();
        return response()->json("Success");
       
    }

     public function update($idGrupo, Request $request)
    {
    	$grupo = grupo::find($idGrupo);
    	$grupo->nombreGrupo=$request->nombreGrupo;
		$grupo->save();
         return response()->json("success");
       }

    public function delete($idGrupo)
    {
    	$grupo = grupo::find($idGrupo);

		$grupo->delete();
         return response()->json("success");
       }
}
