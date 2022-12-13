@extends('layouts.app')

@section('title,Home')

@push('styles')
	<link href="{{ asset('css/Anonimo/view.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="general-container">
  <div class="table">
		@foreach ($datos as $item)
    <div class="card">
          <div class="face front">
            <img src="{{ asset($item->url) }}" alt="">
            <h3>{{$item->nombre}}</h3>
          </div>
          <div class="face back">
            <h3>Details</h3>
            <p>
                <div class="box">
									{{$item->descripcion}}
                </div>
								<div class="box">
									${{$item->precio}}
                </div>
              </p>
          </div>
        </div>
				@endforeach
  </div>
</div>
@endsection
