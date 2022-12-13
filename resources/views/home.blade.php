@extends('layouts.app')

@section('title,Home')

@push('styles')
	<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="body">
	<a class="a">BIENVENIDO</a>
</div>
@endsection
