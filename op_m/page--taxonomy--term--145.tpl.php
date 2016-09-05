<?php include("pautas/secciones.php"); ?>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="tendencias">
      <div class="content">
      <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
        <div class="izq">
          <!--Destacada--><?php print EjecutarViewCache('s_general','block','corto'); ?><!--FIN Destacada-->
          <!--Lista--><?php print EjecutarViewCache('s_general','block_2','corto'); ?><!--FIN Lista-->
        </div>
        <div class="der movil">
          <!--Derecha--><?php print EjecutarViewCache('s_general','block_1','corto'); ?><!--FIN Derecha-->
         <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        </div> <!--Fin der-->
        <div class="mid">           
          <!--Actividad Social--><?php print EjecutarViewCache('s_general_sub','block_15','mediano'); ?><!--FIN Actividad Social-->
        </div>
        <!--ANUNCIO 728x90--><div class="pauta desktop p728x90" style="margin: 0 135px 15px 135px;"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_728x90.php"); ?></div></div><!--FIN ANUNCIO 728x90-->
         <div class="mid" style="border-bottom: none;">           
          <!--Tecnología--><?php print EjecutarViewCache('s_general_sub','block_16','mediano'); ?><!--FIN Tecnología-->
        </div>
        <div class="mid" style="border-bottom: none;">           
          <!--Cultura--><?php print EjecutarViewCache('s_general_sub','block_17','mediano'); ?><!--FIN Cultura-->
        </div>
         <!--ANUNCIO 728x90--><div class="pauta desktop p728x90" style="margin: 0 135px 15px 135px;"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_728x90.php"); ?></div></div><!--FIN ANUNCIO 728x90-->
        <div class="mid" style="border-bottom: none;">           
          <!--Entretenimiento--><?php print EjecutarViewCache('s_general_sub','block_18','mediano'); ?><!--FIN Entretenimiento-->
        </div>
        <div class="mid" style="border-bottom: none;">           
          <!--Viral--><?php print EjecutarViewCache('s_general_sub','block_19','mediano'); ?><!--FIN Viral-->
        </div>
        <div class="mid">           
          <!--Vida y salud--><?php print EjecutarViewCache('s_general_sub','block_20','mediano'); ?><!--FIN Vida y salud-->
        </div>
        <div class="mid"><!--Seguir leyendo-->          
          <!--Centro--><?php print EjecutarViewCache('s_general','block_5','mediano'); ?><!--FIN Centro-->
          <div class="divisor"></div>
          <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        </div><!--Fin Seguir leyendo-->
        <div class="mid" style="border: none;"><!--Mas noticias-->            
          <!--Centro--><?php print EjecutarViewCache('s_general','block_4','mediano'); ?><!--FIN Centro-->
        </div><!--Mas noticias--> 
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->
