@extends('layouts.app')

@section('title,actualizar')

@push('styles')
	<link href="{{asset('css/Servicios/update.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="form-container">
  <div class="title-container-form">
    <h1 class="title">Actualizar servicio</h1>
  </div>
				<form method="POST" action="{{route('servicios.update',$servicios->id)}}">
					@csrf
          @method("PUT")
          <input type="text" autocomplete="off" placeholder="Nombre" id="nombre" name="nombre" value="{{$servicios->nombre}}">
					<input type="text" autocomplete="off" placeholder="Descripcion" id="descripcion" name="descripcion" value="{{$servicios->descripcion}}">
          <input type="text" autocomplete="off" placeholder="Precio" id="precio" name="precio" value="{{$servicios->precio}}">
					<button type="submit">Guardar</button>
				</form>
</div>
@endsection
