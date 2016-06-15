<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidades extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'modalidades';

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
	protected $guarded = ['id'];
	protected $fillable = ['descripcion'];


	public function scopeModalidadesArray($query){
		
		$modalidades = Modalidades::all();
		$modalidadesArray = array();

		foreach ($modalidades as $modalidad) {
			//$modalidadesArray[$modalidad->id]=$modalidad->descripcion;
			$modalidadesArray[$modalidad->descripcion]=$modalidad->descripcion;
		}

		return $modalidadesArray;
	}
}
