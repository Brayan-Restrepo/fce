<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model {

	protected $table = 'programa';

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
	
	protected $guarded = ['id'];
	protected $fillable = [
		'nombre'
		];

	public function trabajoDeGrado()
    {
        return $this->hasOne('App\TrabajoDeGrado');
    }

	public function secretaria()
    {
        return $this->hasOne('App\Secretaria');
    }

    public function estudiante()
    {
        return $this->hasOne('App\Estudiate');
    }

    public function profesor()
    {
        return $this->hasOne('App\Profesor');
    }

    public function director()
    {
        return $this->hasOne('App\Director');
    }

    public function scopeProgramasArray($query){
		
		$programas = Programa::all();
		$programasArray = array();
		$programasArray['']='';
		foreach ($programas as $programa) {
			//$modalidadesArray[$modalidad->id]=$modalidad->descripcion;
			$programasArray[$programa->id]=$programa->nombre;
		}

		return $programasArray;
	}

}
