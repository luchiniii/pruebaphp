<?php
/**
* 
*/
class UserController extends BaseController
{
	
	public function registerUser()
	{
		if(Request::ajax()){
			$inputData = Input::all();

			$registerData = array(
				'first_name' =>    Input::get('first_name'),
				'last_name'  =>    Input::get('last_name'),
				'phone'      =>    Input::get('phone'),
				'brithday'   =>    Input::get('brithday')
			);
			
			$rules        = array(
				'first_name' => 'required|min:2|max:100',
				'last_name'  => 'required|min:2|max:100',
				'phone'      => 'required|numeric|max:100',
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

			if ($validator->fails())
			{
			    $messages = $validator->messages();
			    $failed = $validator->failed();
			    return json_encode(['messages' => $messages, 'failed' => $failed]);
			}else if ($validator->passes()){
				User::create($inputData);
		    	return json_encode(['messages' => 'exito']);
			}
		}else{
			Redirect::to('dashboard');
		}
	}
}