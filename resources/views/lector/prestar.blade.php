@extends('lector.home')

@section('actividad')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{$user->persona->nombre}} {{$user->persona->apellidos}}</h3>
            <h4 class="card-title">Reserva Libro</h4>
            <p class="card-title">{{$libro->titulo}}</p>
            <form class="forms-sample"  method="POST" action="{{route('guardar_prestamo')}}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="inicio">Fecha Inicio</label>
                    <input type="datetime-local" class="form-control" id="inicio" name="inicio" value="<?php echo date('Y-m-d H:i:s')?>">
                </div>
                <div class="form-group">
                    <label for="fin">Fecha Devolucion</label>
                    <input type="datetime-local" class="form-control" id="fin" name="fin" value="<?php echo date('Y-m-d H:i:s')?>">
                </div>
                <input type="number" value="{{$libro->id}}" name="id" hidden>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="{{route('home')}}">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection