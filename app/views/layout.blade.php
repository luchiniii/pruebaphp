<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>@yield('title')</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

		<!-- Optional theme -->
		<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">

		<!-- Latest compiled and minified JavaScript -->
	</head>

	<body cz-shortcut-listen="true">

		@yield('content')
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="{{ asset('bootstrap/js	/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/base.js') }}"></script>

	</body>
</html>