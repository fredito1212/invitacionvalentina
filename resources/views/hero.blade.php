<!-- Begin Hero Content-->
<div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="subtitle">Mi Bautizo</h1>
      <h2 class="title">Aislin Valentina<br>Andrade Bravo</h2>
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
