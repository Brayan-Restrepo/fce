<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
Route::get('', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('modalidad-de-grado','HomeController@modalidad');
Route::get('estado-trabajo-de-grado','HomeController@estadotg');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'gestionar','middleware'=>['auth'], 'namespace'=>'Gestionar'], function(){	
	
	Route::resource('estudiante','EstudiantesController');
	Route::resource('profesor','ProfesoresController');
	Route::resource('trabajo-de-grado','TrabajoDeGradoController');

});

Route::group(['prefix'=>'admin','middleware'=>['auth'], 'namespace'=>'Admin'], function(){	
	Route::resource('modalidad','ModalidadController');
	Route::resource('estado','EstadoController');
});