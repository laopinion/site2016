<!--Contenido-->
<div id="autor">
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
    <div class="contenido">
      <?php
      print "<div class=foto>";
      print render($content['field_imagen']);
      if(render($content['field_imagen'][0]['#item']['alt'])){ 
      }
      print "</div>";
      print "<h2 class=titulo>".$title."</h2>";
      print "<div class=texto>".render($content['field_perfil'])."</div>"; 
      print "<div class=texto>".render($content['field_descripcion'])."</div>"; 
      ?>            
    </div>
    <div class="notas">
      <h2>Notas del autor</h2><div class="linea"></div>
      <?php $view = views_get_view('detalles'); print $view->preview('block_10'); ?>
    </div>

  </div><!--FIN Izquierda-->
  <div class="der">
    <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',54); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
    <!-- + Leidas--><?php $view = views_get_view('sidebar'); print $view->preview('block_5'); ?><!--FIN + Leidas-->
    <!-- Twitter --> <?php $block =block_load('block',63); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?> <!--FIN Twitter -->  
    <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
  </div><!--FIN Derecha-->
</div>
<!--Fin Contenido-->