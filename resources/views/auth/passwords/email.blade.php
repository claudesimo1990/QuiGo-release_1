@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/css/passOublie.css">
@endsection

@section('content')

<div class="container top">
  <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h1 class="card-title text-center"><strong>Entrer votre Adresse Email valide</strong></h1>
            <form class="form-signin">

              <form method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email address">
                <label for="inputEmail">Email address</label>
              </div>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
