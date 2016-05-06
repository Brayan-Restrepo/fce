<?php
use Illuminate\Database\Seeder;
	class UserTableSeeder extends Seeder {

		public function run(){

			DB::table('users')->insert(array (
				'name'=> 'Brayan Restrepo',
				'email' => 'brayan2293@gmail.com',
				'password'=> \Hash::make('123456')
			));
    	}
	}