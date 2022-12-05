@extends('layouts.app')

@section('title,Home')

@push('styles')
	<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@section('content')

@auth
	<div class="title"><h1>Proximamente a la venta gracias por registrarte</h1></div>
@endauth

@guest
<div class="title"><h1>Registrate para comprar</h1></div>
@endguest






	<div class="table">
	</div>
@endsection
