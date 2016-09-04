<?php include("pautas/secciones.php"); ?>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="secciones">
      <div class="content">
        <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--ANUNCIO 1000x30--><div class="p1000x30"><?php // $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
        <div class="izq">
          <!--Destacada--><?php $view = views_get_view('s_general'); print $view->preview('block'); ?><!--FIN Destacada-->
          <!--Lista--><?php $view = views_get_view('s_general'); print $view->preview('block_2'); ?><!--FIN Lista-->
        </div>
        <div class="der movil">
          <!--Derecha--><?php $view = views_get_view('s_general'); print $view->preview('block_1'); ?><!--FIN Derecha-->
          <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        </div> <!--Fin der-->
        <div class="mid" style="border-top: 2px solid #B4B7BB"><!--Seguir leyendo-->          
          <!--Centro--><?php $view = views_get_view('s_general'); print $view->preview('block_5'); ?><!--FIN Centro-->
          <div class="divisor"></div>
          <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        </div><!--Fin Seguir leyendo--> 
        <!--ANUNCIO 728x90--><div class="pauta desktop p728x90" style="margin: 0 135px 15px 135px;"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_728x90.php"); ?></div></div><!--FIN ANUNCIO 728x90-->
        <div class="mid" style="border: none;"><!--Mas noticias-->            
          <!--Centro--><?php $view = views_get_view('s_general'); print $view->preview('block_4'); ?><!--FIN Centro-->
        </div><!--Mas noticias--> 
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->
