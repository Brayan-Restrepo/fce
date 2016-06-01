<?php namespace App\Http\Controllers\Gestionar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\TrabajoDeGrado;
use App\EstadosTG;
use App\Modalidades;
use App\Profesor;
use App\Estudiante;

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
		$trabajo_de_grado = TrabajoDeGrado::all();
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
		Session::put('menu', 'Nuevo Trabajo de Grado');
		Session::put('formulario', 'Trabajo de Grado');
		Session::put('editar', False);

		$profesoresArray = Profesor::profesoresArray();
		$estudiantesArray = Estudiante::estudiantesArray();
		$modalidadesArray = Modalidades::modalidadesArray();
		$estadosArray = EstadosTG::estadosArray();	

		return view('formularios',compact('modalidadesArray','estadosArray','profesoresArray','estudiantesArray'));
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
		Session::put('menu', 'Nuevo Trabajo de Grado');
		Session::put('formulario', 'Trabajo de Grado');
		Session::put('editar', True);
		$trabajo_de_grado = TrabajoDeGrado::findOrFail($id);
		return view('formularios', compact('trabajo_de_grado'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreatePacienteRequest $request, $id)
	{
			////
		$paciente = Paciente::findOrFail($id);
		$paciente->fill($request->all());
		$paciente->save();
		//return redirect()->back();
		//return view('home');
		return redirect()->route('consulta.pacientes.index');
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