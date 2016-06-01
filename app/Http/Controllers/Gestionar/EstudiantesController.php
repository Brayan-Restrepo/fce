<?php namespace App\Http\Controllers\Gestionar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estudiante;
use App\User;
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
		$estudiante = Estudiante::all();
		
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
		return view('formularios');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateEstudianteRequest $request)
	{
			$estudiante = Estudiante::create($request->all());
	        

	        $data = [
	        	'name'=> 	$estudiante->nombre1.' '.$estudiante->apellido1,
	        	'email'=>	$estudiante->email,
	        	'password'=>\Hash::make($estudiante->codigo)
	        	];
			$rules = array(
				'name' => 'required', 
				'email' => 'required', 
				'password' => 'required'
			);
	        $validador = Validator::make($data, $rules);
	        
			$user = User::create($data);

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
