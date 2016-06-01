<?php namespace App\Http\Controllers\Gestionar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Profesor;
use App\User;
use App\Http\Requests\CreateProfesorRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProfesoresController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profesores = Profesor::all();
		Session::put('menu', 'Profesores');
		return view('table',compact('profesores'));	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		Session::put('menu', 'Agregar Profesor');
		Session::put('formulario', 'Profesor');
		return view('formularios');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProfesorRequest $request)
	{
			$profesor = Profesor::create($request->all());

			$data = [
	        	'name'=> 	$profesor->nombre1.' '.$profesor->apellido1,
	        	'email'=>	$profesor->email,
	        	'type'=>	'Docente',
	        	'password'=>\Hash::make($profesor->identificacion)
	        	];
			$rules = array(
				'name' => 'required', 
				'email' => 'required', 
				'password' => 'required',
				'type' => 'required'
			);
	        $validador = Validator::make($data, $rules);
	        
			$user = User::create($data);

			return redirect()->to('gestionar/profesor');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
