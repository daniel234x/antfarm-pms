@extends('layouts.auth')
@section('title', 'Antfarm - Sign Up')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 col-md-7">
        <div class="text-center">
          <h1 class="h2">Antfarm | SignUp</h1>
          <p class="lead">Start doing things for free, in an instant</p>
          <button class="btn btn-lg btn-block btn-primary">
            <img alt="Google" src="assets\img\logo-google.svg" class="rounded align-top mr-2">Continue with Google
          </button>
          <hr>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label class="reg"><strong>Full name:</strong></label>
                <style>
                    .reg {
                        float: left;
                    }
                </style>
                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Your name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            <div class="form-group">
                <label class="reg"><strong>Email address:</strong></label>
              <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="name" autofocus>
              @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label class="reg"><strong>Job Title:</strong></label>
                <select class="form-control" id="job" name="job">
                    <option>UI/UX designer</option>
                    <option>Frontend Developer</option>
                    <option>Backend Developer</option>
                    <option>Cloud Engineer</option>
                    <option>Smart contract Developer</option>
                    <option>Blockchain developer</option>
                    <option>System Administrator</option>
                    <option>Database Engineer</option>
                    <option>iOS developer</option>
                    <option>Android Developer</option>
                    <option>Product Manager</option>
                    <option>QA Engineer</option>
                    <option>CyberSecurity Analyst</option>
                    <option>Data Scientist</option>
                    <option>AI developer</option>
                    <option>AI researcher</option>
                  </select>
              </div>
            <div class="form-group">
                <label class="reg"><strong>Bio :</strong></label>
              {!!
                Form::textarea('bio', @old('bio',$data->bio),array('class' => 'form-control','id'=>'bio', 'rows' => '4','placeholder'=>__('Tell us a little about yourself')))
            !!}
            <div class="text-left">
            <small>Max. 300 characters</small>
            </div>
              </div>
            <div class="form-group">
              <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
              <div class="text-left">
                <small>Your password should be at least 8 characters</small>
                @error('password')
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
                <input class="form-control" id="password-confirm" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password">
              </div>
            <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
              Create account
            </button>
            <small>Already have an account ? <a href="{{ route('login') }}">Login</a>
            </br>
            <small>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
