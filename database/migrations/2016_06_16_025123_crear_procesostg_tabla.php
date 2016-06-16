<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearProcesostgTabla extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('procesoTG', function(Blueprint $table){
			$table -> increments('id');
			$table -> text('decision');
			
			$table->integer('trabajosGrado_id')->unsigned();
			$table->foreign('trabajosGrado_id')
                  ->references('id')->on('trabajosGrado')
                  ->onDelete('cascade');

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
