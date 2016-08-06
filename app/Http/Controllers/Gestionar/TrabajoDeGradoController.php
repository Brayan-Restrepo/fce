<?php namespace App\Http\Controllers\Gestionar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\TrabajoDeGrado;
use App\EstadosTG;
use App\Modalidades;
use App\Profesor;
use App\Estudiante;
use App\User;
use App\ProcesoTG;

use App\Http\Requests\CreateTrabajoDeGradoRequest;
use Illuminate\Support\Facades\Session;


class TrabajoDeGradoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$userID = Session::get('UserID');
		$userType = Session::get('UserType');
		$trabajo_de_grado;
		//dd(TrabajoDeGrado::find(1)->programa()->all());
		if ($userType == 'Secretaria') {
			$idPrograma = User::findOrFail($userID)->secretaria->programa_id;
			$trabajo_de_grado = TrabajoDeGrado::where('programa_id',$idPrograma)->get();
		}else if($userType == 'Director'){
			$trabajo_de_grado = TrabajoDeGrado::all();
		}else if($userType == 'Decano' || $userType == 'Admin'){
			$trabajo_de_grado = TrabajoDeGrado::all();
		}else if($userType == 'Docente'){
			dd('Docente');
		}else if($userType == 'Estudiante'){
			dd('Estudiante');
		}
		//dd($idPrograma);
		
		Session::put('menu', 'Lista de Trabajos de Grados');
		return view('table',compact('trabajo_de_grado'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$idPrograma = Session::get('UserPrograma');
		Session::put('menu', 'Nuevo Trabajo de Grado');
		Session::put('formulario', 'Trabajo de Grado');
		Session::put('editar', False);
		$profesoresArray = Profesor::profesoresArray($idPrograma);
		$estudiantesArray = Estudiante::estudiantesArray($idPrograma);
		$modalidadesArray = Modalidades::modalidadesArray();
		$estadosArray = EstadosTG::estadosArray();
		return view('formularios',compact('profesoresArray','estudiantesArray','modalidadesArray','estadosArray'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTrabajoDeGradoRequest $request)
	{
		$trabajo_de_grado = TrabajoDeGrado::create($request->all());
		return redirect()->to('gestionar/trabajo-de-grado');
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
		Session::put('menu', 'Editar Trabajo de Grado');
		Session::put('formulario', 'Trabajo de Grado');
		Session::put('editar', True);
		$trabajo_de_grado = TrabajoDeGrado::findOrFail($id);
		
		$profesoresArray = Profesor::profesoresArray($id);
		$estudiantesArray = Estudiante::estudiantesArray($id);
		$modalidadesArray = Modalidades::modalidadesArray($id);
		$estadosArray = EstadosTG::estadosArray();	
		//dd($trabajo_de_grado->estudiante1);
		return view('formularios',compact('trabajo_de_grado', 'modalidadesArray','estadosArray','profesoresArray','estudiantesArray'));

		//return view('formularios', compact('trabajo_de_grado'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateTrabajoDeGradoRequest $request, $id)
	{
			////
		$trabajo_de_grado = TrabajoDeGrado::findOrFail($id);
		$trabajo_de_grado->fill($request->all());
		$trabajo_de_grado->save();
		//return redirect()->back();
		//return view('home');
		return redirect()->to('gestionar/trabajo-de-grado');
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
