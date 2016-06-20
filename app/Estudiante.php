<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'estudiantes';

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
	//protected $guarded = ['id'];// los campos que no aceptan
	//protected $primaryKey='codigo';
	protected $fillable = [
		'codigo',
		'identificacion',
		'apellido1',
		'apellido2',
		'nombre1',
		'nombre2',
		'fechaNac',
		'direccion',
		'barrio',
		'celular',
		'email',
		'programa_id'
		];

	public function programa()
    {
        return $this->belongsTo('App\Programa');
    }

	public function scopeEstudiantesArray($query){

		$estudiantes = Estudiante::all();
		$estudiantesArray = array();
		$estudiantesArray['']='';
		foreach ($estudiantes as $estudiante) {
			//$nombreEstudiante = $estudiante->codigo.' - '.$estudiante->nombre1.' '.$estudiante->nombre2.' '.$estudiante->apellido1.' '.$estudiante->apellido2;
			//$estudiantesArray[$estudiante->id] = $nombreEstudiante;
			$nombreEstudiante = $estudiante->nombre1;
			$estudiantesArray[$nombreEstudiante] = $nombreEstudiante;
		}
		
		return $estudiantesArray;
	}

}

	