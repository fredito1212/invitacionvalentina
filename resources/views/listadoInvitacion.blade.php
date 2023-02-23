<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#BC8887" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Listado de invitaciones</title>

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
    <div class="container">
        <div class="notification has-background-danger has-text-white">
          Listado de invitaciones
        </div>
    </div>



    <div class="container mt-6">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                  Invitados
                </p>
                <button class="button is-info mt-1 mr-4" onclick="mostrarRegistro();"><i class="fas fa-plus"></i>&nbsp;Registrar</button>
            </header>
            <div class="card-content">
                <div class="content">
                    <div class="container mb-4">
                        @if ($message = Session::get('success'))
                        <div class="notification is-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                        @if ($message = Session::get('error'))
                        <div class="notification is-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                    </div>


                    <div class="container" id="div-registro" style="display:none;">
                        <hr>
                        <h4>Registro de invitado</h4>
                        <form action="invitaciones/registrar" method="post">
                            @csrf
                            <div class="columns">
                                <div class="column">
                                    <input type="text" id="nombre" name="nombre" class="input is-rounded" placeholder="Nombre del invitado" required>
                                </div>
                                <div class="column">
                                    <input type="text" id="telefono" name="telefono" class="input is-rounded" placeholder="Teléfono" required maxlength="10">
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <input type="number" id="invitados" name="invitados" class="input is-rounded" placeholder="No. de invitados" value="1" required>
                                </div>
                                <div class="column">
                                    <button type="submit" class="button is-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
                                    <a class="button is-danger" onclick="cerrar('div-registro')"><i class="fas fa-times"></i>&nbsp;Cerrar</a>
                                </div>
                            </div>

                        </form>
                        <hr>
                    </div>

                    <div class="container" id="div-modificacion" style="display:none;">
                        <hr>
                        <h4>Registro de invitado</h4>
                        <form action="invitaciones/actualizar" method="post">
                            @csrf
                            <input type="hidden" name="idmod" id="idmod">
                            <div class="columns">
                                <div class="column">
                                    <input type="text" id="nombremod" name="nombremod" class="input is-rounded" placeholder="Nombre del invitado" required>
                                </div>
                                <div class="column">
                                    <input type="text" id="telefonomod" name="telefonomod" class="input is-rounded" placeholder="Teléfono" required maxlength="10">
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <input type="number" id="invitadosmod" name="invitadosmod" class="input is-rounded" placeholder="No. de invitados" required>
                                </div>
                                <div class="column">
                                    <button type="submit" class="button is-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
                                    <a class="button is-danger" onclick="cerrar('div-modificacion')"><i class="fas fa-times"></i>&nbsp;Cerrar</a>
                                </div>
                            </div>

                        </form>
                        <hr>
                    </div>

                    <div class="container">
                        <div class="columns">
                            <div class="column has-text-centered">
                                <h3>Invitaciones:</h3>
                                <h3>{{ $invitados }}</h3>
                            </div>
                            <div class="column has-text-centered">
                                <h3>Confirmados:</h3>
                                <h3>{{ $confirmados }}</h3>
                            </div>
                            <div class="column has-text-centered">
                                <h3>Total invitados:</h3>
                                <h3>{{ $total }}</h3>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="table-container">
                        <table class="table is-striped is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Nombre</td>
                                    <td>Telefono</td>
                                    <td>Invitados</td>
                                    <td>Confirmado</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datos as $d)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $d->nombre }}</td>
                                        <td>{{ $d->telefono }}</td>
                                        <td>{{ $d->invitados }}</td>
                                        <td>
                                            @if ($d->confirmacion)
                                                <i class="fas fa-circle-check has-text-success"></i>
                                            @else
                                                <i class="fas fa-clock has-text-info"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!$d->confirmacion)
                                            <form action="/invitaciones/confirmar" method="post" id="formcon" style="display: inline-block" class="mt-1">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $d->id }}">
                                                <button class="button is-success is-small" type="submit" data-tooltip="Confirmar asistencia">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                            @endif
                                            <button onclick="modificarRegistro({{ $d->id }}, '{{ $d->nombre }}', '{{ $d->telefono }}', {{ $d->invitados }})" class="mt-1 button is-secondary is-small" data-tooltip="Editar">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button onclick="enviarinvitacion('{{ $d->nombre }}', '{{ $d->telefono }}', '{{ $d->codigo }}')" class="mt-1 button is-info is-small" data-tooltip="Enviar invitacion por WA">
                                                <i class="fas fa-envelope"></i>
                                            </button>
                                            <button onclick="eliminar({{ $d->id }})" class="mt-1 button is-danger is-small" data-tooltip="Eliminar">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="/invitaciones/eliminar" method="post" id="formdel">
        @csrf
        <input type="hidden" id="iddel" name="iddel">
    </form>


    <!-- End Main Content -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function cerrar(div){
            $('#'+div).hide(200);
        }

        function mostrarRegistro() {
            $('#div-registro').show(200);
        }

        function modificarRegistro(id, nombre, telefono, invitados) {
            $('#idmod').val(id);
            $('#nombremod').val(nombre);
            $('#telefonomod').val(telefono);
            $('#invitadosmod').val(invitados);
            $('#div-modificacion').show(200);
        }

        function enviarinvitacion(nombre, telefono, codigo) {
            let invitacion = 'https://api.whatsapp.com/send?phone=';
            invitacion += telefono;
            invitacion += '&text=Hola%20';
            invitacion += nombre.replace(' ', '%20');
            invitacion += '%20nos%20es%20grato%20invitarte%20al%20bautizo%20de%20valentina,%20confirma%20tu%20invitaci%C3%B3n%20en%20el%20siguiente%20enlace%20https://invitacionvalentina.000webhostapp.com'
            invitacion += '/'+codigo;
            window.open(invitacion, '_blank');
        }

        function eliminar(id) {
            Swal.fire({
                title: '¿Estas seguro?',
                text: "Este cambio no se puede revertir!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                    $('#iddel').val(id);
                    $('#formdel').submit();
                })
        }
    </script>
  </body>
</html>
