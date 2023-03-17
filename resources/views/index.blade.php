<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#BC8887" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bautizo de Valentina Andrade Bravo - Sabado 18 Marzo 2023</title>

    <meta property="og:title" content="Bautizo de Valentina Andrade Bravo - Sabado 18 Marzo 2023">
    <meta property="og:description" content="Bautizo de Valentina Andrade Bravo - Sabado 18 Marzo 2023">
    <meta property="og:locale" content="es_MX" />
    <meta property="og:image" content="{{ asset('/image/invitacionMisa.jpeg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Bulma Version 0.8.x-->
    {{-- <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/menikah.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.countdown.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/loading.min.css') }}" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.theme.default.min.css') }}" />
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/f33271c8b6.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.coundown.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}" />
    <!-- Begin Script for Countdown -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
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
        <div class="modal" id="modalcarousel">
            <div class="modal-background"></div>
            <div class="modal-content" id='contenido'>
                <div id="owl-demo" class="owl-carousel owl-theme">

                </div>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
        </div>
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
    @if (isset($datos))
        <div class="modal" id="modalfotos">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Sube tus fotos</p>
                    <button class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <form action="{{ $datos->codigo }}/cargaFotos" method="post" id="form-fotos"
                        enctype="multipart/form-data">
                        @csrf
                        <div id="file-upload" class="file is-centered is-boxed is-large is-success has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="archivos[]" id="archivos"
                                    multiple="multiple" accept="image/*" onchange="validateFileType()">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Selecciona tus archivos
                                    </span>
                                </span>
                                <span class="file-name"></span>
                            </label>
                        </div>
                        <div class="mt-4">
                            <p style="font-size:12px;"><strong  class="has-text-danger">
                                NOTA: Las fotografías compartidas serán públicas en este sitio bajo el nombre del invitado, ten cuidado con el contenido que compartiras.
                            </strong></p>
                        </div>
                </section>
                <footer class="modal-card-foot">
                    <a class="button is-success" onclick="validateFileType()"><i
                            class="fas fa-upload"></i>&nbsp;&nbsp;Subir fotos</a>
                    <button class="button">Cancelar</button>
                </footer>
                </form>
            </div>
        </div>
    @endif


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/menikah.js') }}"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script> --}}
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        @if (isset($datos) && !$datos->confirmacion)
            Swal.fire({
                title: 'Confirmar asistencia',
                text: "Recuerda confirmar tu asistencia para ver toda la información. ¿Deseas confirmar ahora?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ir a confirmar',
                cancelButtonText: 'No, en otro momento'
            }).then((result) => {
                if(result.value === true){
                    var element = document.getElementById("rsvp");
                    element.scrollIntoView();
                    // $.scrollTo($('#rsvp'), 1000);
                }
            });
        @endif

        AOS.init({
            easing: "ease-out",
            duration: 800,
        });

        @if ($message = Session::get('success'))
            Swal.fire({
                icon: 'success',
                title: '{{ $message }}',
            })
        @endif

        document.addEventListener('DOMContentLoaded', () => {
            // Functions to open and close a modal
            function openModal($el) {
                $el.classList.add('is-active');
            }

            function closeModal($el) {
                $el.classList.remove('is-active');
            }

            function closeAllModals() {
                (document.querySelectorAll('.modal') || []).forEach(($modal) => {
                    closeModal($modal);
                });
            }

            // Add a click event on buttons to open a specific modal
            (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
                const modal = $trigger.dataset.target;
                const $target = document.getElementById(modal);

                $trigger.addEventListener('click', () => {
                    openModal($target);
                });
            });

            // Add a click event on various child elements to close the parent modal
            (document.querySelectorAll(
                '.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || [])
            .forEach(($close) => {
                const $target = $close.closest('.modal');

                $close.addEventListener('click', () => {
                    closeModal($target);
                });
            });

            // Add a keyboard event to close all modals
            document.addEventListener('keydown', (event) => {
                const e = event || window.event;

                if (e.keyCode === 27) { // Escape key
                    closeAllModals();
                }
            });
        });

        @if ( isset($datos->codigo) )
        // Para fileinput
        const fileInput = document.querySelector('#file-upload input[type=file]');
        fileInput.onchange = () => {
            if (fileInput.files.length > 0) {
                const fileName = document.querySelector('#file-upload .file-name');
                fileName.textContent = fileInput.files.length + " archivos seleccionados";
            }
        }

        @endif

        function validateFileType() {
            let ban = 1;
            const fileInput = document.querySelector('#file-upload input[type=file]');
            if (fileInput.files.length > 0) {
                for (let index = 0; index < fileInput.files.length; index++) {
                    const element = fileInput.files[index];
                    var fileName = element.name;
                    var idxDot = fileName.lastIndexOf(".") + 1;
                    var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
                    if (extFile == "jpg" || extFile == "jpeg" || extFile == "png" || extFile == "gif") {} else {
                        ban = 0;
                    }
                }
                if (ban == 1) {
                    $('#form-fotos').submit();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Solo se permiten fotos, verifica tus archivos!',
                    })
                }
            }
        }

        owl = $("#owl-demo");

        function cargarFotos(codigo) {
            owl.empty();
            $.ajax({
            type: "POST",
            url: '{{ route('fotos.listadoFotos') }}',
            data: {'codigo': codigo, '_token': "{{ csrf_token() }}"},
            success: function(data){
                owl.trigger('destroy.owl.carousel');
                data = JSON.parse(data);
                let html = '';
                for (let index = 0; index < data.length; index++) {
                    const element = data[index];
                    console.log(element);
                    html += '<div class="item">'+
                                    '<img src="'+element.archivo+'" alt="" />'+
                                '</div>';
                }
                $('.owl-carousel').html(html);
                console.log(html);
                setTimeout(() => {
                    owl.owlCarousel({
                        navigation : true, // Show next and prev buttons
                        slideSpeed : 300,
                        paginationSpeed : 400,
                        items : 1,
                        itemsDesktop : false,
                        itemsDesktopSmall : false,
                        itemsTablet: false,
                        itemsMobile : false
                    });
                }, 500);
                if(owl.hasClass('owl-hidden')){
                    owl.removeClass('owl-hidden');
                }
            }
            });
        }
    </script>

    <script></script>
</body>

</html>
