<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

//Route::post(uri:'reset',action: 'ResetController@mreset');

//Route::get(uri:'/event',action: 'EventController@strore');
//Route::get('/data','App\Http\Controllers\SkyCopController@getdata');

//Route::get('/articulosindex','App\Http\Controllers\ArticuloController@index'); //Mostrar todos los registros
//Route::post('/articulos','App\Http\Controllers\ArticuloController@store'); //Crear un registro
//Route::put('/articulos/{id}','App\Http\Controllers\ArticuloController@update'); //Actualizar un registro
//Route::delete('/articulos/{id}','App\Http\Controllers\ArticuloController@destroy'); //Eliminar un registro
//Route::get('/articulos/buscar','App\Http\Controllers\ArticuloController@show');


//Route::get('/login', 'App\Http\Controllers\UserController@store')
//->name('login');

Route::get('/data','App\Http\Controllers\SkyCopController@getdata')->name('data');


//Route::get('/data', [SkyCopController::class, 'getdata'])
//->name('data.get');

Route::get('/articulos','App\Http\Controllers\ArticuloController@index')->name('articulos');
