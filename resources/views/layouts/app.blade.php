<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title') - Laravels sistema </title>
		@stack('styles')
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="navbar">
			@if(auth()->check() == false)
				<span><i class="fas fa-user-secret"></i><b> Anonimo</b></span>
			@else
				@if(auth()->user()->rol == "Cliente") 
					<span><i class="fas fa-user"></i>Bienvenido <b>{{ auth()->user()->name }}</b></span>
					<span class="menu"><a href=""><i class="fa-regular fa-calendar-plus"></i><b>Crear Eventos</b></a></span>
					<span class="menu"><a href=""><i class="fa-regular fa-calendar-days"></i><b>Mis Eventos</b></a></span>
					<span class="menu"><a href=""><i class="fa-regular fa-address-card"></i><b>Perfil</b></a></span>
					<div class="icon-container" >
						<a href="{{ route('login.destroy')  }}"><i id="salir"  class="fa-solid fa-power-off"></i></a>
					</div>
				@else
					@if(auth()->user()->rol == "Empleado")
						<span><i class="fa-solid fa-user-gear"></i>Bienvenido <b>{{ auth()->user()->name }}</b></span>
						<span class="menu"><a href=""><i class="fa-regular fa-calendar"></i><b>Eventos</b></a></span>
						<span class="menu"><a href=""><i class="fa-regular fa-address-card"></i><b>Perfil</b></a></span>
						<div class="icon-container" >
							<a href="{{ route('login.destroy')  }}"><i id="salir"  class="fa-solid fa-power-off"></i></a>
						</div>
					@else
						@if(auth()->user()->rol == "Administrador")
							<span><i class="fa-solid fa-user-tie"></i>Bienvenido <b>{{ auth()->user()->name }}</b></span>
							<span class="menu"><a href=""><i class="fa-solid fa-users-gear"></i><b>Usuarios</b></a></span>
							<span class="menu"><a href=""><i class="fa-solid fa-toolbox"></i><b>Paquetes</b></a></span>
							<span class="menu"><a href=""><i class="fa-solid fa-wrench"></i><b>Servicios</b></a></span>
							<span class="menu"><a href=""><i class="fa-regular fa-calendar-days"></i><b>Eventos</b></a></span>
							<span class="menu"><a href=""><i class="fa-regular fa-address-card"></i><b>Perfil</b></a></span>
							<div class="icon-container" >
								<a href="{{ route('login.destroy')  }}"><i id="salir"  class="fa-solid fa-power-off"></i></a>
							</div>
						@else
							<span><i class="fas fa-user-secret"></i><b> Anonimo</b></span>
						@endif
					@endif
				@endif
			@endif
		</div>
		<div class="general-container">
			@yield('content')
		</div>
	</body>
</html>
