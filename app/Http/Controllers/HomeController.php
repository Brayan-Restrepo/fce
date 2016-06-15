<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Modalidades;
use App\EstadosTG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$modalidades = Modalidades::all();
		$estadostg = EstadosTG::all();
		return view('home',compact('modalidades','estadostg'));
	}

	public function modalidad(){
		$modalidades = Modalidades::all();
		Session::put('menu', 'Modalidades de grado');
		return view('table',compact('modalidades'));

		return view();
	}
	public function estadotg(){
		$estadostg = EstadosTG::all();
		Session::put('menu', 'Estados Trabajos de Gados');
		return view('table',compact('estadostg'))
	}
}
