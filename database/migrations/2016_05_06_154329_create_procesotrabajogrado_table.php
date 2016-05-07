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
		Schema::create('procesoTG', function(Blueprint $table){
			$table -> integer('id');
			$table -> char('trabajoGrado');
			$table -> date('fecha');
			$table -> char('actaComite');
			$table -> char('estado');
			$table -> char('decision');
			$table -> char('actaSustentacion');
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
		Schema::drop('procesoTG');
	}

}
