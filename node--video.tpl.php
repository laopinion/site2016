<!-- Script player -->
<script>
jQuery (function($){
  $(document).ready(function(){
    var id = $(".contenido .video_id .field-name-field-video-id .field-item").html();
    var youtubeplayer = "<iframe id=frame-video width=640 height=370 src=http://www.youtube.com/embed/" + id + "?hl=es&fs=1&rel=0&showinfo=0 frameborder=0 allowfullscreen></iframe>";
    var facebookplayer = "<iframe src=https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2Fvideos%2F" + id + "%2F&width=640&show_text=false&height=370&appId width=640 height=370 style=border:none;overflow:hidden scrolling=no frameborder=0 allowTransparency=true></iframe>";
    $('.video-player').append(videoplayer);
  });
});
</script>
<!-- FIN Script player -->

<!--Contenido-->
<div id="nota">
  <!--ANUNCIO 1000x30--><div class="pauta p1000x30"><?php $block =block_load('block',57); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN ANUNCIO 1000x30-->
  <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
  <div class="izq">
       <!--COMPARTIR-->
       <div class="compartir">
        <script>
        !function(d,s,id){
          var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
          if(!d.getElementById(id)){
            js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js,fjs);
          }
        }(document,"script","twitter-wjs");
        </script>
        <ul class="redes_sociales">
          <!--<a class="facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php //print base_path().drupal_get_path_alias('node/'.$nid); ?>&amp;title=<?php //print $title; ?>', 'facebook-share-dialog', 'width=626,height=436'); return false;">
            <div id="Btn_Facebook"><h2>Compartir</h2></div>
          </a>-->
          <li class="fb"><a class="st_facebook_large" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=www.laopinion.com.co<?php print $node_url ?>&amp;title=<?php print $title ?>', 'facebook-share-dialog', 'width=626,height=436'); return false;"></a></li>
          <li class="tw"><a class="st_twitter_large" href="https://twitter.com/intent/tweet?original_referer=www.laopinion.com.co<?php print $node_url ?>&amp;text=<?php print $title ?>&amp;tw_p=tweetbutton&amp;url=www.laopinion.com.co<?php print $node_url ?>"></a></li>
          <li class="go"><a class="st_googleplus_large" href="#" onclick="window.open('https://plus.google.com/share?url=www.laopinion.com.co<?php print $node_url ?>', 'Google +','width=626,height=436'); return false;"></a></li>
          <li class="pin"><a class="st_pinterest_large" href="#" onclick="window.open('http://pinterest.com/pin/create/button/?url=www.laopinion.com.co<?php print $node_url ?>', 'Pinterest','width=626,height=436'); return false;"></a></li>
        </ul>

      <!--  <?php // $block =block_load('block',19); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output;
        ?> -->
      </div><!--FIN COMPARTIR-->

      <div class="recomendada">
        <div class="flecha"></div>  
        <!--Nota recomendada--><?php $view = views_get_view('detalles'); print $view->preview('block_4'); ?><!--FIN Nota recomendada-->
      </div>
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
      print "<div class=video_id>".render($content['field_video_id'])."</div>";
      print "<div class=video-player></div>";
      print "<div class=miniatura>".render($content['field_imagen'])."</div>";
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

    <div class="mas_videos">
    <!--Más videos--><div class="mas_videos"><h2>Más videos</h2><div class="linea"></div></div><?php $view = views_get_view('detalles'); print $view->preview('block_7'); ?><!--FIN Más videos-->
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