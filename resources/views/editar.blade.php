@extends('master')

@section('body')
<div style="width: 100%;">
	<div class="col-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Ingresar Datos de la Persona Nueva</h4>

				{{ Form::open(array('route'=>['persona_actualizar', 'id'=>$persona->id], 'method'=>'post', 'name'=>'fPersona')) }}
				<!-- Datos de persona -->
				Cédula de Identidad: {{Form::text('ci',$persona->ci)  }}<br>
				Nombres: {{Form::text('nombre',$persona->nombre)  }}<br>
				Apellidos: {{Form::text('apellido',$persona->apellidos)  }}<br>
				{{ Form::label('telefono', 'Telefono: ')}}
				{{ Form::number('telefono', $persona->telefono ) }}<br>
				{{ Form ::label('direccion', 'Direccion: ') }}
				{{ Form::text('direccion', $persona->direccion ) }}
				<!-- Fin persona -->
				<br>
				{{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
				{{ Form::reset('Borrar',['class'=>'btn btn-warning']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

@endsection