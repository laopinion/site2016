<?php include("pautas/secciones.php"); ?>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="servicios">
      <div class="content">
        <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
        <div class="izq">
           <!--Droguerias--><?php $block =block_load('block',69); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Droguerias-->
        <!--Notarias--><?php $block =block_load('block',70); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Notarias-->
        </div>
        <div class="der">
        <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--Edicion impresa--><?php $view = views_get_view('sidebar'); print $view->preview('block_4'); ?><!--FIN Edicion impresa-->
        <!--Calendario tributario--><?php $view = views_get_view('sidebar'); print $view->preview('block_6'); ?><!--FIN Calendario triubtario-->
        <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--Suscribcion--><div class="suscripcion"><a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion2.jpg"></a></div><!--FIN Suscribcion-->
        <!--Clasificados--><div class="clasificados"><a href="http://clasificados.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/clasificados.jpg"></a></div><!--FIN Clasificados-->
           <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
        </div>         
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->