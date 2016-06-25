<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
	class ProfesorSeeder extends Seeder {

	public function run(){
		$faker = Faker::create();
		for ($i=0; $i < 100 ; $i++) {

			$nombre1 = $faker->firstName;
			$nombre2 = $faker->firstName;
			$apellido1 = $faker->lastName;
			$apellido2 = $faker->lastName;
			$email = $faker->unique()->email;
			
			$id = DB::table('users')->insertGetId(array (
				'name'=> $nombre1.' '.$apellido1,
				'email' => $email,
				'type' => 'Secretaria',
				'password'=> \Hash::make('123456')
			));

			DB::table('profesores')->insert(array (
			'identificacion'=>	$faker->unique()->ean8,
			'apellido1'		=>	$apellido1,
			'apellido2'		=>	$apellido2,
			'nombre1'		=>	$nombre1,
			'nombre2'		=>	$nombre2,
			'celular'		=>	$faker->e164PhoneNumber,
			'fechaNac'		=>	$faker->date($format = 'Y-m-d', $max = 'now'),
			'pregrado'		=>	$faker->jobTitle,
			'especializacion'=>	$faker->jobTitle,
			'maestria'		=>	$faker->jobTitle,
			'doctorado'		=>	$faker->jobTitle,
			'programa_id'	=>	$faker->numberBetween($min = 1, $max = 3),
			'email' 		=>  $email,
			'user_id'		=>	$id
		));
		}
		
	}
}