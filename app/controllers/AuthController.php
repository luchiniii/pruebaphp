<?php
/**
* 
*/
class AuthController extends BaseController
{
	public function postLogin()
	{
		$login_data = array(
			'user'  => Input::get('user'),
			'password' => Input::get('password'),
		);


		if(Auth::attempt($login_data))
		{
			return Redirect::route('register');
		}else{
			return Redirect::to('/')->with('message', 'Login Failed');;
		}
	}

	public function logOut()
	{
		Auth::logout();
	    return Redirect::to('/');
	}
}