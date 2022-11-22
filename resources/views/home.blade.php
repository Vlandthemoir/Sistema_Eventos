@extends('layouts.app')

@section('title,Home')

@push('styles')
	<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@section('content')
				@if(auth()->check()) 
					<div class="title"><h1>Proximamente a la venta gracias por registrarte</h1></div>
				@else
					<div class="title"><h1>Registrate para comprar</h1></div>
				@endif
	<div class="table">
	@foreach ($datos as $item)
			<div class="card">
				<div class="face front">
					<img src="{{ $item->foto  }}" alt="">
					<h3>{{ $item->nombre }}</h3>
				</div>
				<div class="face back">
					<h3>Descripcion</h3>
					<p>
						<div class="box">
							{{ $item->descripcion}}
						</div>
					</p>
					<h4>{{ $item->precio  }}</h4>
				</div>
			</div>
	@endforeach
	</div>
@endsection
