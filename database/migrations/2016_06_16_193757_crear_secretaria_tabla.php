<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearSecretariaTabla extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('secretaria', function(Blueprint $table){
			$table -> increments('id');
			$table -> char('identificacion');
			$table -> char('apellido1');
			$table -> char('apellido2');
			$table -> char('nombre1');
			$table -> char('nombre2');
			$table -> char('celular');
			$table -> date('fechaNac');
			$table -> string('email');

			$table->integer('programa_id')->unsigned();
			$table->foreign('programa_id')
                  ->references('id')->on('programa')
                  ->onDelete('cascade');

            $table->integer('user_id')->unsigned();
			$table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');

			$table->timestamps();

		});	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('secretaria');
	}

}
