<?php namespace App\Http\Controllers\Gestionar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estudiante;
use App\User;
use App\Programa;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEstudianteRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class EstudiantesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function index()
	{
		$userPrograma = Session::get('UserPrograma');
		if($userPrograma == null){
			$estudiante = Estudiante::all();
		}else{
			$estudiante = Estudiante::where('programa_id',$userPrograma)->get();
		}
		Session::put('menu', 'Estudiantes');
		return view('table',compact('estudiante'));	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		Session::put('menu', 'Agregar Estudiante');
		Session::put('formulario', 'Estudiante');
		Session::put('editar', False);
		$programasArray = Programa::ProgramasArray();
		return view('formularios',compact('programasArray'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateEstudianteRequest $request)
	{	
		$dataUser = [
        	'name'=> 	$request->nombre1.' '.$request->apellido1,
        	'email'=>	$request->email,
        	'type'=>	'Estudiante',
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
       	
       	$dataEstudiante = [
			'codigo'			=>	$request->codigo,
			'identificacion'	=>	$request->identificacion,
			'apellido1'			=>	$request->apellido1,
			'apellido2'			=>	$request->apellido2,
			'nombre1'			=>	$request->nombre1,
			'nombre2'			=>	$request->nombre2,
			'fechaNac'			=>	$request->fechaNac,
			'direccion'			=>	$request->direccion,
			'barrio'			=>	$request->barrio,
			'celular'			=>	$request->celular,
			'email'				=>	$request->email,
			'programa_id'		=>	$request->programa_id,
			'user_id'			=>	$user->id
			];
		Estudiante::create($dataEstudiante);

		return redirect()->to('gestionar/estudiante');
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
		Session::put('menu', 'Editar Estudiante');
		Session::put('formulario', 'Estudiante');
		Session::put('editar', True);
		$estudiante = Estudiante::findOrFail($id);
		$programasArray = Programa::ProgramasArray();
		return view('formularios',compact('estudiante','programasArray'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateEstudianteRequest $request, $id)
	{
		$estudiante = Estudiante::findOrFail($id);
		$estudiante->fill($request->all());
		$estudiante->save();
		$dataUser = array();
		$dataUser = [
        	'name'=> 	$request->nombre1.' '.$request->apellido1,
        	'email'=>	$request->email
        	];
    	if($request->password != ''){
			$dataUser['password'] = \Hash::make($request->password);
		}
		$user = User::findOrFail($estudiante->user_id);
		$user->fill($dataUser);
		$user->save();
		return redirect()->to('gestionar/estudiante');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$estudiante = Estudiante::findOrFail($id);
		$estudiante->User->delete();
		$estudiante->delete();
		return redirect()->back();
	}

}
