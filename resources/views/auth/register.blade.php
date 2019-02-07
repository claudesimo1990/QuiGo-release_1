@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="css/register.css">
@endsection

@section('content')

<div class="container top">
  <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">S'enregistrer </h5>
            <form class="form-signin">

              <form method="POST" action="{{ route('register') }}">
                        @csrf

              <div class="form-label-group">
                <input type="text" id="nomdefamille" class="form-control{{ $errors->has('nomdefamille') ? ' is-invalid' : '' }}" name="nomdefamille" value="{{ old('nomdefamille') }}" placeholder="Votre Nom de Famille :" required autofocus>
                <label for="nomdefamille">Votre Nom de Famille : </label>
              </div>
              @if ($errors->has('nomdefamille'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nomdefamille') }}</strong>
                </span>  
              @endif
              <div class="form-label-group">
                <input type="text" id="prenom" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" placeholder="Votre Nom de Famille :" required autofocus>
                <label for="prenom">Votre Prenom : </label>
              </div>
              @if ($errors->has('prenom'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('prenom') }}</strong>
                </span>  
              @endif
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                <label for="inputEmail">Votre Email</label>
              </div>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                <label for="inputPassword">Mot de passe</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="confirmPass" class="form-control{{ $errors->has('confirmPass') ? ' is-invalid' : '' }}" placeholder="confirmPass" required>
                <label for="confirmPass">Confirmer votre Mot de passe</label>
              </div>
              @if ($errors->has('confirmPass'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('confirmPass') }}</strong>
                  </span>
              @endif

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">S'enregistrer</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> s'enregistrer avec Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> s'enregistrer avec Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
