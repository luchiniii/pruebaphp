<?php
/**
* 
*/
class DashboardController extends BaseController
{
	public function index()
	{
		if (Auth::check())
		{
			$users = User::all();
		    return View::make('dashboard')->with('users', $users);
		}else{
		    return View::make('home')->with('mensaje_error', 'Debe Estar loggeado para entrar al administrador.');
		}
	}

	public function registerUser()
	{
		if(Request::ajax()){
			$inputData = Input::only(['first_name', 'last_name', 'phone', 'brithday']);
			
			$rules        = array(
				'first_name' => 'required|min:2|max:100',
				'last_name'  => 'required|min:2|max:100',
				'phone'      => 'required|numeric',
				'brithday'   => 'required|date',
			);
			
			$messages     = array(
				'required' => 'El campo :attribute es obligatorio.',
				'min'      => 'El campo :attribute no puede tener menos de :min carácteres.',
				'max'      => 'El campo :attribute no puede tener más de :min carácteres.',
				'numeric'  => 'El teléfono ingresado ya debe ser numerico.',
				'date'     => 'debe ingresar una fecha válida'
			);
			
			$validation   = Validator::make($inputData, $rules, $messages);

			if ($validation->fails())
			{
			    $messages = $validation->messages();
			    $failed = $validation->failed();
			    return json_encode(['messages' => $messages, 'failed' => $failed]);
			}else if ($validation->passes()){
				User::create($inputData);
		    	return json_encode(['messages' => 'exito']);
			}
		}else{
			Redirect::to('dashboard');
		}
	}

	public function ajaxUser()
	{
		if (Request::ajax()) {
			$inputData = Input::all();

			echo "<pre>";
			print_r($inputData);
			echo "</pre>";
		}
	}
}