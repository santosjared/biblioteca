@extends('bibliotecario.home')

@section('actividad')
<!-- Datos de persona -->
<div style="width: 100%;">
	<div class="col-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Ingresar Datos de la Persona Nueva</h4>
				{{ Form::open(array('route'=>'register','method'=>'post', 'name'=>'fPersona')) }}
				<!-- Datos de persona -->
				@csrf
				Cédula de Identidad: {{ Form::number('ci', '', array('placeholder'=>'Intro el numero de C.I.', 'required'=>true, 'min'=>1000000, 'max'=>99999999,'class'=>'form-control')) }}<br>
				{{ Form::label('p_apellido', 'Apellidos: ') }}
				{{ Form::text('apellido', '', ['placeholder'=>'Coloque sus Apellidos','class'=>'form-control'], array('id'=>'p_apellidos', 'min'=>3)) }}<br>
				{{ Form::label('nombre', 'Nombres: ') }}
				{{ Form::text('nombre', '', ['placeholder'=>'Coloque su Nombre','class'=>'form-control'], array('required'=>true)) }}<br>
				{{ Form::label('telefono', 'Telefono: ') }}
				{{ Form::number('telefono', '', ['placeholder'=>'Coloque su Telefono','class'=>'form-control']) }}<br>
				{{ Form::label('direccion', 'Direccion: ') }}
				{{ Form::text('direccion', '', ['placeholder'=>'Indique su direccion','class'=>'form-control']) }}<br>
				<!-- Fin persona -->

				<!-- Datos usuario -->
				{{Form::text('name','le',['hidden'])}}
				{{ Form::label('email', 'Correo electronico: ') }}
				{{ Form::email('email', '', ['placeholder'=>'Indique su correo electronico','class'=>'form-control']) }}<br>
				{{ Form::label('password', 'Contraseña: ') }}
				{{ Form::password('password', ['placeholder'=>'Indique su contraseña', 'required'=>true,'class'=>'form-control']) }}<br>
				<!-- Fin usuario -->
				{{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
				{{ Form::reset('Borrar',['class'=>'btn btn-warning']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

@endsection