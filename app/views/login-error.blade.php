@extends('layout')

@section('title')
    Error en loggeo
@stop

@section('content')

<div class="container">
	<div class="row">
		<h1 class="text-center">Error al intentar loggeo</h1>
	</div>
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4">
			<h4>Ha ocurrido un error en el proceso de loggeo</h4>
			<p>Por favor verifique su nombre de usuario y contraseña;</p>
		</div>
	</div>
</div>
@stop