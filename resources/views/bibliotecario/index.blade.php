@extends('bibliotecario.home')
@section('titulo')
@parent
- Lista de personas
@endsection
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">

@section('actividad')
<div class="row">
	<div class="col-14 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Lista de Lectores</h4>
				{{ Html::link(route('persona_nueva'), '+Agregar Nueva Lector',['class'=>'btn btn-success']) }}
				<div class="table-responsive">
					<table class="table">
						<thead class="theadN">
							<tr>
								<th>Nro.</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>C.I.</th>
								<th>Telefono</th>
								<th>Direccion</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0; ?>
							@foreach ($lectores as $lector)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $lector->persona->nombre }}</td>
								<td>{{ $lector->persona->apellidos }}</td>
								<td>{{ $lector->persona->ci }}</td>
								<td>{{ $lector->persona->telefono }}</td>
								<td>{{ $lector->persona->direccion }}</td>
								<td>
									{{ Html::link(route('persona_editar', ['id'=>$lector->persona->id]), 'Editar',['class'=>'btn btn-primary']) }}
									{{ Html::link(route('persona_eliminar', ['id'=>$lector->persona->id]), 'Eliminar',['class'=>'btn btn-danger']) }}
								</td>

							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection