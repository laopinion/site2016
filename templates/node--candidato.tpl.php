<!--Contenido-->
<div id="candidato">
  <div class="izq">
       <?php include("compartir.tpl.php"); ?>
    <div class="contenido">
      <?php
      print "<div class=foto>";
      print render($content['field_portada']);
      if(render($content['field_portada'][0]['#item']['alt'])){ 
      }
      print "</div>";
      print "<div class=info>";
      print "<div class=candidatura><span>Candidato a la </br></span>".render($content['field_candidatura'])."</div>";
      print "<div class=municipio>".render($content['field_municipios'])."</div>";
      print "<div class=anno>".render($content['field_postulacion'])."</div>";
      print "</div>";
      print "<h2 class=titulo>".$title."</h2>";
      print "<div class=texto>".render($content['body'])."</div>"; 
      ?>            
    </div>
    <!--Lista--><?php $view = views_get_view('secciones_especiales'); print $view->preview('block_11'); ?><!--FIN Lista-->

  </div><!--FIN Izquierda-->
  <div class="der">
    <!--Alcaldia--><?php $view = views_get_view('secciones_especiales'); print $view->preview('block_12'); ?><!--FIN Alcaldia-->
    <!--Gobernacion--><?php $view = views_get_view('secciones_especiales'); print $view->preview('block_13'); ?><!--FIN Gobernacion-->
    <!--ANUNCIO 300x600--><div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',67); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
    <!-- Twitter --> <?php $block =block_load('block',63); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?> <!--FIN Twitter -->  
    <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
  </div><!--FIN Derecha-->
</div>
<!--Fin Contenido-->