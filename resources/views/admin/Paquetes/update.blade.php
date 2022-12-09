@extends('layouts.app')

@section('title,actualizar')

@push('styles')
	<link href="{{asset('css/Paquetes/update.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="form-container">
  <div class="title-container-form">
    <h1 class="title">Actualizar paquete</h1>
  </div>
				<form method="POST" action="{{route('paquetes.update',$paquetes->id)}}">
					@csrf
          @method("PUT")
          <input type="text" autocomplete="off" placeholder="Nombre" id="nombre" name="nombre" value="{{$paquetes->nombre}}">
					<input type="text" autocomplete="off" placeholder="Descripcion" id="descripcion" name="descripcion" value="{{$paquetes->descripcion}}">
          <input type="text" autocomplete="off" placeholder="Precio" id="precio" name="precio" value="{{$paquetes->precio}}">
					<button type="submit">Guardar</button>
				</form>
</div>
@endsection
