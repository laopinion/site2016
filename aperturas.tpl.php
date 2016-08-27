  <!--APERTURAS-->      
  <div id="aperturas">
    <?php
      list ($apertura1, $apertura2, $apertura3, $ultima_hora) = aperturas_output();
      if($apertura1 == "1"){
        //Apertura One
       $view = views_get_view('aperturas'); print $view->preview('block'); 
       $view = views_get_view('aperturas'); print $view->preview('block_1'); 
       //Fin apertura One
      }elseif ($apertura2 == "1") {
         //<!--Apertura Two-->
        $view = views_get_view('aperturas'); print $view->preview('block_2'); 
        $view = views_get_view('aperturas'); print $view->preview('block_3');
        $view = views_get_view('aperturas'); print $view->preview('block_4');
       //Fin apertura Two-->
      }elseif ($apertura3 == "1") {
        //<!--Apertura Three-->
        $view = views_get_view('aperturas'); print $view->preview('block_5');
        $view = views_get_view('aperturas'); print $view->preview('block_6');
        //Fin apertura three
      }

      if($ultima_hora == "1"){
        //vista de las ultimas horas.
      }
    ?>
  </div>
  <!--FIN APERTURAS-->
