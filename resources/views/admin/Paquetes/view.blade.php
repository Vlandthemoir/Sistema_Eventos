@extends('layouts.app')

@push('styles')
	<link href="{{asset('css/Paquetes/view.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="form-container">
  <div class="title-container-form">
    <h1 class="title">Registro de paquetes</h1>
  </div>
				<form method="POST" action="{{ route('paquetes.store') }}" enctype="multipart/form-data">
					@csrf
					<input type="text" autocomplete="off" placeholder="Nombre" id="nombre" name="nombre">
					<input type="text" autocomplete="off" placeholder="Descripcion" id="descripcion" name="descripcion">
          <input type="text" autocomplete="off" placeholder="Precio" id="precio" name="precio">
					<button type="submit">Guardar</button>
				</form>
</div>
<div class="table-container">
  <div class="title-container-table">
    <h1 class="title">Paquetes registrados</h1>
  </div>
				<table>
					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Precio</th>
						<th colspan="3">Acciones</th>
					</thead>
					<tbody>
						@foreach ($datos as $item)
							<tr>
								<td>{{ $item->id }}</td>
								<td>{{ $item->nombre }}</td>
								<td>{{ $item->descripcion }}</td>
								<td>${{ $item->precio }}</td>
                <td>
									<form action="{{ route('paquetes.img', $item->id) }}" method="GET">
										<button>
											<i class="fas fa-image"></i>
											añadir fotos
										</button>
									</form>
								</td>
								<td>
									<form action="{{ route('paquetes.edit', $item->id) }}" method="GET">
										<button>
											<i class="fas fa-edit"></i>
											editar
										</button>
									</form>
								</td>
								<td>
									<form action="{{ route('paquetes.destroy', $item->id) }}" method="POST">
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
