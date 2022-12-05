@extends('layouts.app')

@section('title,actualizar')

@push('styles')
	<link href="{{asset('css/Usuarios/update.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="form-container">
  <div class="title-container-form">
    <h1 class="title">Editar usuario</h1>
  </div>
				<form method="POST" action="{{route('usuarios.update',$user->id)}}">
					@csrf
          @method("PUT")
					<input type="text" autocomplete="off" placeholder="Nombre" id="name" name="name" value="{{$user->name}}">
					<input type="email" autocomplete="off" placeholder="Correo" id="email" name="email" value="{{$user->email}}">
					<input type="password" autocomplete="off" placeholder="Contraseña" id="password" name="password" value="{{$user->password}}">
          <div class="radio">
          <label>Rol del usuario</label>
          <label class="container">Cliente
            <input type="checkbox" name="rol" value="Cliente">
            <span class="checkmark"></span>
          </label>
          <label class="container">Empleado
            <input type="checkbox" name="rol" value="Empleado">
            <span class="checkmark"></span>
          </label>
          <label class="container">Administrador
            <input type="checkbox" name="rol" value="Administrador">
            <span class="checkmark"></span>
          </label>
          </div>
					<button type="submit">Guardar</button>
				</form>
</div>
@endsection
