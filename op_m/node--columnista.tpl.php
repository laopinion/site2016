<?php include("pautas/secciones.php"); ?>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="perfil_columnista">
    <div class="izq">
    <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <!--ANUNCIO 1000x30--><div class="p1000x30"><?php  $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
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
         <?php print EjecutarViewCacheArg('opinion','block_9','q'.$_GET["q"],'mediano'); ?>
       </div>
    </div><!--Fin izquierda-->

    <div class="der">
      <!--Columnistas Destacado--><?php print EjecutarViewCache('opinion','block_4','mediano'); ?><!--FIN Columnistas Destacado-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/embimedia_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_1','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->   
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_2','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->  
      <!--ANUNCIO 300x600--><div class="pauta p300x600" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x600.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
      <!--Inicio Suscripciones--> 
      <div class="suscripciones">
        <a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion.png" alt="suscripciones"></a>
      </div><!--FIN Suscripciones-->
      <!--ANUNCIO ADMAN--><?php include("pautas/adman_inbanner.php"); ?><!--FIN ANUNCIO ADMAN-->    
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_5','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x600--><div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/lemonnet_2.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_6','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->
      <!--Mundo Infantil--><img src="<?php print base_path(); ?>sites/default/files/ads/2016/10/mundoinfantil.gif"><!--FIN Mundo Infantil-->    
    </div><!--FIN Derecha-->
</section><!--Fin seccion-->