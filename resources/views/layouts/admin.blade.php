
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title') - Laravels sistema </title>
		@stack('styles')
		<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
		<script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="navbar">
				<div><a href="{{ route('admin.index') }}"><i class="fas fa-user-tie"></i><b>Gerente</b> bienvenido</a></div>
				<div><a href="{{ route('paquete.index')  }}">Paquetes</a></div>
				<a href="{{ route('login.destroy')  }}"><i id="close"  class="fa-solid fa-power-off"></i></a>
		</div>
		<div class="general-container">
			@yield('content')
		</div>
	</body>
</html>
