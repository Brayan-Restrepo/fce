<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profesores';

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
	protected $guarded = ['id'];
	protected $fillable = [
		'identificacion',
		'apellido1',
		'apellido2',
		'nombre1',
		'nombre2',
		'fechaNac',
		'pregrado',
		'especializacion',
		'maestria',
		'doctorado',
		'email'
		];

	public function scopeProfesoresArray($query){

		$profesores = Profesor::all();
		$profesoresArray = array();
		$profesoresArray['']='';
		foreach ($profesores as $profesor) {
			$nombreProfecor = $profesor->identificacion.' - '.$profesor->nombre1.' '.$profesor->nombre2.' '.$profesor->apellido1.' '.$profesor->apellido2; 
			//$profesoresArray[$profesor->id]=$nombreProfecor;
			$profesoresArray[$nombreProfecor]=$nombreProfecor;
		}
		
		return $profesoresArray;
	}
}
