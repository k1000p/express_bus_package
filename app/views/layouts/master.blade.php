<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		@section('titulo')
			Cursos de Laravel 4
		@show
	</title>
	@section('cabecera')
		<link rel="stylesheet" type="text/css" href="estilo.css">
	@show
</head>
<body>

	@yield('contenido')

	<footer>
		@yield('pie')
	</footer>

</body>
</html>