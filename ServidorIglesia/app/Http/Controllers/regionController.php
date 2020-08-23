<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\region;
class regionController extends Controller
{
    public function index()
    {
    	 $regiones=region::all()->toArray();
        return response()->json($regiones);
    }

    public function show($idRegion)
    {
    	$region = region::where('idRegion', $idRegion)->get(['nombre','usuarioRegion','contraRegion']);
    	return response()->json($region);
 
    }

    public function store(Request $request)
    {
       $this->validate(request(),[
           'nombre'=>'required|max:255',
           'usuarioRegion'=>'required|max:255',
           'contraRegion'=>'required|max:255'
       ]);
       $region = region::create($request->all());
        $region->save();
        return response()->json("Success");
       
    }

     public function update($idRegion, Request $request)
    {
    	$region = region::find($idRegion);
    	$region->nombre=$request->nombre;
    	$region->usuarioRegion=$request->usuarioRegion;
    	$region->contraRegion=$request->contraRegion;
		$region->save();
         return response()->json("success");
       }

    public function delete($idRegion)
    {
    	$region = region::find($idRegion);

		$region->delete();
         return response()->json("success");
       }
}
