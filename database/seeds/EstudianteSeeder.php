<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
	class EstudianteSeeder extends Seeder {

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
					'type' => 'Estudiante',
					'password'=> \Hash::make('123456')
				));  
				DB::table('estudiantes')->insert(array (
				'codigo'		=>	$faker->unique()->ean8,
				'identificacion'=>	$faker->isbn10,
				'apellido1'		=>	$apellido1,
				'apellido2'		=>	$apellido2,
				'nombre1'		=>	$nombre1,
				'nombre2'		=>	$nombre2,
				'fechaNac'		=>	$faker->date($format = 'Y-m-d', $max = 'now'),
				'direccion'		=>	$faker->address,
				'barrio'		=>	$faker->city,
				'celular'		=>	$faker->e164PhoneNumber,
				'email'			=>	$email,
				'programa_id' 	=>  $faker->numberBetween($min = 1, $max = 3),
				'user_id'		=> 	$id
			));
			}
			
    	}
	}