<?php

class HomeController extends BaseController {

	public function index()
	{
		if (Auth::check())
		{
		    return Redirect::to('dashboard');
		}
		
		$name = Session::get('message');
		if (isset($name)) {
			return View::make('home')->with('mensaje_error', 'Tus datos son incorrectos');
		}else{
			return View::make('home');
		}
	}
}
