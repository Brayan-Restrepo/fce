<?php namespace App\Http\Controllers\Gestionar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Profesor;
use App\User;
use App\Programa;
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
		$userPrograma = Session::get('UserPrograma');
		$profesores = Profesor::where('programa_id',$userPrograma)->get();
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
		Session::put('editar', False);
		$programasArray = Programa::ProgramasArray();
		return view('formularios',compact('programasArray'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProfesorRequest $request)
	{

		$dataUser = [
        	'name'=> 	$request->nombre1.' '.$request->apellido1,
        	'email'=>	$request->email,
        	'type'=>	'Docente',
        	'password'=>\Hash::make($request->password)
        	];
		$rulesUser = array(
			'name' => 'required', 
			'email' => 'required', 
			'password' => 'required',
			'type' => 'required'
		);
        $validador = Validator::make($dataUser, $rulesUser);   
		$user = User::create($dataUser);

		$dataProfesor = [
			'identificacion'	=>	$request->identificacion,
			'apellido1'			=>	$request->apellido1,
			'apellido2'			=>	$request->apellido2,
			'nombre1'			=>	$request->nombre1,
			'nombre2'			=>	$request->nombre2,
			'celular'			=>	$request->celular,
			'fechaNac'			=>	$request->fechaNac,
			'pregrado'			=>	$request->pregrado,
			'especializacion'	=>	$request->especializacion,
			'maestria'			=>	$request->maestria,
			'doctorado'			=>	$request->doctorado,
			'email'				=>	$request->email,
			'programa_id'		=>	$request->programa_id,
			'user_id'			=>	$user->id
		];

		Profesor::create($dataProfesor);
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
		Session::put('menu', 'Editar Profesor');
		Session::put('formulario', 'Profesor');
		Session::put('editar', True);
		$profesor = Profesor::findOrFail($id);
		$programasArray = Programa::ProgramasArray();
		return view('formularios',compact('profesor','programasArray'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateProfesorRequest $request, $id)
	{
		$profesor = Profesor::findOrFail($id);
		$profesor->fill($request->all());
		$profesor->save();
		$dataUser = array();
		$dataUser = [
        	'name'=> 	$request->nombre1.' '.$request->apellido1,
        	'email'=>	$request->email
        	];
    	if($request->password != ''){
			$dataUser['password'] = \Hash::make($request->password);
		}
		$user = User::findOrFail($profesor->user_id);
		$user->fill($dataUser);
		$user->save();
		return redirect()->to('gestionar/profesor');
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
