  <!--SCRIPTS-->
  <!--
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript">if(typeof jQuery==='undefined'){document.write(unescape("<scri"+"pt src='<?php print base_path(); ?>sites/default/themes/op/js/jquery-1.8.2.min.js' type='text/javascript'></scri"+"pt>"));}</script>
  -->
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/jquery-1.10.min.js"></script>
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/modernizr.js"></script>
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/general.js"></script>
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/especiales.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/swiffy/v7.4/runtime.js"></script>
  
  <link href="<?php print base_path(); ?>sites/default/themes/op/css/style.css" rel="stylesheet" type="text/css">
  <!--FIN SCRIPT-->
<div id="container">
  <div id= "oreja_div"></div>
  <?php // include("laterales.tpl.php"); ?>
  
  <div id="header_movil">
    <?php include("header_movil.tpl.php"); ?>
  </div> 

  <header id="header">
    <!--PAUTAS INVISIBLES-->
    <!--Script Pauta Home--><?php // $block =block_load('block',37); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Script Pauta Home-->
    <!--Script Pauta PERA DIGITAL--><?php // $block =block_load('block',70); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Script Pauta PERA DIGITAL-->
    <!--Pautas Invisibles-->
    <!--Pauta barra flotante--><div class="pauta barraflotante"><?php $block =block_load('block',35); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div>
    <!--FIN PAUTAS INVISIBLES-->
    <div class="pautas_header">
    <!--1.ANUNCIO 728x90--><div class="pauta p728x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',30); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 728x90-->
    <!--2.ANUNCIO 220x90--><!--<div class="pauta p220x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',31); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>--><!--FIN 2.ANUNCIO 220x90-->
    <!--2.ANUNCIO 220x90--><!--<div class="pauta p220x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',71); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>--><!--FIN 2.ANUNCIO 220x90-->
    </div>
    <?php // print render($page['header']); ?>
    <?php include("header.tpl.php"); ?>
  </header> <!-- /#header -->

  <section id="home">
    
    <div id="home_content">
      <div class="especial_desktop"><?php include("especiales/960.html"); ?></div>
      <div class="especial_tablet"><?php include("especiales/640.html"); ?></div>
      <div class="especial_movil"><?php include("especiales/300.html"); ?></div>
      
      <!--ANUNCIO 1000x30 EXPANDIBLE--><div class="pauta p1000x30"><?php // $block =block_load('block',32); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN ANUNCIO 1000x30 EXPANDIBLE-->
      <!--Elecciones regionales--><?php // $block =block_load('block',76); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Elecciones regionales-->
      <div class="pauta_movil"></div>

      <!--APERTURAS-->
      <?php include("aperturas.tpl.php"); ?>
      <!--FIN APERTURAS-->
      <div class="hleft">
      <!--Destacada--><?php $view = views_get_view('front'); print $view->preview('block'); ?><!--FIN Destacada-->
      <div class="linea"></div>
      <!--Lista--><?php $view = views_get_view('front'); print $view->preview('block_1'); ?><!--FIN Lista-->
      <!--Indicadores economicos--><div id="indicadores_movil"><?php $block =block_load('block',59); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN Indicadores economicos-->
      <!--Deportes--><div class="deportes"><h2><a href="<?php print base_path(); ?>deportes">Deportes</a></h2><div class="linea"></div><div class="paginador"><div class="item1 item">1</div><div class="item2 item">2</div></div></div><?php $view = views_get_view('front'); print $view->preview('block_3'); ?><!--FIN Deportes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      <!--Cúcuta--><div class="cucuta"><h2><a href="<?php print base_path(); ?>cucuta">Cúcuta</a></h2><div class="linea"></div><div class="paginador"><div class="item1 item">1</div><div class="item2 item">2</div></div></div><?php $view = views_get_view('front'); print $view->preview('block_4'); ?><!--FIN Cúcuta-->
      <!--Otros--><?php $view = views_get_view('front'); print $view->preview('block_2'); ?><!--FIN Otros-->
      <!--Otros Medios--><?php // $view = views_get_view('front'); print $view->preview('block_14'); ?><!--FIN Otros Medios-->
      <!--Editorial--><?php $view = views_get_view('front'); print $view->preview('block_5'); ?><!--FIN Editorial-->
      <!--Columnistas--><?php $view = views_get_view('front'); print $view->preview('block_6'); ?><!--FIN Columnistas-->
      <!--Zona Comercial--><?php include("zonacomercial.tpl.php"); ?><!--FIN Zona comercial-->
      </div><!-- /#FIN home left-->
      <div class="hright">
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',20); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      <!--Indicadores economicos--><div id="indicadores"><?php $block =block_load('block',59); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN Indicadores economicos-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',23); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',76); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      <!-- + Leidas--><?php $view = views_get_view('sidebar'); print $view->preview('block_5'); ?><!--FIN + Leidas-->
      <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',24); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->      
      <!--Viral--><?php $view = views_get_view('sidebar'); print $view->preview('block_2'); ?><!--FIN Viral-->
      <!--Caricatura--><?php $view = views_get_view('sidebar'); print $view->preview('block_1'); ?><!--FIN Caricatura-->      
      <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',25); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
      </div><!-- /#FIN home right-->
      <div id="right_movil">
      <!--Caricatura--><?php $view = views_get_view('sidebar'); print $view->preview('block_1'); ?><!--FIN Caricatura-->      
      <!--ANUNCIO 300x250--><div class="pauta p300x250" style="margin-bottom:30px"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',20); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',23); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
      <!-- + Leidas--><?php $view = views_get_view('sidebar'); print $view->preview('block_5'); ?><!--FIN + Leidas-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250" style="margin-bottom:30px"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',20); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      </div><!-- /#FIN RIGHT movil-->  

    </div><!-- /#content home-->
    <div id="multimedia">
      <div class="hcenter">
        <div class="videos">
          <h2><a href="<?php print base_path(); ?>videos">Videos</a></h2><div class="linea"></div>
          <!--<div class="pagerV"><ul><li class="itemV1">1</li><li class="itemV2">2</li><ul></div>-->
          <!--Videos--><?php $view = views_get_view('front'); print $view->preview('block_9'); ?><!--FIN Videos-->
        </div><!--FIN Videos-->  
        <div class="galerias">
          <div class="imagenes"><h2><a href="<?php print base_path(); ?>galerias">Galerías</a></h2><div class="linea"></div><div class="paginador"><div class="item1 item">1</div><div class="item2 item">2</div></div></div>
          <!--Galerias--><?php $view = views_get_view('front'); print $view->preview('block_10'); ?><!--FIN Galerias-->
        </div><!--FIN Galerias-->  
      </div><!-- /#FIN home center-->
    </div><!--FIN Multimedia-->
   
    <div id="home_content">
      <div class="hleft">
      <!--Actualidad--><div class="actualidad"><h2><a href="<?php print base_path(); ?>actualidad">Actualidad</a></h2><div class="linea"></div></div>
      <!--Actualidad_izq--><?php $view = views_get_view('front'); print $view->preview('block_11'); ?>
      <!--Actualidad_der--><?php $view = views_get_view('front'); print $view->preview('block_12'); ?>
      <!--FIN Actualidad-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left;"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',24); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 200x200-->
      <!--Reportero ciudadano--><div class="participacion"><h2><a href="<?php print base_path(); ?>reportero-ciudadano">Reportero ciudadano</a></h2><div class="linea"></div></div><?php $view = views_get_view('front'); print $view->preview('block_13'); ?><!--FIN Reportero ciudadano-->
      <!--Entretenimiento--><?php $view = views_get_view('front'); print $view->preview('block_7'); ?><!--FIN Entretenimiento-->
      <!--Otros inferior--><?php $view = views_get_view('front'); print $view->preview('block_8'); ?><!--FIN Otros inferior-->

      </div><!-- /#FIN home left-->
      <div class="hright">
      <!--Participacion--><?php $view = views_get_view('sidebar'); print $view->preview('block_7'); ?><!--FIN Participacion-->  
      <!--Viral--><?php $view = views_get_view('sidebar'); print $view->preview('block_2'); ?><!--FIN Viral-->  
      <!--Actividad Social--><?php $view = views_get_view('sidebar'); print $view->preview('block_3'); ?><!--FIN Actividad Social-->  
      <!--Tecnologia--><?php $view = views_get_view('sidebar'); print $view->preview('block_8'); ?><!--FIN Tecnologia--> 
      <!--ANUNCIO 300x100--><!--<div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // print EjecutarBlockCache('block',25,'hora'); ?></div></div>--><!--FIN 1.ANUNCIO 300x100-->
      </div><!-- /#FIN home right-->
      <div id="right_movil">
      <!--Participacion--><?php $view = views_get_view('sidebar'); print $view->preview('block_7'); ?><!--FIN Participacion-->  
      <!--Viral--><?php $view = views_get_view('sidebar'); print $view->preview('block_2'); ?><!--FIN Viral-->  
      <!--Actividad Social--><?php $view = views_get_view('sidebar'); print $view->preview('block_3'); ?><!--FIN Actividad Social-->  
      <!--Tecnologia--><?php $view = views_get_view('sidebar'); print $view->preview('block_8'); ?><!--FIN Tecnologia--> 
      </div><!-- /#FIN RIGHT movil-->  
    </div><!-- /#content home-->

    <div id="otros">
      <div class="hcenter">
        <!--Deleitese--><?php include("deleitese.tpl.php"); ?><!--FIN Deleitese-->
        <div class="servicios">
          <?php $block =block_load('block',64); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?>
        </div>
        <div class="bottom">
        <!--Edicion impresa--><?php $view = views_get_view('sidebar'); print $view->preview('block_4'); ?><!--FIN Edicion impresa-->
        <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
        <!--Clasificados--><?php $block =block_load('block',66); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Clasificados-->
        </div>
        <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50 fijo"></div><!--FIN ANUNCIO 320x50-->
      </div>  
    </div><!-- FIN servicios -->    


    <!-- <div id="content"><?php // print render($page['content']); ?></div> -->
  </section> <!-- /#main -->
  <div id="footer_movil">
    <?php include("footer_movil.tpl.php"); ?>
  </div> <!-- /#header -->
  <footer id="footer">
      <?php include("footer.tpl.php"); ?>
      <?php // print render($page['footer']) ?>
  </footer> <!-- /#footer -->  
</div> <!-- /#container -->
