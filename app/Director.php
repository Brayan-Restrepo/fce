<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model {

		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'director';

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
	
	protected $guarded = ['id'];
	protected $fillable = [
		'programa_id',
		'profesores_id'
		];

	public function profesor()
    {
        return $this->belongsTo('App\Profesor');
    }

    public function programa()
    {
        return $this->belongsTo('App\Programa');
    }


}
