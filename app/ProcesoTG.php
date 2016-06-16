<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcesoTG extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ProcesoTG';

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
	protected $guarded = ['id'];
	protected $fillable = [
		'decision',
		'trabajosGrado_id'
		];

	public function trabajosGrado()
    {
        return $this->belongsTo('App\TrabajoDeGrado');
    }



}
