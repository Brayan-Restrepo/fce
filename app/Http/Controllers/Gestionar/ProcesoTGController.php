<?php namespace App\Http\Controllers\Gestionar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\TrabajoDeGrado;
use App\ProcesoTG;

use App\Http\Requests\CreateProcesoTGRequest;
use Illuminate\Support\Facades\Session;

class ProcesoTGController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function lista($idTG){
		$trabajoG = TrabajoDeGrado::findOrFail($idTG);
		$procesoTG = ProcesoTG::where('trabajosGrado_id', $idTG)->get();
		Session::put('menu', 'Lista Proceso de Trabajos de Grados');
		Session::put('subMenu', 'Acta de Comite');
		return view('table',compact('trabajoG','procesoTG'));
	}

	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProcesoTGRequest $request)
	{
		ProcesoTG::create($request->all());
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
public function update(CreateProcesoTGRequest $request, $id)
	{
			////
		$procesoTG = ProcesoTG::findOrFail($id);
		$procesoTG->fill($request->all());
		$procesoTG->save();
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
