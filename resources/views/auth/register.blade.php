@extends('layouts.app')

@section('content')
<div style="margin-left: 10%;">
  <div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Registro Usuario</h4>
        <p class="card-description"> formulario usuario </p>
        <form class="forms-sample" method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombre" placeholder="Nombres">
          </div>
          <div class="form-group">
            <label for="apellidos">Apellios</label>
            <input type="text" class="form-control" id="exampleInputUsername1" name="apellido" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <label for="ci">C.I.</label>
            <input type="text" class="form-control" id="ci" name="ci" placeholder="CI">
          </div>
          <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
          </div>
          <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="password">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="confirme password">
          </div>
          <div class="form-group">
            <label for="name">Tipo Usuario</label>
            <select class="form-control" id="name" name="name">
              <option value="0">---select-----</option>
              <option value="bi">Blibliotecario</option>
              <option value="le">Lector</option>
            </select>
          </div>
          <div id="idUser"></div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="http://localhost:8000/login" class="btn btn-dark">Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="assets/js/select.js"></script>
@endsection