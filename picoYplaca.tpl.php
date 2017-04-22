<?php
  $fecha = time(); 
  $dia =  date("w",$fecha); 
  $Dia = date("d");
?>
<section id="picoYplaca">
  <div class="info">
    <aside class="cerrar"></aside>
    <div class="carros">
      <h3>Carros y motociclestas con placas fuera de Cúcuta</h3>
      <i class="iconoCarro"></i>
      <div class="hoy">
        <aside>Hoy</aside>
        <p class="numeros">
          <?php 
            if ($dia =="1" ) { print "0 - 9";} 
            if ($dia =="2" ) { print "1 - 8";} 
            if ($dia =="3" ) { print "2 - 7";} 
            if ($dia =="4" ) { print "3 - 6";} 
            if ($dia =="5" ) { print "4 - 5";}else{
              print "NO";
            }
          ?>
        </p>
      </div>
      <div class="divisor">
        <i class="iconoReloj"></i>
      </div>
      <div class="horario">
        <p>Lunes a Viernes</p>
        <p><strong>7:30</strong>am / <strong>9:00</strong>am</p>
        <p><strong>11:30</strong>am / <strong>13:30</strong>pm</p>
        <p><strong>5:30</strong>pm / <strong>7:00</strong>pm</p>
      </div>
    </div>
    <div class="taxis">
      <h3>Taxis</h3>
      <i class="iconoCarro"></i>
      <div class="hoy">
        <aside>Sem.</aside>
        <p class="numeros">
          <?php 
            if ($dia =="1" ) { print "0";} 
            if ($dia =="2" ) { print "9";} 
            if ($dia =="3" ) { print "8";} 
            if ($dia =="4" ) { print "7";} 
            if ($dia =="5" ) { print "6";}else{
              print "NO";
            }

            // if ($dia =="1" ) { print "1";} 
            // if ($dia =="2" ) { print "2";} 
            // if ($dia =="3" ) { print "3";} 
            // if ($dia =="4" ) { print "4";} 
            // if ($dia =="5" ) { print "5";}else{
            //   print "NO";
            // } 
          ?>
        </p>
      </div>
      <div class="divisor">
        <i class="iconoReloj"></i>
      </div>
      <div class="horario">
        <p>Lunes a Viernes</p>
        <p>7:00am / 11:00pm</p>
      </div>
    </div>
    <div class="carrosV">
      <h3>Carros y motos venezolanos</h3>
      <i class="iconoCarro"></i>
      <div class="hoy">
        <aside>Hoy</aside>
        <p class="numeros">
          <?php 
            if ($dia =="1" ) { print "0 - 9";} 
            if ($dia =="2" ) { print "1 - 8";} 
            if ($dia =="3" ) { print "2 - 7";} 
            if ($dia =="4" ) { print "3 - 6";} 
            if ($dia =="5" ) { print "4 - 5";}else{
              print "NO";
            }
          ?>
        </p>
      </div>
      <div class="divisor">
        <i class="iconoReloj"></i>
      </div>
      <div class="horario">
        <p>Lunes a Viernes</p>
        <p>7:00am / 7:00pm</p>
      </div>
    </div>
    <div class="mapa">
      <i class="iconoMapa"></i>
      <p>Ver mapa</p>
      <div class="imgMapa">
        <a href="<?php echo $base_path; ?>sites/default/files/picoyplaca/picoyplaca.jpg" rel="lightbox"></a>
      </div>
    </div>
  </div>

  <div class="btnPyp">
    <i class="iconoPyp"></i>
    <p>Pico y placa</p>
  </div>
</section>