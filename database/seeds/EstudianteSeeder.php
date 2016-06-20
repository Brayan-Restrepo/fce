<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
	class EstudianteSeeder extends Seeder {

		public function run(){
			$faker = Faker::create();
			for ($i=0; $i < 100 ; $i++) { 
				DB::table('estudiantes')->insert(array (
				'codigo'		=>	$faker->unique()->ean8,
				'identificacion'=>	$faker->isbn10,
				'apellido1'		=>	$faker->lastName,
				'apellido2'		=>	$faker->lastName,
				'nombre1'		=>	$faker->firstName,
				'nombre2'		=>	$faker->firstName,
				'fechaNac'		=>	$faker->date($format = 'Y-m-d', $max = 'now'),
				'direccion'		=>	$faker->address,
				'barrio'		=>	$faker->city,
				'celular'		=>	$faker->e164PhoneNumber,
				'email'			=>	$faker->unique()->email,
				'programa_id' 	=>  $faker->numberBetween($min = 1, $max = 3) 
			));
			}
			
    	}
	}