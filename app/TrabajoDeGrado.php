<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajoDeGrado extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trabajosGrado';

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
	
	protected $guarded = ['id'];
	protected $fillable = [
		'fecha',
		'titulo',
		'modalidadGrado',
		'director',
		'estudiante1',
		'estudiante2',
		'jurado1',
		'jurado2',
		'estado',
		'actaSustentacion',
		'fechaSustentacion'
		];

	public function modalidad(){
        return $this->belongsTo('App\Modalidades');
    }
}
