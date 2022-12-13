<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Eventos </title>
		<link rel="stylesheet" href="{{ asset('css/bienvenido.css') }}">
	</head>
	<body>
		<div class="general-container">
			<div class="icon-container">
				<img class="icon" src="{{ asset('images/logo.png') }}" alt="">
			</div>
			<div class="title-container">
				<h1>ALPHA</h1>
				<h2>EVENTOS</h2>
			</div>
			@guest
			<div class="buttons-container">
				<a href="/home"  class="button" style="vertical-align:middle"><span><b>Continuar</b></span></a>
				<a href="{{ route('login.index')  }}" class="button" style="vertical-align:middle"><span><b>Iniciar Sesión</b></span></a>
			</div>
			@endguest
			@auth
			<div class="buttons-container">
				<a href="/home"  class="button" style="vertical-align:middle"><span><b>Continuar</b></span></a>
			</div>
			@endauth
		</div>
	</body>
</html>
