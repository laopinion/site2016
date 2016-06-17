<!-- Script player -->
<script>
jQuery (function($){
  $(document).ready(function(){
    var id = $(".contenido .audio_id .field-name-field-podcast-id .field-item").html();
    var audioplayer = "<iframe width=640px height=250 scrolling=no frameborder=no src=https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/" + id + "&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true></iframe>";
    $('.audio-player').append(audioplayer);
  });
});
</script>
<!-- FIN Script player -->

<!--Contenido-->
<div id="caricatura">
  <!--ANUNCIO 1000x30--><div class="pauta p1000x30"><?php $block =block_load('block',57); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN ANUNCIO 1000x30-->
  <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
  <div class="izq">
       <?php include("compartir.tpl.php"); ?>
       <?php include("recomendada.tpl.php"); ?>
       <?php include("recomendada_movil.tpl.php"); ?>
    <div class="contenido">
      <?php 
      //print "<h2 class=titulo>".$title."</h2>";
      ?>
      <!--Resumen--><?php $view = views_get_view('detalles'); print $view->preview('block_1'); ?><!--FIN Resumen-->
      <?php
      print "<div class=foto>";
      print render($content['field_imagen']);
      print "</div>";
      print "<div class=fecha>".render($content['field_fecha_de_publicacion'])."</div>";
      print "<div class=autor>".render($content['field_caricaturista'])."</div>";
      ?> 
    </div>
    
    <div class="comentarios">
      <h2>Comentarios</h2>
      <div class="linea"></div>
      <div class="bloque">
          <?php include("disqus.tpl.php"); ?>

      </div>
    </div>

    <div class="mas_caricaturas">
    <!--Más caricaturas--><div class="mas_caricaturas"><h2>Más caricaturas</h2><div class="linea"></div><div class="paginador"><div class="item1 item">1</div><div class="item2 item">2</div></div></div><?php $view = views_get_view('detalles'); print $view->preview('block_5'); ?><!--FIN Más caricaturas-->
    </div>


    <!--ANUNCIO 468x60--><div class="pauta p468x60"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',34); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 468x60-->

  </div><!--FIN Izquierda-->
  <div class="der">
    <!--ANUNCIO 300x250--><div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',67); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
    <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',54); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
    <!-- Twitter --> <?php $block =block_load('block',63); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?> <!--FIN Twitter -->     
    <!-- + Leidas--><?php $view = views_get_view('sidebar'); print $view->preview('block_5'); ?><!--FIN + Leidas-->
  </div><!--FIN Derecha-->
</div>
<!--Fin Contenido-->
