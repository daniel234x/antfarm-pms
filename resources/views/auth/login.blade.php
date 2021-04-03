@extends('layouts.auth')
@section('title', 'Antfarm - Login')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 col-md-7">
        <div class="text-center">
          <h1 class="h2">Welcome Back &#x1f44b;</h1>
          <p class="lead">Log in to your account to continue</p>
          <form method="POST" action="{{ route('login') }}">
              @csrf
            <div class="form-group">
              <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email Address" name="email"value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              @if (Route::has('password.request'))
                <small><a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                </small>
              @endif
              </div>
            </div>
            <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
              Log in
            </button>
            <small>Don't have an account yet? <a href="{{ route('register') }}">Create one</a>
            </small>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection

