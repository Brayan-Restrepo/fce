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
		'email'
		];

	public function scopeName($query, $name){
		//dd('Scope '.$name);
		//trim($name) no toma Espacios
		if (trim($name) != '') {
			$query->where(\DB::raw("CONCAT(nombre1,' ',apellido1,' ',identificacion)"), "LIKE");
			//$query->where('first_name', $name);
			//dd($query);
		}
	}

}

	