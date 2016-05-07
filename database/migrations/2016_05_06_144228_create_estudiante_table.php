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
			$table -> integer('codigo');
			$table -> integer('identificacion');
			$table -> char('apellido1');
			$table -> char('apellido2');
			$table -> char('nombre1');
			$table -> char('nombre2');
			$table -> date('fechaNac');
			$table -> char('direccion');
			$table -> char('barrio');
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
		//
	}

}
