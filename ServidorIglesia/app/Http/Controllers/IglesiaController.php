<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\iglesia;
class IglesiaController extends Controller
{
    //
     public function index()
    {
    	 $iglesias=iglesia::all()->toArray();
        return response()->json($iglesias);
    }

    public function show($idIglesia)
    {
    	$iglesia = iglesia::where('idIglesia', $idIglesia)->get(['nombreIglesia','ubicacion','cantidadPersona','ciudad','usuarioIglesia','contraIglesia','idDistrito']);
    
    	return response()->json($grupo);
    }

    public function store(Request $request)
    {
       $this->validate(request(),[
           'nombreGrupo'=>'required|max:255',
           'ubicacion'=>'required|max:255',
           'ciudad'=>'required|max:255',
           'usuarioIglesia'=>'required|max:255',
           'contraIglesia'=>'required|max:255'
       ]);
       $iglesia = iglesia::create($request->all());
        $iglesia->save();
        return response()->json("Success");
       
    }

     public function update($idIglesia, Request $request)
    {
    	$iglesia = iglesia::find($idIglesia);
    	$iglesia->nombreGrupo=$request->nombreGrupo;
    	$iglesia->ubicacion=$request->ubicacion;
    	$iglesia->ciudad=$request->ciudad;
    	$iglesia->usuarioIglesia=$request->nombusuarioIglesiareGrupo;
    	$iglesia->contraIglesia=$request->contraIglesia;
		$iglesia->save();
         return response()->json("success");
       }

    public function delete($idIglesia)
    {
    	$iglesia = iglesia::find($idIglesia);

		$iglesia->delete();
         return response()->json("success");
       }
}
