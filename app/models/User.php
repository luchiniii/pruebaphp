<?php

class User extends \Eloquent {
	protected $fillable = ['first_name', 'last_name', 'phone', 'birthday'];

	public static function addUser($value='')
	{
		# code...
	}
}
