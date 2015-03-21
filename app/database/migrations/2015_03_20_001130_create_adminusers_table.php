<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adminusers', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->string('user');
			$table->string('password');
			$table->rememberToken();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adminusers');
	}

}
