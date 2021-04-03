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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <title>Antfarm - PMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A project management/collaboaration system">
    <link href="assets\img\favicon.ico" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="assets\css\theme.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body>

    <div class="layout layout-nav-side">

      @include('layouts.sidemenu')

      <div class="main-container">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9">
              <section class="py-4 py-lg-5">
                <div class="mb-3 d-flex">
                  <img alt="Pipeline" src="assets\img\logo-color.svg" class="avatar avatar-lg mr-1">
                  <div>
                    <span class="badge badge-success">1.3.0</span>
                  </div>
                </div>
                <h1 class="display-4 mb-3">A project management & collaboaration web app</h1>
                <p class="lead">
                    Antfarm is a project management and collaboration web app built with PHP/laravel that leverages ethereum smart contracts
                </p>
                <div class="d-flex">
                  <div class="dropdown mr-3">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Explore Pages</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="pages-app.html">App Pages</a>
                      <a class="dropdown-item" href="pages-utility.html">Utility Pages</a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">View Components</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="components-bootstrap.html">Bootstrap Components</a>
                      <a class="dropdown-item" href="components-pipeline.html">Pipeline Components</a>
                    </div>
                  </div>
                </div>
              </section>
              <section class="py-4 py-lg-5">
                <div class="carousel slide carousel-fade mb-5" data-ride="carousel">
                  <div class="carousel-inner overflow-visible">

                    <div class="carousel-item shadow-lg active">
                      <a href="pages-app.html">
                        <img alt="Image" src="assets\img\overview\nav-side-team.png" class="img-fluid rounded border">
                      </a>
                    </div>

                    <div class="carousel-item shadow-lg ">
                      <a href="pages-app.html">
                        <img alt="Image" src="assets\img\overview\nav-side-project.png" class="img-fluid rounded border">
                      </a>
                    </div>

                    <div class="carousel-item shadow-lg ">
                      <a href="pages-app.html">
                        <img alt="Image" src="assets\img\overview\nav-side-task.png" class="img-fluid rounded border">
                      </a>
                    </div>

                    <div class="carousel-item shadow-lg ">
                      <a href="pages-app.html">
                        <img alt="Image" src="assets\img\overview\nav-side-kanban-board.png" class="img-fluid rounded border">
                      </a>
                    </div>

                    <div class="carousel-item shadow-lg ">
                      <a href="pages-app.html">
                        <img alt="Image" src="assets\img\overview\nav-side-chat.png" class="img-fluid rounded border">
                      </a>
                    </div>

                    <div class="carousel-item shadow-lg ">
                      <a href="pages-app.html">
                        <img alt="Image" src="assets\img\overview\nav-side-user.png" class="img-fluid rounded border">
                      </a>
                    </div>

                  </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                  <i class="material-icons text-primary mr-3 h1">supervised_user_circle</i>
                  <h2 class="h1 mb-0">Project Management Pages</h2>
                </div>
                <p class="lead">
                  Pipeline makes building project management interfaces simple with pages for teams, projects, tasks, kanban boards and more.
                </p>
                <a href="pages-app.html" class="mr-3">App Pages</a><a href="pages-utility.html" class="mr-3">Utility Pages</a>
              </section>
              <section class="py-4 py-lg-5">
                <div class="row mb-5">
                  <div class="carousel slide carousel-fade col-6" data-ride="carousel">
                    <div class="carousel-inner overflow-visible">

                      <div class="carousel-item shadow-lg active">
                        <img alt="Image" src="assets\img\components\activity.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\avatar.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\avatar-list.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\card-kanban.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\card-note.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\card-project.png" class="img-fluid rounded border">
                      </div>

                    </div>
                  </div>
                  <div class="carousel slide carousel-fade col-6" data-ride="carousel">
                    <div class="carousel-inner overflow-visible">

                      <div class="carousel-item shadow-lg active">
                        <img alt="Image" src="assets\img\components\card-team.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\card-task.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\card-list.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\chat-item.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\chat-module.png" class="img-fluid rounded border">
                      </div>

                      <div class="carousel-item shadow-lg ">
                        <img alt="Image" src="assets\img\components\checklist.png" class="img-fluid rounded border">
                      </div>

                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                  <i class="material-icons text-primary mr-3 h1">widgets</i>
                  <h2 class="h1 mb-0">Modular Components</h2>
                </div>
                <p class="lead">
                  Build feature-rich pages with everything Bootstrap 4.5.2 has to offer and extend functionality with Pipelines suite of stylish custom components.
                </p>
                <a href="components-pipeline.html" class="mr-3">Pipeline Components</a><a href="components-bootstrap.html" class="mr-3">Bootstrap Components</a>
              </section>
              <section class="py-4 py-lg-5">
                <div class="row mb-5">
                  <div class="col-4">
                    <img alt="Image" src="assets\img\layouts\layout-nav-side.svg" class="shadow-lg img-fluid" style="border-radius:.75rem">
                  </div>
                  <div class="col-4">
                    <img alt="Image" src="assets\img\layouts\layout-nav-top.svg" class="shadow-lg img-fluid" style="border-radius:.75rem">
                  </div>
                  <div class="col-4">
                    <img alt="Image" src="assets\img\layouts\layout-nav-top-sidebar.svg" class="shadow-lg img-fluid" style="border-radius:.75rem">
                  </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                  <i class="material-icons text-primary mr-3 h1">view_quilt</i>
                  <h2 class="h1 mb-0">Flexible Layouts</h2>
                </div>
                <p class="lead">
                  Pipeline offers three distinct layouts to suit a variety of content types. Layouts are fully responsive and scale elegantally for different devices and screen sizes.
                </p>
                <a href="pages-layouts.html">Explore Layouts</a>
              </section>
              <section class="py-4 py-lg-5">
                <div class="row mb-5">
                  <div class="col-3">
                    <img alt="Bootstrap" src="assets\img\logo-bootstrap.svg" class="img-fluid rounded shadow-lg">
                  </div>
                  <div class="col-3">
                    <img alt="Gulp" src="assets\img\logo-gulp.svg" class="img-fluid rounded shadow-lg">
                  </div>
                  <div class="col-3">
                    <img alt="SASS" src="assets\img\logo-sass.svg" class="img-fluid rounded shadow-lg">
                  </div>
                  <div class="col-3">
                    <img alt="NPM" src="assets\img\logo-npm.svg" class="img-fluid rounded shadow-lg">
                  </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                  <i class="material-icons text-primary mr-3 h1">build</i>
                  <h2 class="h1 mb-0">Familiar Tooling</h2>
                </div>
                <p class="lead">
                  Pipeline employs industry-standard development tools with an intuitive workflow designed to get you up and runnning faster.
                </p>
                <a href="documentation\index.html" class="mr-3">View Documentation</a>
              </section>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets\js\jquery.min.js"></script>
    <script type="text/javascript" src="assets\js\popper.min.js"></script>
    <script type="text/javascript" src="assets\js\bootstrap.js"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- Autosize - resizes textarea inputs as user types -->
    <script type="text/javascript" src="assets\js\autosize.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets\js\flatpickr.min.js"></script>
    <!-- Prism - displays formatted code boxes -->
    <script type="text/javascript" src="assets\js\prism.js"></script>
    <!-- Shopify Draggable - drag, drop and sort items on page -->
    <script type="text/javascript" src="assets\js\draggable.bundle.legacy.js"></script>
    <script type="text/javascript" src="assets\js\swap-animation.js"></script>
    <!-- Dropzone - drag and drop files onto the page for uploading -->
    <script type="text/javascript" src="assets\js\dropzone.min.js"></script>
    <!-- List.js - filter list elements -->
    <script type="text/javascript" src="assets\js\list.min.js"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets\js\theme.js"></script>

    <!-- This appears in the demo only - demonstrates different layouts -->
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

      </div>
    </div>

  </body>

</html>




