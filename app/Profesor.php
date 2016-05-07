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
	protected $fillable = [
		'id',
		'identificacion',
		'apellido1',
		'apellido2',
		'nombre1',
		'nombre2',
		'fechaNac',
		'pregrado',
		'especializacion',
		'maestria',
		'doctorado'
		];

}
