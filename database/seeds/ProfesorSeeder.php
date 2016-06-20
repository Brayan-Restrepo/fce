<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
	class ProfesorSeeder extends Seeder {

	public function run(){
		$faker = Faker::create();
		for ($i=0; $i < 100 ; $i++) { 
			DB::table('profesores')->insert(array (
			'identificacion'=>	$faker->unique()->ean8,
			'apellido1'		=>	$faker->lastName,
			'apellido2'		=>	$faker->lastName,
			'nombre1'		=>	$faker->firstName,
			'nombre2'		=>	$faker->firstName,
			'celular'		=>	$faker->e164PhoneNumber,
			'fechaNac'		=>	$faker->date($format = 'Y-m-d', $max = 'now'),
			'pregrado'		=>	$faker->jobTitle,
			'especializacion'=>	$faker->jobTitle,
			'maestria'		=>	$faker->jobTitle,
			'doctorado'		=>	$faker->jobTitle,
			'programa_id'	=>	$faker->numberBetween($min = 1, $max = 3),
			'email' 	=>  $faker->unique()->email
		));
		}
		
	}
}