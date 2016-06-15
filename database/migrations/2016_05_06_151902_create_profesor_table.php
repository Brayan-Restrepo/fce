<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('profesores',function(Blueprint $table){
			$table -> increments('id');
			$table -> integer('identificacion');
			$table -> char('apellido1');
			$table -> char('apellido2');
			$table -> char('nombre1');
			$table -> char('nombre2');
			$table -> char('celular');
			$table -> date('fechaNac');
			$table -> char('pregrado');
			$table -> char('especializacion');
			$table -> char('maestria');
			$table -> char('doctorado');
			$table -> string('email');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profesores');
	}

}
