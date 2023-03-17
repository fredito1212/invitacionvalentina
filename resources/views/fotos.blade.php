<!-- Begin Tentang Sherly and Daeng -->
<section class="section-light regular-section is-fullheight" id="tentang-sherly-daeng">
    <div class="container">
      <div class="columns is-multiline">
      <div class="column has-text-centered is-12 prolog">
        <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear"><i class="fa-solid fa-heart fa-beat"></i> Mis fotos</h1>

        @if (date("d/m/Y") != '18/03/2023' || date("d/m/Y") == '19/03/2023' || date("d/m/Y") == '20/03/2023' || date("d/m/Y") == '21/03/2023')
            @php
                $rand = rand(1,3);
                $contador = 0;
            @endphp
            {{-- {{ $rand }} --}}
            <div class="tile is-ancestor">
            @foreach ($listado as $l)
                @if ($rand == $contador)
                    @php $contador = 0;
                    while(True){
                        $new = rand(1,3);
                        if ($new != $rand){
                            // echo $rand.'-'.$new;
                            $rand = $new;
                            break;
                        }
                    }
                    @endphp
                    </div>
                    {{-- {{ $rand }} --}}
                    <div class="tile is-ancestor">
                @endif
                <div class="tile is-parent">
                    <article onclick="cargarFotos('{{ $l['codigo'] }}');" class="tile is-child foto notification js-modal-trigger" data-target="modalcarousel" data-aos="fade-up" data-aos-easing="linear" style='background-image: linear-gradient(rgba(95, 2, 2, 0.5), rgba(48, 47, 47, 0.9)), url("{{ $l['foto'] }}")'>
                    <div class="content" >
                        <p class="title-foto has-text-centered is-vcentered " style="vertical-align: text-bottom;">
                        {{ $l['nombre'] }}
                        </p>
                        <p class="subtitle-foto has-text-centered is-vcentered"><i class="fas fa-camera"></i> {{ $l['total'] }} Fotografia(s)</p>
                    </div>
                    </article>
                </div>
                @php $contador++; @endphp
            @endforeach
            </div>
        @else
            <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
                <h1 class="title has-text-centered section-title">Próximamente</h1>
            </div>
        @endif

      <!-- IMAGES -->
      <div class="space40px"></div>
        <div data-aos="fade-up" data-aos-easing="linear">
          <img src="image/divider-leaves.png" class="divider has-vertically-align" alt="~~~">
        </div>
        @if (date("d/m/Y") != '18/03/2023' || date("d/m/Y") == '19/03/2023' || date("d/m/Y") == '20/03/2023' || date("d/m/Y") == '21/03/2023')
            <button class="button is-success js-modal-trigger" data-target="modalfotos" aria-haspopup="true" data-aos="fade-up" data-aos-easing="linear">
                <i class="fas fa-camera"></i>&nbsp;&nbsp; Subir fotos
            </button>
        @endif
        <div class="space40px"></div>
      </div>
    </div>
  </section>

  <!-- End Tentang Sherly dan Daeng -->

