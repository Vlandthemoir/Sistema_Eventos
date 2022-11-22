@extends('layouts.admin')

@section('title,registro')

@push('styles')
	<link href="{{ asset('css/paquetes.css') }}" rel="stylesheet">
@endpush
@section('content')
			<div class="form-container">
				<form method="POST" action="{{ route('paquete.store') }}">
					@csrf
					<input type="text" autocomplete="off" placeholder="Nombre" id="nombre" name="nombre">
					<input type="text" autocomplete="off" placeholder="Descripcion" id="descripcion" name="descripcion">
					<input type="text" autocomplete="off" placeholder="Precio" id="precio" name="precio">
					<input type="text" autocomplete="off" placeholder="Foto" id="foto" name="foto">
					<button type="submit">Guardar</button>
				</form>
			</div>
			<div class="table-container">
				<table>
					<thead>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Precio</th>
					</thead>
					<tbody>
						@foreach ($datos as $item)
							<tr>
								<td>{{ $item->nombre }}</td>
								<td>{{ $item->descripcion }}</td>
								<td>{{ $item->precio }}</td>
								<td>
									<form action="{{ route("paquete.edit", $item->id) }}" method="GET">
										<button>
											<i class="fas fa-edit"></i>
											editar
										</button>
									</form>
								</td>
								<td>
									<form action="{{ route('paquete.destroy', $item->id) }}" method="POST">
										@csrf
										@method('DELETE')
										<button>
											<i class="fas fa-trash-alt"></i>
											eliminar
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
@endsection
