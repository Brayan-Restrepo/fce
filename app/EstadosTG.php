<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosTG extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'estadostg';

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
	protected $guarded = ['id'];
	protected $fillable = ['estado'];

	
	public function scopeEstadosArray($query){
		
		$estados = EstadosTG::all();
		$estadosArray = array();
		foreach ($estados as $estado) {
			//$estadosArray[$estado->id] = $estado->estado;	
			$estadosArray[$estado->estado] = $estado->estado;
		}

		return $estadosArray;
	}

}
