@extends('layout')

@section('title')
    Sección de administración
@stop

@section('content')

<div class="container">
	<div class="row text-center">
		<h1 class="">Sección de administración</h1>
		<a class="" href="{{ route('logout') }}">Salir</a>
	</div>
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4 form-group">
			{{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'id' => 'registerForm']) }}
				<h4 class="form-signin-heading">Por favor ingrese los datos para los usuarios</h4>

				<div class="row">
					<label for="first_name" class="sr-only">Nombres</label>
					<input type="text" id="first_name" name="first_name" class="form-control" placeholder="Nombres" required="" autofocus="">
				</div>

				<div class="row">
					<label for="last_name" class="sr-only">Apellidos</label>
					<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Apellidos" required="" autofocus="">
				</div>

				<div class="row">
					<label for="phone" class="sr-only">Teléfono</label>
					<input type="number" id="phone" name="phone" class="form-control" placeholder="Teléfono" required="" autofocus="">
				</div>

				<div class="row">
					<label for="brithday" class="sr-only">Fecha de nacimiento</label>
					<input type="date" id="brithday" name="brithday" class="form-control" placeholder="Fecha de nacimiento" required="" autofocus="">
				</div>
				<br>
				<button id="register_user" class="btn btn-lg btn-primary btn-block" type="button">Registrar</button>
			{{ Form::close() }}
		</div>
	</div>
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4 ">
			<h4>Lista de usuarios registrados</h4>
			<div class="lista">
				@if (isset($users))
					@foreach ($users as $user)
						<div class="contenedor_usuarios">
							<div class="row">
								<strong>nombres:</strong> {{ $user->first_name }}
							</div>
							<div class="row">
								<strong>Apellidos:</strong> {{ $user->last_name }}
							</div>
							<div class="row">
								<strong>Teléfono:</strong> {{ $user->phone }}
							</div>
							<div class="row">
								<strong>Fecha de nacimiento:</strong> {{ date("d F Y",strtotime($user->birthday)) }}
							</div>
							<div class="row">
								{{ Form::open(['route' => 'ajaxUser', 'method' => 'POST', 'role' => 'form', 'class' => 'registerForm']) }}
									<button class="editar" data-id="{{$user->id}}">Editar</button>
									<button class="borrar" data-id="{{$user->id}}">Borrar</button>
								{{ Form::close() }}
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>
@stop