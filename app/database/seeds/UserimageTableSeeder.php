<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserimageTableSeeder extends Seeder {

	public function run()
	{
		Userimage::create([
			'id'      => 1,
			'path'    => '/hola/',
			'user_id' => 1
		]);
	}

}