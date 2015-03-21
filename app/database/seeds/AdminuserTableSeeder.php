<?php


class AdminuserTableSeeder extends Seeder {

	public function run()
	{
		Adminuser::create([
			'id'       => 1,
			'user'     => 'admin',
			'password' => Hash::make(123456)
		]);
	}

}