@extends('layouts.admin')

@section('title,Home')

@push('styles')
	<link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
@endpush
@section('content')
	<div class="container-title">
	<h1 class="title">Bienvenido al panel de administracion</h1>
	</div>
@endsection
