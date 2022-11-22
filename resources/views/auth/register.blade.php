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
					<i id="icon" class="fas fa-user-circle"></i>
				</div>
				<form method="POST" action="">
					@csrf
					<input type="text" autocomplete="off" placeholder="Usuario" id="name" name="name">
					<input type="email" autocomplete="off" placeholder="Correo Electronico" id="email" name="email">
					<input type="password" placeholder="Contraseña" id="password" name="password">
					<input type="password" placeholder="Confirmar contraseña" id="password_confirmation" name="password_confirmation">
					<button type="submit">Registrarse</button>
				</form>
			</div>
		</div>
	</body>
</html>
