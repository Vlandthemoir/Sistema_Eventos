@extends('layouts.admin')

@section('title,actualizar')

@push('styles')
	<link href="{{ asset('css/paquetes.css') }}" rel="stylesheet">
@endpush
@section('content')
			<div class="form-container">
				<form method="POST" action="{{ route('paquete.update', $paquete->id) }}">
					@csrf
					@method("PUT")
					<input type="text" autocomplete="off" placeholder="Nombre" id="nombre" name="nombre">
					<input type="text" autocomplete="off" placeholder="Descripcion" id="descripcion" name="descripcion">
					<input type="text" autocomplete="off" placeholder="Precio" id="precio" name="precio">
					<input type="text" autocomplete="off" placeholder="Foto" id="foto" name="foto">
					<button type="submit">Guardar</button>
				</form>
			</div>

@endsection
