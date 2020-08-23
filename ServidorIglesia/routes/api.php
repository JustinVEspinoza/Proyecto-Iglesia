<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/region', 'regionController@index');
Route::get('/region/{idRegion}', 'regionController@show');
Route::post('/region', 'regionController@store');
Route::delete('/region/{idRegion}', 'regionController@delete');
Route::put('/region/{idRegion}', 'regionController@update');


Route::get('/distrito', 'distritoController@index');
Route::get('/distrito/{idDistrito}', 'distritoController@show');
Route::post('/distrito', 'distritoController@store');
Route::delete('/distrito/{idDistrito}', 'distritoController@delete');
Route::put('/distrito/{idDistrito}', 'distritoController@update');

Route::get('/iglesia', 'iglesiaController@index');
Route::get('/iglesia/{idIglesia}', 'iglesiaController@show');
Route::post('/iglesia', 'iglesiaController@store');
Route::delete('/iglesia/{idIglesia}', 'iglesiaController@delete');
Route::put('/iglesia/{idIglesia}', 'iglesiaController@update');

Route::get('/grupo', 'grupoController@index');
Route::get('/grupo/{idGrupo}', 'grupoController@show');
Route::post('/grupo', 'grupoController@store');
Route::delete('/grupo/{idGrupo}', 'grupoController@delete');
Route::put('/grupo/{idGrupo}', 'grupoController@update');

Route::get('/instructor', 'instructorController@index');
Route::get('/instructor/{DNI}', 'instructorController@show');
Route::post('/instructor', 'instructorController@store');
Route::delete('/instructor/{DNI}', 'instructorController@delete');
Route::put('/instructor/{DNI}', 'instructorController@update');

Route::get('/estudio', 'estudioController@index');
Route::get('/estudio/{idEstudio}', 'estudioController@show');
Route::post('/estudio', 'estudioController@store');
Route::delete('/estudio/{idEstudio}', 'estudioController@delete');
Route::put('/estudio/{idEstudio}', 'estudioController@update');

Route::get('/unidad', 'unidadController@index');
Route::get('/unidad/{idUnidad}', 'unidadController@show');
Route::post('/unidad', 'unidadController@store');
Route::delete('/unidad/{idUnidad}', 'unidadController@delete');
Route::put('/unidad/{idUnidad}', 'unidadController@update');



Route::get('/estudiante', 'estudianteController@index');
Route::get('/estudiante/{idEstudiante}', 'estudianteController@show');
Route::post('/estudiante', 'estudianteController@store');
Route::delete('/estudiante/{idEstudiante}', 'estudianteController@delete');
Route::put('/estudiante/{idEstudiante}', 'estudianteController@update');\


Route::get('/unidad_estudiante', 'unidad_estudianteController@index');
Route::get('/unidad_estudiante/{idUnidad_Estudiante}', 'unidad_estudianteController@show');
Route::post('/unidad_estudiante', 'unidad_estudianteController@store');
Route::delete('/unidad_estudiante/{idUnidad_Estudiante}', 'unidad_estudianteController@delete');
Route::put('/unidad_estudiante/{idUnidad_Estudiante}', 'unidad_estudianteController@update');