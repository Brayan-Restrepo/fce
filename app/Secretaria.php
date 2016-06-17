<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'secretaria';

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
		'celular',
		'fechaNac',
		'email',
		'programa_id',
		'user_id'
		];

	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function programa()
    {
        return $this->belongsTo('App\Programa');
    }

}