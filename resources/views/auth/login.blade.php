@extends('layouts.app')

@section('content')
<div class="container-scroller">
<div class="container-fluid page-body-wrapper full-page-wrapper">
  <div class="row w-100 m-0">
    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
      <div class="card col-lg-4 mx-auto">
        <div class="card-body px-5 py-5">
          <h3 class="card-title text-left mb-3">Login</h3>
          <form form method="POST" action="{{ route('login') }}">
          @csrf
            <div class="form-group">
              <label>Username or email </label>
              <input type="text" class="form-control p_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Password </label>
              <input type="password" class="form-control p_input @error('password') is-invalid @enderror" id="password" name="password" autocomplete="current-password" placeholder="Password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group d-flex align-items-center justify-content-between">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me </label>
              </div>
              @if (Route::has('password.request'))
              <a href="{{ route('password.request')}}" class="forgot-pass" >Forgot password</a>
              @endif
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
            </div>
            <div class="d-flex">
              <button class="btn btn-facebook mr-2 col">
                <i class="mdi mdi-facebook"></i> Facebook </button>
              <button class="btn btn-google col">
                <i class="mdi mdi-google-plus"></i> Google plus </button>
            </div>
            <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
          </form>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- row ends -->
</div>
<!-- page-body-wrapper ends -->
</div>@endsection
