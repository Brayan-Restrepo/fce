<?php
use Illuminate\Database\Seeder;

	class UserTableSeeder extends Seeder {

		public function run(){
			DB::table('modalidades')->insert(array (
				'descripcion'=> 'Pasantía'	
			));
			DB::table('modalidades')->insert(array (
				'descripcion'=> 'EPI (Investigación)'	
			));
			DB::table('modalidades')->insert(array (
				'descripcion'=> 'EPS (Proyección Social)'	
			));
			DB::table('modalidades')->insert(array (
				'descripcion'=> 'Trabajo de Grado'	
			));
			DB::table('modalidades')->insert(array (
				'descripcion'=> 'Créditos en Postgrado'	
			));
			DB::table('modalidades')->insert(array (
				'descripcion'=> 'EVALUACION DE ENSAYO'	
			));

			DB::table('estadosTG')->insert(array (
				'estado'=> 'Propuesta a jurados'	
			));
			DB::table('estadosTG')->insert(array (
				'estado'=> 'Propuesta en Correcciones'	
			));
			DB::table('estadosTG')->insert(array (
				'estado'=> 'Aprobado por Jurados inicio de Informe Final'	
			));
			DB::table('estadosTG')->insert(array (
				'estado'=> 'Informe Final a Jurados'	
			));
			DB::table('estadosTG')->insert(array (
				'estado'=> 'Informe Final Correcciones'	
			));
			DB::table('estadosTG')->insert(array (
				'estado'=> 'Informe Final Aprobado enviado para sustentar'	
			));
			DB::table('estadosTG')->insert(array (
				'estado'=> 'Sustentado'	
			));
			DB::table('estadosTG')->insert(array (
				'estado'=> 'Rechazada Resol 007 de 2014'	
			));

			DB::table('users')->insert(array (
				'name'=> 'Ricardo Lindarte',
				'email' => 'admin@gmail.com',
				'type' => 'Admin',
				'password'=> \Hash::make('123456')
			));
			DB::table('users')->insert(array (
				'name'=> 'Ricardo Lindarte',
				'email' => 'Secretaria@gmail.com',
				'type' => 'Secretaria',
				'password'=> \Hash::make('123456')
			));
			DB::table('users')->insert(array (
				'name'=> 'Ricardo Lindarte',
				'email' => 'director@gmail.com',
				'type' => 'Director',
				'password'=> \Hash::make('123456')
			));
			DB::table('users')->insert(array (
				'name'=> 'Brayan Restrepo',
				'email' => 'docente@gmail.com',
				'type' => 'Docente',
				'password'=> \Hash::make('123456')
			));
			DB::table('users')->insert(array (
				'name'=> 'Brayan Restrepo',
				'email' => 'estudiante@gmail.com',
				'type' => 'Estudiante',
				'password'=> \Hash::make('123456')
			));
			DB::table('users')->insert(array (
				'name'=> 'Brayan Restrepo',
				'email' => 'brayan2293@gmail.com',
				'type' => 'Decano',
				'password'=> \Hash::make('123456')
			));
			DB::table('users')->insert(array (
				'name'=> 'Ricardo Lindarte',
				'email' => 'Ricardo@gmail.com',
				'type' => 'Decano',
				'password'=> \Hash::make('123456')
			));

			// ***************************
			// Programas
			// ***************************
			DB::table('programa')->insert(array (
				'id'=> 1,
				'nombre' => 'Economia'
			));
			DB::table('programa')->insert(array (
				'id'=> 2,
				'nombre' => 'Mercadeo'
			));
			DB::table('programa')->insert(array (
				'id'=> 3,
				'nombre' => 'Contaduria'
			));
    	}
	}