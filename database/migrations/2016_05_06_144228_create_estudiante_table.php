<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//hola brayan
		Schema::create('estudiantes',function(Blueprint $table){
			$table -> increments('id');
			$table -> integer('codigo')->unique();
			$table -> integer('identificacion');
			$table -> string('apellido1');
			$table -> string('apellido2');
			$table -> string('nombre1');
			$table -> string('nombre2');
			$table -> date('fechaNac');
			$table -> string('direccion');
			$table -> string('barrio');
			$table -> string('celular');
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
		Schema::drop('estudiantes');
	}

}
