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
            <h1 class="card-title text-center"><strong>Verifier votre Boite Email</strong></h1>
            <form class="form-signin">

                @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection