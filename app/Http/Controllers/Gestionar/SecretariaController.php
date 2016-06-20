<?php namespace App\Http\Controllers\Gestionar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Secretaria;
use App\User;
use App\Programa;

use App\Http\Requests\CreateSecretariaRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SecretariaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$secretarias = Secretaria::all();
		Session::put('menu', 'Lista de Secretarias');
		return view('table',compact('secretarias'));	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		Session::put('menu', 'Agregar Secretaria');
		Session::put('formulario', 'Secretaria');		
		Session::put('editar', False);
		$programasArray = Programa::ProgramasArray();
		return view('formularios',compact('programasArray'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateSecretariaRequest $request)
	{		
			$dataUser = [
	        	'name'=> 	$request->nombre1.' '.$request->apellido1,
	        	'email'=>	$request->email,
	        	'type'=>	'Secretaria',
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
			
			//Secretaria

			$dataSecretaria = [
	        	'identificacion'=>	$request->identificacion,
	        	'apellido1'		=>	$request->apellido1,
	        	'apellido2'		=>	$request->apellido2,
	        	'nombre1'		=>	$request->nombre1,
	        	'nombre2'		=>	$request->nombre2,
	        	'celular'		=>	$request->celular,
	        	'fechaNac'		=>	$request->fechaNac,
	        	'email'			=>	$request->email,
	        	'programa_id'	=>	$request->programa_id,
	        	'user_id'		=>	$user->id
	        	];
			$secretaria = Secretaria::create($dataSecretaria);

		return redirect()->to('gestionar/secretaria');
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
		Session::put('menu', 'Editar Secretaria');
		Session::put('formulario', 'Secretaria');
		Session::put('editar', True);
		$secretaria = Secretaria::findOrFail($id);
		$programasArray = Programa::ProgramasArray();
		return view('formularios',compact('secretaria','programasArray'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateSecretariaRequest $request, $id)
	{
		$secretaria = Secretaria::findOrFail($id);
		$secretaria->fill($request->all());
		$secretaria->save();
		//return redirect()->back();
		//return view('home');
		return redirect()->to('gestionar/secretaria');
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
