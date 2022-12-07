<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Eventos </title>
		<link rel="stylesheet" href="{{ asset('css/login.css') }}">
		<script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="general-container">
			<div class="form-container">
				<div class="icon-container">
					<img id="icon" src="{{ asset('images/logo.png') }}">
				</div>
				<form method="POST" action="/login">
					@csrf
					<input autocomplete="off" type="text" placeholder="Usuario" id="name" name="name" required>
					<input type="password" placeholder="Contraseña" id="password" name="password" required>
					<div><a href="/register" ><b>¿No tienes una cuenta?</b></a></div>
					<button type="submit">Iniciar</button>
				</form>
			</div>
		</div>
	</body>
</html>
