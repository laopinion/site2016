<?php include("pautas/secciones.php"); ?>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="actualidad">
      <div class="content">
        <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
        <div class="izq">
          <!--Destacada--><?php print EjecutarViewCache('s_general','block','corto'); ?><!--FIN Destacada-->
          <!--Lista--><?php print EjecutarViewCache('s_general','block_2','mediano'); ?><!--FIN Lista-->
        </div>
        <div class="der movil">
          <!--Derecha--><?php print EjecutarViewCache('s_general','block_1','mediano'); ?><!--FIN Derecha-->
          <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        </div> <!--Fin der-->
        <div class="mid">           
          <!--Economia--><?php print EjecutarViewCache('s_general_sub','block_7','mediano'); ?><!--FIN Economia-->
        </div>
        <!--ANUNCIO 728x90--><div class="pauta desktop p728x90" style="margin: 0 135px 15px 135px;"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_728x90.php"); ?></div></div><!--FIN ANUNCIO 728x90-->
         <div class="mid" style="border-bottom: none;">           
          <!--Politica--><?php print EjecutarViewCache('s_general_sub','block_8','mediano'); ?><!--FIN Politica-->
        </div>
        <div class="mid">           
          <!--Colombia--><?php print EjecutarViewCache('s_general_sub','block_9','mediano'); ?><!--FIN Colombia-->
        </div>
        <!--ANUNCIO 728x90--><div class="pauta desktop p728x90" style="margin: 0 135px 15px 135px;"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_728x90.php"); ?></div></div><!--FIN ANUNCIO 728x90-->
         <div class="mid" style="border-bottom: none;">           
          <!--Venezuela--><?php print EjecutarViewCache('s_general_sub','block_10','mediano'); ?><!--FIN Venezuela-->
        </div>
        <div class="mid">           
          <!--Mundo--><?php print EjecutarViewCache('s_general_sub','block_11','mediano'); ?><!--FIN Mundo-->
        </div>
        <div class="mid"><!--Seguir leyendo-->          
          <!--Centro--><?php print EjecutarViewCache('s_general','block_5','mediano'); ?><!--FIN Centro-->
          <div class="divisor"></div>
          <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        </div><!--Fin Seguir leyendo-->
        <div class="mid" style="border: none;"><!--Mas noticias-->            
          <!--Centro--><?php print EjecutarViewCache('s_general','block_4','hora'); ?><!--FIN Centro-->
        </div><!--Mas noticias--> 
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->
