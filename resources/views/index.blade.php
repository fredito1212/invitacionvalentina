<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#BC8887" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bautizo de Valentina Bravo Andrade - Sabado 18 Marzo 2023</title>

    <meta property="og:title" content="Bautizo de Valentina Bravo Andrade - Sabado 18 Marzo 2023">
    <meta property="og:description" content="Bautizo de Valentina Bravo Andrade - Sabado 18 Marzo 2023">
    <meta property="og:locale" content="es_MX" />
    <meta property="og:image" content="{{ asset('/image/invitacionMisa.jpeg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Bulma Version 0.8.x-->
    {{-- <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/menikah.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.countdown.css') }}" />
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/f33271c8b6.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="{{ asset('js/jquery.coundown.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}" />
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
    <!-- Begin Preloader -->
    <div class="preloader-wrapper">
      <div class="preloader">
        <img src="{{ asset('image/favicon.png') }}" alt="Flower" />
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Begin Header -->
    <div class="header-wrapper" id="home">
      <!-- Begin Hero -->
      <section class="hero is-large">

        @include('hero-menu-mobile')

        @include('hero')

        @include('hero-menu')

      </section>
      <!-- End Hero -->
    </div>
    <!-- End Header -->

    <!-- Begin Main Content -->
    <div class="main-content">

        @include('invitacion')

        @include('fecha')

        @include('ubicacion')

        @include('fotos')

        @if (isset($codigo))
            @if ($codigo)
                @include('deseado')
            @else
                @include('nodeseado')
            @endif
        @else
            @include('asistencia')
        @endif

    </div>
    <!-- End Main Content -->

    <!-- Begin Footer -->
    <div class="footer">
      <div class="container">
        <a href="https://github.com/daengdoang/daeng-sherly-menikah" class="has-vertically-align">
          <p class="has-vertically-align">2023 &copy Fredito1212</p>
        </a>
        <a href="https://bulma.io" class="has-vertically-align">
          <img src="https://bulma.io/images/made-with-bulma.png" alt="Made with Bulma">
        </a>
      </div>
    </div>
    <!-- End Footer -->
    <div class="modal" id="modalfotos">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Modal title</p>
            <button class="delete" aria-label="close"></button>
          </header>
          <section class="modal-card-body">
            <!-- Content ... -->
          </section>
          <footer class="modal-card-foot">
            <button class="button is-success">Save changes</button>
            <button class="button">Cancel</button>
          </footer>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/menikah.js') }}"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: "ease-out",
        duration: 800,
      });

        @if ($message = Session::get('success'))
            Swal.fire({
                icon: 'success',
                title: 'Invitación confirmada!',
            })
        @endif

    </script>
  </body>
</html>
