<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudio
class estudioController extends Controller
{
     public function index()
    {
    	 $estudios=estudio::all()->toArray();
        return response()->json($estudios);
    }

    public function show($idEstudio)
    {
    	$estudio = estudio::where('idEstudio', $idEstudio)->get(['nombreEstudio','fechaCreacionEstudio','DNI']);
    	return response()->json($estudio);
    }

    public function store(Request $request)
    {
       $this->validate(request(),[
           'nombreEstudio'=>'required|max:255'
       ]);
       $estudio = estudio::create($request->all());
        $estudio->save();
        return response()->json("Success");
       
    }

     public function update($idEstudio, Request $request)
    {
    	$estudio = estudio::find($idEstudio);
    	$estudio->nombreEstudio=$request->nombreEstudio;
    	$estudio->fechaCreacionEstudio=$request->fechaCreacionEstudio;
		$estudio->save();
         return response()->json("success");
       }

    public function delete($idEstudio)
    {
    	$estudio = estudio::find($idEstudio);

		$estudio->delete();
         return response()->json("success");
       }
}
