<!--Contenido-->
<div id="columnista">
  <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
  <div class="izq">
       <?php include("compartir.tpl.php"); ?>
       <?php include("recomendada.tpl.php"); ?>
       <?php include("recomendada_movil.tpl.php"); ?>
    <div class="contenido">
      <?php
      print "<div class=foto>";
      print render($content['field_imagen']);
      if(render($content['field_imagen'][0]['#item']['alt'])){ 
      }
      print "</div>";
      print "<h2 class=titulo>".$title."</h2>";
      print "<div class=texto>".render($content['body'])."</div>"; 
      ?>            
    </div>
    <div class="columnas">
      <h2>Columnas de opinión</h2><div class="linea"></div>
      <?php $view = views_get_view('detalles'); print $view->preview('block_8'); ?>
    </div>

  </div><!--FIN Izquierda-->
  <div class="der">
    <!--Columnistas destacados--><?php $view = views_get_view('opinion'); print $view->preview('block_4'); ?><!--FIN Columnistas destacados-->
    <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',54); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
    <!-- + Leidas--><?php $view = views_get_view('sidebar'); print $view->preview('block_5'); ?><!--FIN + Leidas-->
    <!-- Twitter --> <?php $block =block_load('block',63); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?> <!--FIN Twitter -->  
    <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
  </div><!--FIN Derecha-->
</div>
<!--Fin Contenido-->