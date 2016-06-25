<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearEstudiantesPrograma extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::table('estudiantes', function ($table) {
		    $table->integer('programa_id')->unsigned();
		    $table->foreign('programa_id')->references('id')->on('programa')->onDelete('cascade');

		    $table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
