<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajosgradoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trabajosGrado', function(Blueprint $table){
			$table -> increments('id');
			$table -> date('fecha');
			$table -> char('titulo');
			$table -> char('radicado');
			$table -> char('modalidadGrado');
			$table -> char('director');
			$table -> char('estudiante1');
			$table -> char('estudiante2');
			$table -> char('jurado1');
			$table -> char('jurado2');
			$table -> char('estado');
			$table -> char('actaSustentacion');
			$table -> date('fechaSustentacion');
			$table -> timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trabajosGrado');
	}

}
