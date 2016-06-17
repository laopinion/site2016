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
<div id="nota">
  <!--ANUNCIO 1000x30--><div class="pauta p1000x30"><?php $block =block_load('block',57); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN ANUNCIO 1000x30-->
  <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
  <div class="izq">
       <?php include("compartir.tpl.php"); ?>
       <?php include("recomendada.tpl.php"); ?>
       <?php include("recomendada_movil.tpl.php"); ?>
    <div class="contenido">
      <?php 
      print "<div class=seccion>".render($content['field_seccion'])."</div>";
      print "<div class=sep> - </div>";
      print "<div class=fecha>".render($content['field_fecha_de_publicacion'])."</div>";
      print "<h2 class=titulo>".$title."</h2>";
      ?>
      <!--Resumen--><?php $view = views_get_view('detalles'); print $view->preview('block_1'); ?><!--FIN Resumen-->
      <?php
      if (!empty($content['field_tags'])){ 
        print "<div class=etiquetas><span>Temas - </span>".render($content['field_tags'])."</div>";
        }
      print "<div class=audio_id>".render($content['field_podcast_id'])."</div>";
      print "<div class=audio-player></div>";
      print "<div class=texto>".render($content['body'])."</div>"; ?>
            
      <?php
      // if (!empty($content['field_autor'])){ 
      $view = views_get_view('detalles'); print $view->preview('block_3'); 
      //  }
      ?>
 
    </div>
    <div class="relacionadas">
     <?php
      if (!empty($content['field_contenidos_relacionados'])){ 
          print "<h2>Relacionadas</h2><div class=linea></div>
          <div class=item>".render($content['field_contenidos_relacionados'])."</div>";
        }
     ?>
    </div>

    <!--ANUNCIO 468x60--><div class="pauta p468x60"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',34); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 468x60-->
    <div class="comentarios">
      <h2>Comentarios</h2>
      <div class="linea"></div>
      <div class="bloque">
        <?php $DisqusBlock = block_load('disqus', 'disqus_comments');     
        $DisqusBlockOutput = drupal_render(_block_get_renderable_array(_block_render_blocks(array($DisqusBlock))));       
        print $DisqusBlockOutput; ?>
      </div>
    </div>
  </div><!--FIN Izquierda-->
  <div class="der">
    <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',53); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
    <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',54); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
    <!-- + Leidas--><?php $view = views_get_view('sidebar'); print $view->preview('block_5'); ?><!--FIN + Leidas-->
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',55); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
    <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
    <!-- Twitter --> <?php $block =block_load('block',63); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?> <!--FIN Twitter -->  
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',56); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
  </div><!--FIN Derecha-->
</div>
<!--Fin Contenido-->