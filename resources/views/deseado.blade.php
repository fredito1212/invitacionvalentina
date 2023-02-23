<!-- Begin RSVP Content -->
<section class="section-dark contact" id="rsvp">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-12 prolog">
                <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear"><i
                        class="fa-solid fa-check-double fa-fade"></i> Asistencia</h1>
            </div>
            <div class="column is-12 prolog has-text-centered" data-aos="fade-up" data-aos-easing="linear">

                <h1 class="title">Hola {{ $datos->nombre }} @if($datos->invitados > 0) y familia @endif</h1>
                <div class="space40px"></div>
                <p class="h2 subtitle">
                    Es un honor y una felicidad para nosotros
                    <br>
                    que aceptes la invitación a está ceremonia tan importante
                    <br>
                </p>
                @if ($datos->confirmacion)
                    <p class="h2 title">
                        <br>
                        GRACIAS POR TU CONFIRMACIÓN
                        <br>
                    </p>
                    {!! QrCode::size(300)->generate($datos->codigo) !!}


                    <p class="h2 subtitle">
                        <br>
                        Descarga las invitaciones
                    </p>
                    <a href="/image/invitacionMisa.jpeg" download class="button is-rounded is-medium is-info mr-2 ml-2"
                        target="_blank" data-aos="zoom-in">
                        <i class="fas fa-church"></i>
                        &nbsp;&nbsp;Misa
                    </a>

                    <a href="/image/invitacionSalon.jpeg" download class="button is-rounded is-medium is-primary mt-4 mr-2 ml-2"
                        target="_blank" data-aos="zoom-in">
                        <i class="fas fa-umbrella-beach"></i>
                        &nbsp;&nbsp;Ceremonia
                    </a>
                @else
                    <p class="h2 subtitle">
                        <br>
                        Si pudieras asistir esperamos tu confirmación
                        <br>
                    </p>
                    <div class="space40px"></div>
                    <form action="/{{ $datos->codigo }}/confirmar" method="post">
                        @csrf
                        <button type="submit"  class="button is-rounded is-medium is-success">
                            <i class="fas fa-check"></i>
                            &nbsp;&nbsp;Confirmar
                        </button>
                    </form>
                    <div class="space40px"></div>
                @endif
                <p class="h2 subtitle">
                    <br>
                    Si no es posible asistir a nuestra celebración, está bien,
                    <br>
                    esperamos verte muy pronto
                    <br>
                    <br>
                    Información:
                    <br>En la celebración, proporcionaremos desinfectante para manos
                    <br>y controles de temperatura corporal.
                    <br><br>
                    Para mayor información mandanos un mensaje en whatsapp:
                </p>

                <a href="https://api.whatsapp.com/send?phone=4431346878&text=Hola%20Zaida" class="button btn-whatsapp"
                    target="_blank" data-aos="zoom-in">
                    <i class="fab fa-whatsapp"></i>
                    &nbsp;&nbsp;Zaida Elizabeth
                </a>

                <a href="https://api.whatsapp.com/send?phone=4431016294&text=Hola%20Sergio" class="button btn-whatsapp"
                    target="_blank" data-aos="zoom-in">
                    <i class="fab fa-whatsapp"></i>
                    &nbsp;&nbsp; Sergio
                </a>
                <div class="space40px"></div>

                <div class="space40px"></div>
                <div data-aos="fade-up" data-aos-easing="linear">
                    <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
                </div>
                <div class="space40px"></div>
                <p class="h2 subtitle" data-aos="fade-up" data-aos-easing="linear">
                    Familia Bravo Andrade
                </p>

            </div>

        </div>
    </div>
</section>
