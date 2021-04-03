<div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">

    <a class="navbar-brand" href="index.html">
      <img alt="Pipeline" src="assets\img\logo.svg">
    </a>
    <div class="d-flex align-items-center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-block d-lg-none ml-2">
        <div class="dropdown">

            @auth
            @if (Route::has('register'))
            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img alt="Image" src="assets\img\avatar-male-4.jpg" class="avatar">
            </a>
            @endif
            <span class="name">{{ Auth::user()->name }}</span>
            <style>.name {
                color: white;
                font-weight: bold;
            }</style>
            @else

            <a href="{{ route('login') }}">{{ __('Login') }}</a>
           &nbsp;
            @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
           @endauth


          <div class="dropdown-menu dropdown-menu-right">
            <a href="{{ route('settings') }}" class="dropdown-item">Account Settings</a>
            <a href="{{ route('logout') }}" class="dropdown-item"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse flex-column" id="navbar-collapse">
      <ul class="navbar-nav d-lg-block">

        <li class="nav-item">

          <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>

        </li>

        <li class="nav-item">

           <a class="nav-link" href="#">Chat</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#">Documentation</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#">Changelog</a>

        </li>

      </ul>
      <hr>
      <div class="d-none d-lg-block w-100">
        <span class="text-small text-muted">Quick Links</span>
        <ul class="nav nav-small flex-column mt-2">
          <li class="nav-item">
            <a href="nav-side-team.html" class="nav-link">Team Overview</a>
          </li>
          <li class="nav-item">
            <a href="nav-side-project.html" class="nav-link">Projects</a>
          </li>
          <li class="nav-item">
            <a href="nav-side-task.html" class="nav-link">Tasks</a>
          </li>
        </ul>
        <hr>
      </div>
      <div>
        <form>
          <div class="input-group input-group-dark input-group-round">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="material-icons">search</i>
              </span>
            </div>
            <input type="search" class="form-control form-control-dark" placeholder="Search" aria-label="Search app">
          </div>
        </form>
        <div class="dropdown mt-2">
          <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="newContentButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Add New
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Team</a>
            <a class="dropdown-item" href="#">Project</a>
            <a class="dropdown-item" href="#">Task</a>
          </div>
        </div>
      </div>
    </div>
    <div class="d-none d-lg-block">
      <div class="dropup">
            @auth
            @if (Route::has('register'))
            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img alt="Image" src="assets\img\avatar-male-4.jpg" class="avatar">
            </a>
            @endif
            <span class="name">{{ Auth::user()->name }}</span>
            <style>.name {
                color: white;
                font-weight: bold;
            }</style>
            @else

            <a href="{{ route('login') }}">{{ __('Login') }}</a>
            &nbsp;
            @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
           @endauth
        <div class="dropdown-menu">
          <a href="{{ route('settings') }}" class="dropdown-item">Account Settings</a>
          <a href="{{ route('logout') }}" class="dropdown-item"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
       </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
       </form></a>
        </div>
      </div>
    </div>

  </div>
