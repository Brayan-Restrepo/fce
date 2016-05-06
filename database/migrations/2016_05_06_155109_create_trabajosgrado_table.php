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
		Schema::creeate('trabajosGrado', function(Blueprint $table){
			$table -> integer('id');
			$table -> date('fecha');
			$table -> char('titulo');
			$table -> char('modalidadGrado');
			$table -> char('director');
			$table -> char('estudiante1');
			$table -> char('estudiante2');
			$table -> char('jurado1');
			$table -> char('jurado2');
			$table -> char('estado');
			$table -> char('actaSustentacion');
			$table -> date('fechaSustentacion');
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
