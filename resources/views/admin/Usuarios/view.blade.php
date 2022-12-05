@extends('layouts.app')



@push('styles')
	<link href="{{asset('css/Usuarios/view.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="form-container">
  <div class="title-container-form">
    <h1 class="title">Registro de usuarios</h1>
  </div>
				<form method="POST" action="{{ route('usuarios.store') }}">
					@csrf
					<input type="text" autocomplete="off" placeholder="Nombre" id="name" name="name">
					<input type="email" autocomplete="off" placeholder="Correo" id="email" name="email">
					<input type="password" autocomplete="off" placeholder="Contraseña" id="password" name="password">
          <div class="radio">
          <label>Rol del usuario</label>
          <label class="container">Cliente
            <input type="checkbox" name="rol" value="Cliente">
            <span class="checkmark"></span>
          </label>
          <label class="container">Empleado
            <input type="checkbox" name="rol" value="Empleado">
            <span class="checkmark"></span>
          </label>
          <label class="container">Administrador
            <input type="checkbox" name="rol" value="Administrador">
            <span class="checkmark"></span>
          </label>
          </div>
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
								<td>{{ $item->name }}</td>
								<td>{{ $item->email }}</td>
								<td>{{ $item->password }}</td>
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
