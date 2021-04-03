<!doctype html>
<html lang="en">

  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-14"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-52115242-14');
    </script>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A project management Bootstrap theme by Medium Rare">
    <link href="assets\img\favicon.ico" rel="icon" type="image/x-icon">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="assets\css\theme.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets\toastr\build\toastr.css" rel="stylesheet" type="text/css" media="all">

  </head>

  <body>

    <div class="layout layout-nav-side">

        @include('layouts.sidemenu')

      <div class="main-container">

        @yield('section')

      </div>

    </div>
<!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets\js\jquery.min.js"></script>
    <script type="text/javascript" src="assets\js\popper.min.js"></script>
    <script type="text/javascript" src="assets\js\bootstrap.js"></script>
    <script type="text/javascript" src="assets\toastr\toastr.js"></script>



    <script type="text/javascript" src="assets\js\autosize.min.js"></script>
    <script type="text/javascript" src="assets\js\flatpickr.min.js"></script>
    <script type="text/javascript" src="assets\js\prism.js"></script>
    <script type="text/javascript" src="assets\js\draggable.bundle.legacy.js"></script>
    <script type="text/javascript" src="assets\js\swap-animation.js"></script>
    <script type="text/javascript" src="assets\js\dropzone.min.js"></script>
    <script type="text/javascript" src="assets\js\list.min.js"></script>
    <script type="text/javascript" src="assets\js\theme.js"></script>

    <script>

        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
        @endif



      </script>


    <style type="text/css">
      .layout-switcher{ position: fixed; bottom: 0; left: 50%; transform: translateX(-50%) translateY(73px); color: #fff; transition: all .35s ease; background: #343a40; border-radius: .25rem .25rem 0 0; padding: .75rem; z-index: 999; }
            .layout-switcher:not(:hover){ opacity: .95; }
            .layout-switcher:not(:focus){ cursor: pointer; }
            .layout-switcher-head{ font-size: .75rem; font-weight: 600; text-transform: uppercase; }
            .layout-switcher-head i{ font-size: 1.25rem; transition: all .35s ease; }
            .layout-switcher-body{ transition: all .55s ease; opacity: 0; padding-top: .75rem; transform: translateY(24px); text-align: center; }
            .layout-switcher:focus{ opacity: 1; outline: none; transform: translateX(-50%) translateY(0); }
            .layout-switcher:focus .layout-switcher-head i{ transform: rotateZ(180deg); opacity: 0; }
            .layout-switcher:focus .layout-switcher-body{ opacity: 1; transform: translateY(0); }
            .layout-switcher-option{ width: 72px; padding: .25rem; border: 2px solid rgba(255,255,255,0); display: inline-block; border-radius: 4px; transition: all .35s ease; }
            .layout-switcher-option.active{ border-color: #007bff; }
            .layout-switcher-icon{ width: 100%; border-radius: 4px; }
            .layout-switcher-body:hover .layout-switcher-option:not(:hover){ opacity: .5; transform: scale(0.9); }
            @media all and (max-width: 990px){ .layout-switcher{ min-width: 250px; } }
            @media all and (max-width: 767px){ .layout-switcher{ display: none; } }
    </style>
    <div class="layout-switcher" tabindex="1">
      <div class="layout-switcher-head d-flex justify-content-between">
        <span>Select Layout</span>
        <i class="material-icons">arrow_drop_up</i>
      </div>
      <div class="layout-switcher-body">

        <div class="layout-switcher-option active">
          <a href="nav-side-user.html">
            <img alt="Navigation Side" src="assets\img\layouts\layout-nav-side.svg" class="layout-switcher-icon">
          </a>
        </div>

        <div class="layout-switcher-option">
          <a href="nav-top-user.html">
            <img alt="Navigation Top" src="assets\img\layouts\layout-nav-top.svg" class="layout-switcher-icon">
          </a>
        </div>

        <div class="layout-switcher-option">
          <a href="nav-top-sidebar-user.html">
            <img alt="Content Sidebar" src="assets\img\layouts\layout-nav-top-sidebar.svg" class="layout-switcher-icon">
          </a>
        </div>

      </div>
    </div>

  </body>

</html>
