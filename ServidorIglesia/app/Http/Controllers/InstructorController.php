<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\instructor;
class InstructorController extends Controller
{
     public function index()
    {
    	 $instructores=instructor::all()->toArray();
        return response()->json($instructores);
    }

    public function show($DNI)
    {
    	$instructor = instructor::where('DNI', $DNI)->get(['nombre','ubicacion','edad','password','celular','numeroParejasMisioneras','misionerDigital','idIglesia','idGrupo']);
     
    	return response()->json($grupo);
    }

    public function store(Request $request)
    {
       $this->validate(request(),[
           'nombre'=>'required|max:255',
           'ubicacion'=>'required|max:255',
           'password'=>'required|max:255'
       ]);
       $instructor = instructor::create($request->all());
        $instructor->save();
        return response()->json("Success");
       
    }

     public function update($DNI, Request $request)
    {
    	$instructor = instructor::find($DNI);
    	$instructor->nombre=$request->nombre;
    	$instructor->ubicacion=$request->ubicacion;
    	$instructor->edad=$request->edad;
    	$instructor->password=$request->password;
    	$instructor->celular=$request->celular;
    	$instructor->numeroParejasMisioneras=$request->numeroParejasMisioneras;
    	$instructor->misionerDigital=$request->misionerDigital;
    	
		$instructor->save();
         return response()->json("success");
       }

    public function delete($DNI)
    {
    	$instructor = instructor::find($DNI);

		$instructor->delete();
         return response()->json("success");
       }
}
