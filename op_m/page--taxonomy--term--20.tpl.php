<?php include("pautas/script_secciones.php"); ?>
<?php include("pautas/clickio_fixed.php"); ?>
<div class="pautas_header">
    <!--ANUNCIO 970x90--><div class="pauta p970x90"><div class="info"></div><?php include("pautas/dfp/S_970x90.php"); ?></div><!--FIN 1.ANUNCIO 970x90-->
</div>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/dfp/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><div class="layer"><?php include("pautas/dfp/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="participacion">
      <div class="content">
        <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/dfp/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
        <!--Centro--><?php print EjecutarViewCache('s_general','block_3','corto'); ?><!--FIN Centro-->
        <!--Multimedia--><?php print EjecutarViewCache('s_general_sub','block_21','corto'); ?><!--FIN Multimedia-->
        <div class="izq">
         <!--denuncia--><?php $block = module_invoke('webform', 'block_view', 'client-block-134');print render($block['content']); ?><!--FIN denuncia-->
        </div>
        <div class="der">
          <!--Edicion impresa--><?php print EjecutarViewCache('sidebar','block_4','mediano'); ?><!--FIN Edicion impresa-->
          <!--Suscribcion--><div class="suscripcion"><a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion2.jpg"></a></div><!--FIN Suscribcion-->
          <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/S_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
          <!--Clasificados--><div class="clasificados"><a href="http://clasificados.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/clasificados.jpg"></a></div><!--FIN Clasificados-->
        </div>
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->
