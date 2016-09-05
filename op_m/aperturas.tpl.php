  <!--APERTURAS-->      
  <div id="aperturas">
    <?php
      list ($apertura1, $apertura2, $apertura3, $ultima_hora) = aperturas_output();
      if($apertura1 == "1"){
        //Apertura One
       print EjecutarViewCache('aperturas','block','corto');
       print EjecutarViewCache('aperturas','block_1','corto');
       //Fin apertura One
      }elseif ($apertura2 == "1") {
         //<!--Apertura Two-->
        print EjecutarViewCache('aperturas','block_2','corto');
        print EjecutarViewCache('aperturas','block_3','corto');
        print EjecutarViewCache('aperturas','block_4','corto');
       //Fin apertura Two-->
      }elseif ($apertura3 == "1") {
        //<!--Apertura Three-->
        print EjecutarViewCache('aperturas','block_5','corto');
        print EjecutarViewCache('aperturas','block_6','corto');
        //Fin apertura three
      }

      if($ultima_hora == "1"){
        //vista de las ultimas horas.
        print EjecutarViewCache('aperturas','block_7','corto');
      }
    ?>
  </div>
  <!--FIN APERTURAS-->
