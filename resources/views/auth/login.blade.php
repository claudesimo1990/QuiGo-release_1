@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="css/login.css">
@endsection

@section('content')

<div class="container top">
  <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Se connecter </h5>
            <form class="form-signin">

              <form method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Se souvenir de moi</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Se connecter</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> se connecter avec Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> se connecter avec Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
