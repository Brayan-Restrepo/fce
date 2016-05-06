<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesotrabajogradoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('procesoTG', function(Blueprint $tabla){
			$tabla -> integer('id');
			$tabla -> char('trabajoGrado');
			$tabla -> date('fecha');
			$tabla -> char('actaComite');
			$tabla -> char('estado');
			$tabla -> char('decision');
			$tabla -> char('actaSustentacion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('procesoTG');
	}

}
