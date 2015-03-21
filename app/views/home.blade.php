@extends('layout')

@section('title')
    Ingreso a la plataforma
@stop

@section('content')

<div class="container">
	<div class="row">
		<h1 class="text-center">Login del programa</h1>
	</div>
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4">
			{{ Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => 'form-signin']) }}
				<h4 class="form-signin-heading">Por favor ingrese sus datos</h4>
				@if (isset($mensaje_error))
					{{ $mensaje_error; }}
				@endif
				<label for="user" class="sr-only">Usuario</label>
				<input type="text" id="user" name="user" class="form-control" placeholder="Usuario" required="" autofocus="">
				<label for="password" class="sr-only">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="remember-me" class="remember-me"> Recordarme
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop