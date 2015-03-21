<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'id'         => 1,
			'first_name' => 'Luis',
			'last_name'  => 'Palomá',
			'phone'      => 3042006328,
			'birthday'   => date('1987-05-10'),
		]);
		User::create([
			'id'         => 2,
			'first_name' => 'Juliana',
			'last_name'  => 'Moreno',
			'phone'      => 3042006329,
			'birthday'   => date('1987-05-11'),
		]);
		User::create([
			'id'         => 3,
			'first_name' => 'Juan',
			'last_name'  => 'Meza',
			'phone'      => 3042009145,
			'birthday'   => date('1987-05-12'),
		]);
	}

}