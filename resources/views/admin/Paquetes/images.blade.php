
@extends('layouts.app')

@push('styles')
	<link href="{{asset('css/Paquetes/images.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="form-container">
  <div class="title-container-form">
    <h1 class="title">Registro de fotos</h1>
  </div>
				<form method="POST" action="{{route('paquetes.storeimg')}}" enctype="multipart/form-data">
					@csrf
          <div><h2>id del paquete</h2></div>
          <input type="text" value="{{ $datos_paquete->id }}" id="id_paquete" name="id_paquete" >
					<input type="text" autocomplete="off" placeholder="Nombre" id="nombre" name="nombre">
					<input type="text" autocomplete="off" placeholder="Descripcion" id="descripcion" name="descripcion">
					<input type="file" id="foto" name="foto">
					<button type="submit">Guardar</button>
				</form>

</div>

<div class="table">
  <div class="title-container-table">
    <h1 class="title">Fotos del paquete</h1>
  </div>
  @foreach ($datos_foto as $item)
  <div class="card">
  <div class="face front">
    <img src="{{ asset($item->url) }}" alt="">
    <h3>{{ $item->nombre }}</h3>
  </div>
  <div class="face back">
    <h3>Descripcion</h3>
    <p>
        <div class="box">
          {{ $item->descripcion }}
        </div>
        <form action="{{ route('paquetes.deleteimg', $item->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button>
            <i class="fas fa-delete"></i>
            Eliminar
          </button>
        </form>
      </p>
  </div>
</div>
@endforeach
</div>
@endsection