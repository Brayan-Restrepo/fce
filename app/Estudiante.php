<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'estudiante';

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

}
