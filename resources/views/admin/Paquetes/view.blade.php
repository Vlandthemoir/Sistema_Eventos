@extends('layouts.app')

@push('styles')
	<link href="{{asset('css/Usuarios/view.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="form-container">
  <div class="title-container-form">
    <h1 class="title">Registro de paquetes</h1>
  </div>
				<form method="POST" action="{{ route('usuarios.store') }}">
					@csrf
					<input type="text" autocomplete="off" placeholder="Nombre" id="nombre" name="nombre">
					<input type="text" autocomplete="off" placeholder="Descripcion" id="descripcion" name="descripcion">
          <input type="text" autocomplete="off" placeholder="Precio" id="precio" name="precio">
          <input type="file" placeholder="Fotos" id="fotos" name="fotos">
					<button type="submit">Guardar</button>
				</form>
</div>
<div class="table-container">
  <div class="title-container-table">
    <h1 class="title">Usuarios registrados</h1>
  </div>
				<table>
					<thead>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Contraseña</th>
            <th>Rol</th>
					</thead>
					<tbody>
						@foreach ($datos as $item)
							<tr>
								<td>{{ $item->nombre }}</td>
								<td>{{ $item->correo }}</td>
								<td>{{ $item->contraseña }}</td>
                <td>{{ $item->rol }}</td>
								<td>
									<form action="{{ route('usuarios.edit', $item->id) }}" method="GET">
										<button>
											<i class="fas fa-edit"></i>
											editar
										</button>
									</form>
								</td>
								<td>
									<form action="{{ route('usuarios.destroy', $item->id) }}" method="POST">
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
