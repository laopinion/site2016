<?php include("pautas/secciones.php"); ?>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="perfil_columnista">
    <div class="izq">
    <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <!--ANUNCIO 1000x30--><div class="p1000x30"><?php  $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
       <?php include("compartir.tpl.php"); ?>
       <?php //include("recomendada.tpl.php"); ?>
       <?php //include("recomendada_movil.tpl.php"); ?>
       <div class="contenido">
          <?php
            print "<div class=foto>";
            print render($content['field_imagen']);
            if(render($content['field_imagen'][0]['#item']['alt'])){ 
            }
            print "</div>";
            print "<div>
                  <h2 class=titulo>".$title."</h2>
                  <div class=texto>".render($content['body'])."</div>
            </div>";
          ?>            
       </div>
       <div class="columnas">
         <?php $view = views_get_view('opinion'); print $view->preview('block_9'); ?>
       </div>
    </div><!--Fin izquierda-->

    <div class="der">
      <!--Columnistas Destacado--><?php $view = views_get_view('opinion'); print $view->preview('block_4'); ?><!--FIN Columnistas Destacado-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_5'); ?> <!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_6'); ?> <!--FIN Noticias Recientes-->   
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--> <!--FIN Noticias Recientes-->  
      <!--ANUNCIO 300x600--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x600.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Inicio Suscripciones--> 
      <div class="suscripciones">
        <a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion.png" alt="suscripciones"></a>
      </div><!--FIN Suscripciones-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos_n.jpg"></a></div><!--FIN Juegos-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/lemonnet_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->    
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/adman_inbanner.php"); ?></div></div><!--FIN ANUNCIO 300x250-->    
    </div><!--FIN Derecha-->
</section><!--Fin seccion-->