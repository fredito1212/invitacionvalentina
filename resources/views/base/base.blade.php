<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#BC8887" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('titulo')</title>

    <meta property="og:title" content="Bautizo de Valentina Bravo Andrade - Sabado 18 Marzo 2023">
    <meta property="og:description" content="Bautizo de Valentina Bravo Andrade - Sabado 18 Marzo 2023">
    <meta property="og:locale" content="es_MX" />
    <meta property="og:image" content="{{ asset('/image/invitacion.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@creativebulma/bulma-tooltip@1.2.0/dist/bulma-tooltip.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/menikah.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.countdown.css') }}" />
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f33271c8b6.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript">

    <script src="{{ asset('js/jquery.coundown.js') }}"></script>
    <link rel="icon" type="{{ asset('image/png') }}" href="image/favicon.png" />
    <!-- Begin Script for Countdown -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23064379-20');
    </script>
    <!-- Begin Script for Countdown -->

    <!-- Github Button -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>

  <body>
    <nav class="navbar is-danger" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{!! route('index') !!}">
                <img src="{{ asset('image/favicon.png') }}" width="28" height="28">
            </a>

          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="{!! route('invitaciones') !!}">
              <i class="fas fa-envelope"></i>&nbsp;&nbsp;Invitaciones
            </a>

            <a class="navbar-item" href="{!! route('fotos') !!}">
              <i class="fas fa-camera"></i>&nbsp;&nbsp;Fotografias
            </a>

            <a class="navbar-item" href="{!! route('asistencia') !!}">
              <i class="fas fa-check"></i>&nbsp;&nbsp;Llegada al evento
            </a>

          </div>

          <div class="navbar-end">

          </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="notification has-background-danger has-text-white">
            @yield('titulo')
        </div>
    </div>



    <div class="container mt-6">
        <div class="card">
            <header class="card-header">
                <div class="card-header-icon">
                    @yield('cardBotones')
                </div>
            </header>
            <div class="card-content">
                <div class="content">
                    @yield('cardContenido')
                </div>
            </div>
        </div>
    </div>

    @yield('extra')

    <!-- End Main Content -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });

        });
    </script>
    @yield('extraJS')
  </body>
</html>
