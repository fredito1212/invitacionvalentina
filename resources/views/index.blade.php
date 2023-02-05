<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#BC8887" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bautizo de Valentina Bravo Andrade - Sabado 18 Marzo 2023</title>

    <meta property="og:title" content="Bautizo de Valentina Bravo Andrade - Sabado 18 Marzo 2023">
    <meta property="og:description" content="Bautizo de Valentina Bravo Andrade - Sabado 18 Marzo 2023">
    <meta property="og:locale" content="es_MX" />
    <meta property="og:image" content="{{ asset('/image/invitacion.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/menikah.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.countdown.css') }}" />
    <script src="https://kit.fontawesome.com/f33271c8b6.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="{{ asset('js/jquery.coundown.js') }}"></script>
    <link rel="icon" type="{{ asset('image/png') }}" href="image/favicon.png" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23064379-20"></script>
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
        <!-- Begin Mobile Nav -->
        <nav class="navbar is-transparent is-hidden-desktop">
          <!-- Begin Burger Menu -->
          <div class="navbar-brand is-fixed-top">
            <div class="navbar-burger burger" data-target="mobile-nav">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <!-- End Burger Menu -->
          <div id="mobile-nav" class="navbar-menu">
            <div class="navbar-end">
              <div class="navbar-item">
                <a class="navbar-item" href="#Waktu">
                    <i class="fa-solid fa-calendar-day fa-flip" style="--fa-animation-duration: 3s;"></i> Fecha
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#lokasi">
                    <i class="fa-solid fa-location-dot fa-shake"></i> Ubicación
                </a>
              </div>

              <div class="navbar-item">
                <a class="navbar-item" href="#tentang-sherly-daeng">
                    <i class="fa-solid fa-heart fa-beat"></i> Mis fotos
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#rsvp">
                    <i class="fa-solid fa-envelope fa-bounce"></i> Invitación
                </a>
              </div>
            </div>
          </div>
        </nav>
        <!-- End Mobile Nav -->
        <!-- Begin Hero Content-->
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="subtitle">Mi Bautizo</h1>
            <h2 class="title">Aislin Valentina<br>Bravo Andrade</h2>
            <h4 class="subtitle tempatwaktu">

                Sabado 18 Marzo 2023
            </h4>
          </div>
          <!-- Start Countdown -->
          <div>
            <ul id="hitungmundur" >
              <li><span class="days">00</span><p class="days_text">Días</p></li>
              <li class="separator">:</li>
              <li><span class="hours">00</span><p class="hours_text">Horas</p></li>
              <li class="separator">:</li>
              <li><span class="minutes">00</span><p class="minutes_text">Minutos</p></li>
              <li class="separator">:</li>
              <li><span class="seconds">00</span><p class="seconds_text">Segundos</p></li>
            </ul>
            <div class="spasi">
            </div>
            <script type="text/javascript">
              var now = new Date();
              var day = now.getDate();
              var month = now.getMonth() + 1;
              var year = now.getFullYear() + 1;
              var harih = '03/18/2023 13:00:00';

              $('#hitungmundur').countdown({
                date: harih, // TODO Date format: 07/27/2017 17:00:00
                offset: +7, // TODO Your Timezone Offset
                day: 'Día',
                days: 'Días'
              }, function () {
                // Aqui va la alerta de que es el día
                // alert('Done!');
              });
            </script>
          </div>
          <!-- End Countdown -->
        </div>
        <!-- End Hero Content-->
        <!-- Begin Hero Menu -->
        <div class="hero-foot ">
          <div class="hero-foot--wrapper">
            <div class="columns">
              <div class="column is-12 hero-menu-desktop has-text-centered">
                <ul>
                  <li class="is-active">
                    <a href="#home"><i class="fa-solid fa-envelope fa-bounce"></i> Invitación</a>
                  </li>
                  <li>
                    <a href="#Waktu"><i class="fa-solid fa-calendar-day fa-flip" style="--fa-animation-duration: 3s;"></i> Fecha</a>
                  </li>
                  <li>
                    <a href="#lokasi"><i class="fa-solid fa-location-dot fa-shake"></i> Ubicación</a>
                  </li>
                  <li>
                    <a href="#tentang-sherly-daeng"><i class="fa-solid fa-heart fa-beat"></i> Mis fotos</a>
                  </li>

                  <li>
                    <a href="#rsvp"><i class="fa-solid fa-check-double fa-fade"></i> Asistencia</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Hero Menu -->
      </section>
      <!-- End Hero -->
    </div>
    <!-- End Header -->

    <!-- Begin Main Content -->
    <div class="main-content">
    <!-- Begin regular-section-->
     <section class="section-light no-padding-top regular-section has-text-centered has-vertically-aligned-content" id="regular-section">

        <div data-aos="fade-up" data-aos-easing="linear">
          <img src="image/cruz-religiosa-floral-acuarela-sobre-fondo-blanco_82758-385.png" class="bismillah has-text-centered" alt="Bismillahirrahmaanirrahiim">
        </div>
        <span class="space40px"></span>
        <p class="bodytext" data-aos="fade-up" data-aos-easing="linear">
            Doy Gracias a Dios nuestro señor por darme el don de la vida.
            <br>A mis padres por esperarme con amor y recibirme con alegría.
            <br>A mis padrinos por guiarme en el camino de la luz.
            <br>Y a ti por acompañarme en uno de los días mas importantes de mi vida.
            <br>Familia y amigos, estoy lista para recibir mi nombre.
        </p>
        <span class="space40px"></span>
        <hr>
        <span class="space40px"></span>
        <p class="bodytext" data-aos="fade-up" data-aos-easing="linear">
            En este hermoso día en que Dios llega a mí por primera vez,
            <br />desearía poder compartir mi alegría con ustedes y junto a mis padres:
        </p>

        <span class="space40px"></span>
        <span class="space40px"></span>

        <div data-aos="fade-up" data-aos-easing="linear">
          <div class="nama-lengkap" >
            Sergio Andrade Cortez
          </div>
          <div class="ampersand">&</div>
          <div class="nama-lengkap">
            Zaida Elizabeth Bravo Mendez
          </div>

        </div>
        <span class="space40px"></span>
        <div data-aos="fade-up" data-aos-easing="linear">
          <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
        </div>
        <span class="space40px"></span>
        <span class="space40px"></span>
      </section>
      <!-- End regular-section-->

      <!-- Begin Waktu Section -->
      <section class="section-dark" id="Waktu">
        <div class="container">

          <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
            <h1 class="title has-text-centered section-title"><i class="fa-solid fa-calendar-day fa-flip" style="--fa-animation-duration: 3s;"></i> Fecha</h1>
          </div>
          <div class="columns is-multiline" data-aos="fade-up" data-aos-easing="linear">
            <div
              class="column is-4 has-vertically-aligned-content">

              <p class="is-larger has-text-centered">
                  <div class="waktu tanggal-hari has-text-centered">Sabado</div>
                  <div class="waktu tanggal-angka has-text-centered">18</div>
                  <div class="waktu tanggal-bulan has-text-centered">Marzo 2023</div>
              </p>
            </div>
            <div class="column is-4 has-vertically-aligned-content">
              <p class="waktu is-larger has-text-centered">
                Misa:
                <br>
                <strong>13:00 Hrs</strong>
              </p>
            </div>
            <div class="column is-4 has-vertically-aligned-content">
              <h1 class="waktu is-larger has-text-centered">
                Celebración:
                <br>
                <strong>15:00  - 21:00 Hrs</strong>
              </h1>
            </div>
          </div>
        </div>
        <div class="space40px"></div>
        <div class="main-content has-text-centered" data-aos="fade-up" data-aos-easing="linear">
            <a class="button has-tooltip btn-cta" data-tooltip="Add to Calendar" target="_blank" data-aos="zoom-in" target="_blank" href="https://calendar.google.com/calendar/event?action=TEMPLATE&amp;tmeid=MWhhOW4zZjg3M2c4M2JsdXFqZHJlZHRwbW0gNWM1YTJjMGU2YzkzYmE0MTRhNDUyYmMyZDhiOWU2ODYwNTU1M2VjOTYxNmVjODdiODc3YTNkMmUyODVhOTJmYkBn&amp;tmsrc=5c5a2c0e6c93ba414a452bc2d8b9e68605553ec9616ec87b877a3d2e285a92fb%40group.calendar.google.com">
                <i class="far fa-calendar-plus"></i>
                &nbsp;&nbsp;Google Calendar
            </a>
        </div>
      </section>
      <!-- End Waktu Content -->

      <!-- Begin Lokasi Section -->
      <section class="section-darker" id="lokasi" >
        <div class="container">
          <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
            <h1 class="title has-text-centered section-title"><i class="fa-solid fa-location-dot fa-shake"></i> Ubicación</h1>
            <p class="tempat is-larger has-text-centered">
              <strong>Parroquia de San Juan Bautista</strong>
              <br>
              Francisco Nieto Rodríguez s/n,
              <br>
              Tenencia Morelos, 58341 Morelos, Mich.
              <br>
            </p>
          </div>
          <div class="section-map" data-aos="fade-up" data-aos-easing="linear">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.4742105242763!2d-101.23761359999999!3d19.6497641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0c647a272d0b%3A0x8c4e170081424704!2sParroquia%20de%20San%20Juan%20Bautista!5e0!3m2!1ses-419!2smx!4v1675545993806!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="space40px"></div>
          <div class="has-text-centered" data-aos="fade-up" data-aos-easing="linear">
            <a href="https://www.google.com/maps/dir//Parroquia+de+San+Juan+Bautista,+Francisco+Nieto+Rodríguez+s%2Fn,+Tenencia+Morelos,+58341+Morelos,+Mich./@19.6497641,-101.2376136,17z/data=!4m16!1m6!3m5!1s0x842d0c647a272d0b:0x8c4e170081424704!2sParroquia+de+San+Juan+Bautista!8m2!3d19.6497743!4d-101.2376136!4m8!1m0!1m5!1m1!1s0x842d0c647a272d0b:0x8c4e170081424704!2m2!1d-101.2376136!2d19.6497743!3e3?hl=es-MX" class="button btn-cta" target="_blank" data-aos="zoom-in">
              <i class="fas fa-directions"></i>
              &nbsp;&nbsp;Google Maps
            </a>
          </div>
        </div>
      </section>
      <!-- End Lokasi Content -->

      <!-- Begin Tentang Sherly and Daeng -->
      <section class="section-light regular-section is-fullheight" id="tentang-sherly-daeng">
        <div class="container">
          <div class="columns is-multiline">
          <div class="column has-text-centered is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear"><i class="fa-solid fa-heart fa-beat"></i> Mis fotos</h1>

            <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
                <h1 class="title has-text-centered section-title">Proximamente</h1>
            </div>

        {{-- <!-- IMAGES -->
        <div class=" tile">
          <div class="tile is-ancestor">
          <div class="tile is-parent">
            <article class="tile is-child foto1 notification foto1" data-aos="fade-up" data-aos-easing="linear">
              <div class="content">
                <p class="title-foto">November 2018</p>
                <p class="subtitle-foto">
                  Pertama kali saling kenal di <a href="https://cashbac.com" target="_blank">Cashbac</a>
                </p>
              </div>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child notification foto2" data-aos="fade-up" data-aos-easing="linear">
              <div class="content">
                <p class="title-foto">
                  Desember 2018 - Februari 2019
                </p>
                <p class="subtitle-foto">
                  Satu kantor, satu divisi, dan posisi tempat duduk saling membelakangi.
                </p>
              </div>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child notification foto3" data-aos="fade-up" data-aos-easing="linear">
              <div class="content">
                <p class="title-foto">
                  Maret 2019
                </p>
                <p class="subtitle-foto">
                  Cerita cinta dimulai
                </p>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="space24px"></div>
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <article class="tile is-child notification foto6" data-aos="fade-up" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto">Juni 2019</p>
              <p class="subtitle-foto">Pertemuan 2 keluarga</p>
            </div>
          </article>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification foto4" data-aos="fade-up" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto">Desember 2019</p>
              <p class="subtitle-foto">Lamaran</p>
            </div>
          </article>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification foto5" data-aos="fade-up" data-aos-easing="linear">
            <div class="content">
              <p class="title-foto">Maret 2020</p>
              <p class="subtitle-foto">Menikah</p>
            </div>
          </article>
        </div>
      </div> --}}
          <!-- IMAGES -->
          <div class="space40px"></div>
            <div data-aos="fade-up" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-vertically-align" alt="~~~">
            </div>
            <div class="space40px"></div>
            <div class="space40px"></div>

          </div>
        </div>
      </section>
      <!-- End Tentang Sherly dan Daeng -->

      <!-- Begin RSVP Content -->
      <section class="section-dark contact" id="rsvp">
        <div class="container">
          <div class="columns is-multiline">
            <div class="column is-12 prolog">
              <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear"><i class="fa-solid fa-check-double fa-fade"></i> Asistencia</h1>
            </div>
            <div class="column is-12 prolog has-text-centered" data-aos="fade-up" data-aos-easing="linear">
              <p class="h2 subtitle">
                Es un honor y una felicidad para nosotros
                <br>
                que aceptes la invitación a está ceremonia tan importante
                <br>
                <br>
                Si pudieras asistir esperamos tu confirmación
                <br>
                <br>
                Si no es posible asistir a nuestra celebración, está bien,
                <br>
                esperamos verte muy pronto
                <br>
                <br>
                Información:
                <br>En la celebración, proporcionaremos desinfectante para manos
                <br>y controles de temperatura corporal.
                </p>

              <a href="https://api.whatsapp.com/send?phone=4431346878&text=Hola%20Zaida,%20quiero%20asistir%20al%20bautizo%20de%20Valentina&source=&data=" class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
                <i class="fab fa-whatsapp"></i>
                &nbsp;&nbsp;Zaida Elizabeth
              </a>



              <a href="https://api.whatsapp.com/send?phone=4431016294&text=Hola%20Sergio,%20quiero%20asistir%20al%20bautizo%20de%20Valentina&source=&data=" class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
                <i class="fab fa-whatsapp"></i>
                &nbsp;&nbsp; Sergio
              </a >
              <div class="space40px"></div>

              <div class="space40px"></div>
              <div data-aos="fade-up" data-aos-easing="linear">
                <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
              </div>
              <div class="space40px"></div>
              <p class="h2 subtitle" data-aos="fade-up" data-aos-easing="linear">
                Familia Bravo Andrade
                {{-- <br>
                <a class="instagram":" href="https://instagram.com/nengchely" target="_blank" alt="Instagram Sherly">
                  <i class="fab fa-instagram"></i> @nengchely
                </a>
                &nbsp
                <a class="instagram" href="https://instagram.com/daengdoang" target="_blank" alt="Instagram Daeng">
                  <i class="fab fa-instagram"></i> @daengdoang
                </a> --}}
              </p>

            </div>

         </div>
        </div>
      </section>
      <!-- End RSVP Content -->
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
    </script>
  </body>
</html>
