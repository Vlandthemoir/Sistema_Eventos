<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Eventos </title>
		<link rel="stylesheet" href="{{ asset('css/register.css') }}">
		<script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="general-container">
			<div class="form-container">
				<div class="icon-container">
					<img id="icon" src="{{ asset('images/logo.png') }}">
				</div>
				<form method="POST" action="">
					@csrf
					<input type="text" autocomplete="off" placeholder="Usuario" id="nombre" name="nombre">
					<input type="email" autocomplete="off" placeholder="Correo Electronico" id="correo" name="correo">
					<input type="password" placeholder="Contraseña" id="contraseña" name="contraseña">
					
					<button type="submit">Registrarse</button>
				</form>
			</div>
		</div>
	</body>
</html>
