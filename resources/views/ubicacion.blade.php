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
    @if (isset($codigo))
        @if ($codigo)
            @if ($datos->confirmacion)
                <div class="space40px"></div>
                <div class="container">
                    <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
                    <p class="tempat is-larger has-text-centered ">
                        <strong>Salón Quinta las Palmas</strong>
                        <br>
                        Circuito del Aire #295
                        <br>
                        Lomas de la Campiña, Morelos, Mich.
                        <br>
                    </p>
                    </div>
                    <div class="section-map" data-aos="fade-up" data-aos-easing="linear">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.7968489049695!2d-101.24644684897241!3d19.63598108670412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0c843683f3f7%3A0xbce4429cc25a7610!2sLa%20Campi%C3%B1a%2C%20Pablo%20Galeana%20O%20las%20Galeras%2C%2058341%20Morelos%2C%20Mich.!5e0!3m2!1ses!2smx!4v1676275022669!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="space40px"></div>
                    <div class="has-text-centered" data-aos="fade-up" data-aos-easing="linear">
                    <a href="https://www.google.com/maps/dir//La+Campiña,+Pablo+Galeana+O+las+Galeras,+58341+Morelos,+Mich./@19.6359811,-101.2464468,17z/data=!4m17!1m7!3m6!1s0x842d0c843683f3f7:0xbce4429cc25a7610!2sLa+Campiña,+Pablo+Galeana+O+las+Galeras,+58341+Morelos,+Mich.!3b1!8m2!3d19.6357047!4d-101.2452947!4m8!1m0!1m5!1m1!1s0x842d0c843683f3f7:0xbce4429cc25a7610!2m2!1d-101.2452947!2d19.6357047!3e3?hl=es" class="button btn-cta" target="_blank" data-aos="zoom-in">
                        <i class="fas fa-directions"></i>
                        &nbsp;&nbsp;Google Maps
                    </a>
                    </div>
                </div>
            @endif
        @endif
    @endif
</section>
  <!-- End Lokasi Content -->
